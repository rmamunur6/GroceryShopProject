<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroceryShopController extends Controller
{
    public function index(){
        return view('front-end.home.home');
    }

    public function aboutUs(){
        return view('front-end.about-us');
    }

    public function kitchenContent(){
        return view('front-end.kitchen-content');
    }

    public function householdContent(){
        return view('front-end.household-content');
    }

    public function contact(){
        return view('front-end.contact');
    }

}
