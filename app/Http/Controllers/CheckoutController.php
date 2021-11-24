<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Hotel;
use App\Room;
use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    public function showCheckOut(){
        return view('front-end.checkout.checkout');
    }

    public function showSignIn(){
        return view('front-end.auth.sign-in');
    }

    public function loginCustomer(Request $request){
        $this->validate($request,[
            'email'=> 'required',
            'password'=> 'required'
        ]);
        $customer = Customer::where('email',$request->email)->first();
        if($customer)
        {
            if(password_verify($request->password,$customer->password)){

            Session::put('customerId',$customer->id);
            Session::put('customerName',$customer->first_name.' '.$customer->last_name);

            return redirect('/');
        }else{
            return redirect('/customer/sign-in')->with('message','Invalid password!! Please, input a valid password !');
        }

        }else{
            return redirect('/customer/sign-in')->with('message','You have to SingUp first to SignIn !!');
        }

    }
    public function saveCustomer(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:customers,email',
            'password' => 'required|unique:customers,password',
            'phone_number' => 'required|max:15|min:11',
            'address' => 'required'
        ]);
        $this->saveCustomerInfo($request);
        return redirect('/');
    }

    protected function saveCustomerInfo($request){

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
       return redirect('/checkout');
    }
    public function signUpCustomer(Request $request){
        $this->validate($request,[
            'first_name'=> 'required',
            'last_name'=> 'required',
            'email'=> 'required|unique:customers,email',
            'password'=> 'required|unique:customers,password',
            'phone_number'=> 'required|min:15|max:15',
            'address'=> 'required'
        ]);
        $this->saveCustomerInfo($request);
        return redirect('/checkout/confirmation');
    }

    public function singInCustomer(Request $request){
        $this->validate($request,[
            'email'=> 'required',
            'password'=> 'required',
        ]);
        $customer = Customer::where('email',$request->email)->first();
        if($customer)
        {
            if(password_verify($request->password,$customer->password)){

                Session::put('customerId',$customer->id);
                Session::put('customerName',$customer->first_name.' '.$customer->last_name);

                return redirect('/checkout/confirmation');
            }else{
                return redirect('/checkout')->with('message','Invalid password!! Please, input a valid password !');
            }
        }
        else{
            return redirect('/checkout')->with('message','You have to Register first to Login !!');
        }

    }

    public function showCheckOutConfirmation(){
        $customer = Customer::findOfFail(Session::get('customerId'));
        $room = Room::findOfFail(Session::get('room_id'));
        $hotel= Hotel::findOfFail(Session::get('hotel_id'));
        return view('front-end.checkout.checkout-confirmation',[
            'room'=>$room,
            'hotel'=>$hotel,
            'customer'=>$customer
        ]);

    }
    public function signOutCustomer(Request $request){
        Session::flush();
        return redirect('/');
    }

}
