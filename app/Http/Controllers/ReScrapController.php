<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Pickup;
use DB;

class ReScrapController extends Controller
{
    public function index()
    {
        return view('home');
    }

// Pages 

public function contact()
{
    return view('contact');
}

public function team()
{
    return view('team');
}
 
public function feedback()
{
    return view('feedback');
}
public function charity()
{
    return view('charity');
}
public function zerowaste()
{
    return view('zerowaste');
}
public function about()
{
    return view('about');
}

public function privacypolicy()
{
    return view('privacypolicy');
}
public function termcondition()
{
    return view('termcondition');
}

public function support()
{
    return view('support');
}

public function donotrecycle()
{
    return view('donotrecycle');
}

public function pickup()
{
    return view('pickup');
}

public function donotrecycling()
{
    return view('donotrecycling');
}
public function sell()
{
    return view('sell');
}
public function paper()
{
    return view('paper');
}
public function plastic()
{
    return view('plastic');
}
public function iron()
{
    return view('iron');
}
public function copper()
{
    return view('copper');
}
public function electronic()
{
    return view('electronic');
}
public function metal()
{
    return view('metal');
}
public function glass()
{
    return view('glass');
}



public function savePickup(Request $request)
{
    DB::table('pickups')->insert([
        'name' =>  $request->name,
        'email' =>  $request->email,
        'phone' =>  $request->phone,
        'address' =>  $request->address,
        'country' =>  $request->country,
        'city' =>  $request->city,
        'landmark' =>  $request->landmark,
        'zip' =>  $request->zip,
        'date' =>  $request->date,
        'time' =>  $request->time,
        'industry' =>  $request->industry,
        'weight' =>  $request->weight,
        'categories' =>  $request->categories,
        'image' =>  $request->image,
        'message' =>  $request->message,

    ]);
    return redirect()->back()->with('success','You have booked successfully.');
}

}

