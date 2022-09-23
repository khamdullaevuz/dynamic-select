<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        return view('home', compact('countries'));
    }

    public function state(Request $request)
    {
        $country_id = $request->country_id;
        if ($country_id != 0) {
            $country = Country::find($country_id);
            $states = $country->states()->get();
            return view('state', compact('states'));
        } else {
            $states = [];
            return view('state', compact('states'));
        }
    }

    public function city(Request $request)
    {
        $state_id = $request->state_id;
        if ($state_id != 0) {
            $state = State::find($state_id);
            $cities = $state->cities()->get();
            return view('city', compact('cities'));
        } else {
            $cities = [];
            return view('city', compact('cities'));
        }
    }
}
