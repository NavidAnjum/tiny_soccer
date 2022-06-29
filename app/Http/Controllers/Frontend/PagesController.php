<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function venues()
    {
        return view("frontend.pages.venues");
    }


    public function single_venue(Request $request){
        $vanueId = $request->venueId;
        $stadiumId = $request->stadiumId;
        return view("frontend.pages.vanue_register");
    }
}
