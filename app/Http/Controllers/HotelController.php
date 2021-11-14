<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Customer;
use App\Hotel;
use App\Location;
use App\Room;
use DB;
use DateTime;
use Mail;
use Illuminate\Support\Facades\Session;
use Image;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function showHomePage(){
        $hotels = Hotel::where('available_room','>',0)
                        ->orderby('id','ASC')
                        ->take(6)
                        ->get();
        $blogs = Blog::where('publication_status',1)
            ->orderby('id','DESC')
            ->take(3)
            ->get();
        return view('front-end.home.home',[
            'hotels'=>$hotels,
            'blogs'=>$blogs
        ]);
    }
    public function showSignUp(){
        return view('front-end.auth.sign-up');
    }
    protected function validateCustomerInfo($request)
    {
        $this->validate($request,[
            'first_name'=> 'required',
            'last_name'=> 'required',
            'email'=> 'required|unique:customers,email',
            'password'=> 'required|unique:customers,password',
//             'phone_number'=> 'required|regex:/^(\+\d{1,3}[- ]?)?\d{10}$/|max:15|min:11',
            'phone_number'=> 'required|max:15|min:11',
            'address'=> 'required'
        ]);
    }
    public function saveCustomerInfo(Request $request){

        $this->validateCustomerInfo($request);

        $customer = new Customer();
        $customer->first_name   = $request->first_name;
        $customer->last_name    = $request->last_name;
        $customer->email        = $request->email;
        $customer->password     = bcrypt($request->password);
        $customer->phone_number = $request->phone_number;
        $customer->address      = $request->address;
        $customer->save();

        $customerId = $customer->id;
        Session::put('customerId',$customerId);
        Session::put('customerName',$customer->first_name.' '.$customer->last_name);

        $data= $customer->toArray();

        Mail::send('front-end.mail.confirmation-mail',$data,function($message) use ($data){
            $message->to($data['email']);
            $message->subject('Confirmation mail');
        });
        return redirect('/');
    }

    protected function putDataToSession($request)
    {
        Session::put('location_id',$request->location_id);
        Session::put('checkin_date',$request->checkin_date);
        Session::put('checkout_date',$request->checkout_date);
        Session::put('adult_select_value',$request->adult_select_value);
        Session::put('child_select_value',$request->child_select_value);
    }
    public function showAvailableHotel(Request $request)
    {

        $id = $request->location_id;
        $checkin_date = $request->checkin_date;
        $checkout_date = $request->checkout_date;
        $datetime1 = new DateTime($checkin_date);
        $datetime2 = new DateTime($checkout_date);
        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');
        $hotels = Hotel::where('location_id',$id)->get();
        if($hotels)
        {
            $this->putDataToSession($request);
            Session::put('total_day',$days);
            return view('front-end.hotel.hotel',[
                'hotels'=>$hotels
            ]);
        }
        return redirect('/')->with('errors',"Sorry,We don't have available hotel there Right now!");
    }
    public function showAddHotel(){
        $locations = Location::all();
        return view('admin.hotel.add-hotel',[
            'locations'=>$locations
        ]);
    }
    public function showManageHotel(){
        $hotels = DB::table('hotels')
            ->join('locations','locations.id','=','hotels.location_id')
            ->select('hotels.*','locations.location_name')
            ->get();
        return view('admin.hotel.manage-hotel',[
            'hotels'=>$hotels
        ]);
    }

    protected function uploadHotelImage($request){
        $hotelImage = $request->file('hotel_image');
        $imageType = $hotelImage->getClientOriginalExtension();
        $imageName = $request->hotel_name.'.'.$imageType;
        $directory = 'admin/hotel-images/';
        $imageUrl = $directory.$imageName;
        Image::make($hotelImage)->save($imageUrl);
        return $imageUrl;

    }
    protected function validateHotelInfo($request)
    {
        $this->validate($request,[
            'location_id'=> 'required',
            'hotel_name'=> 'required|max:20|min:5',
            'room_numbers'=> 'required',
            'minimum_price'=> 'required',
            'hotel_facilities'=> 'required',
            'address'=> 'required',
            'description'=> 'required',
        ]);
    }

    public function saveHotel(Request $request){

        $this->validateHotelInfo($request);

        $imageUrl = $this->uploadHotelImage($request);

        $hotel = new Hotel();
        $hotel->location_id = $request->location_id;
        $hotel->hotel_name = $request->hotel_name;
        $hotel->room_numbers = $request->room_numbers;
        $hotel->available_room = $request->room_numbers;
        $hotel->minimum_price = $request->minimum_price;
        $hotel->hotel_facilities = $request->hotel_facilities;
        $hotel->address = $request->address;
        $hotel->description = $request->description;
        $hotel->hotel_image = $imageUrl;
        $hotel->save();
        return redirect('/hotel/add')->with('message','Hotel save successfully');
    }

    public function showAddHotelImage(){
        $hotels = Hotel::all();
        return view('admin.hotel.add-hotel-image',[
            'hotels'=>$hotels
        ]);
    }
    protected function uploadHotelImages($request){
        $id = $request->hotel_id;
        $hotel = Hotel::find($id);
        $images = \App\Image::where('hotel_id',$id)->get();
        $count = count($images);
        $hotelImage = $request->file('hotel_image');
        $imageType = $hotelImage->getClientOriginalExtension();
        $imageName = $hotel->hotel_name.$count.'.'.$imageType;
        $directory = 'admin/individual-hotel-images/';
        $imageUrl = $directory.$imageName;
        Image::make($hotelImage)->save($imageUrl);
        return $imageUrl;
    }
    public function saveHotelImage(Request $request){

        $this->validate($request,[
            'hotel_id'=> 'required',
            'hotel_image'=> 'required'
        ]);
        $imageUrl = $this->uploadHotelImages($request);
        $image = new \App\Image();
        $image->hotel_id = $request->hotel_id;
        $image->hotel_image = $imageUrl;
        $image->save();

        return redirect('/hotel/image/add')->with('message','Hotel Image saved successfully');

    }
    public function showManageHotelImage(){
        $images = DB::table('images')
            ->join('hotels','hotels.id','=','images.hotel_id')
            ->select('images.*','hotels.hotel_name')
            ->get();
        return view('admin.hotel.manage-hotel-image',[
            'images'=>$images
        ]);
    }
    public function deleteImage($id){
        $image = \App\Image::findOrFail($id);
        $image->delete();
        return redirect('/hotel/image/manage')->with('message','Image deleted successfully');
    }
    public function showHotelDetails($id){
        $hotel = Hotel::findOrFail($id);
        $location = Location::findOrFail($hotel->location_id);
        return view('admin.hotel.hotel-details',[
            'hotel'=>$hotel,
            'location'=>$location
        ]);

    }
    public function editHotel($id){
        $locations = Location::all();
        $hotel = Hotel::findOrFail($id);
        return view('admin.hotel.edit-hotel',[
            'hotel'=>$hotel,
            'locations'=>$locations
        ]);
    }
    public function updateHotel($request,$hotel,$imageUrl=null){

        $hotel->location_id = $request->location_id;
        $hotel->hotel_name = $request->hotel_name;
        $hotel->room_numbers = $request->room_numbers;
        $hotel->available_room = $request->room_numbers;
        $hotel->minimum_price = $request->minimum_price;
        $hotel->hotel_facilities = $request->hotel_facilities;
        $hotel->address = $request->address;
        $hotel->description = $request->description;
        if($imageUrl)
        {
            $hotel->hotel_image = $imageUrl;
        }
        $hotel->save();

    }

    public function updateHotelInfo(Request $request)
    {
        $this->validateHotelInfo($request);

        $hotel = Hotel::findOrFail($request->hotel_id);
        $hotelImage= $request->file('hotel_image');

        if($hotelImage)
        {
            unlink($hotel->hotel_image);
            $imageUrl = $this->uploadHotelImage($request);
            $this->updateHotel($request,$hotel,$imageUrl);
        }
        else{
            $this->updateHotel($request,$hotel);
        }
        return redirect('/hotel/manage')->with('message','Hotel updated successfully!!');
    }
    public function deleteHotel($id){
        $hotel= Hotel::findOrFail($id);
        $rooms = Room::where('hotel_id',$id)->get();
        foreach ($rooms as $room)
        {
            $room = Room::find($room->id);
            $room->delete();
        }
        $hotel->delete();
        return redirect('/hotel/manage')->with('message','Hotel & Rooms are deleted successfully!!');
    }
}
