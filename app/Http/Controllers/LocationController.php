<?php

namespace App\Http\Controllers;


use App\Hotel;
use App\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function showAddLocation(){
        return view('admin.location.add-location');
    }
    public function showManageLocation(){
        $locations = Location::all();
        return view('admin.location.manage-location',[
            'locations'=>$locations
        ]);
    }

    public function saveLocation(Request $request)
    {
        $this->validate($request,[
            'location_name'=>'required|unique:locations,location_name|max:15|min:3'
        ]);
       $location = new Location();
       $location->location_name = $request->location_name;
       $location->save();
       return redirect('/location/add')->with('message','Location save successfully');
    }

    public function deleteLocation($id)
    {
        $location = Location::findOrFail($id);
        $location->delete();
        $hotels = Hotel::where('location_id',$id)->get();
        foreach ($hotels as $hotel)
        {
            $hotel = Hotel::findOrFail($hotel->id);
            $hotel->delete();
        }

        return redirect('/location/manage')->with('message','Location & Hotels are deleted successfully!!');

    }
}
