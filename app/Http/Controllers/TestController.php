<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TestController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // Country::create([
        //     'name' => "Russia"
        // ]);
        // State::create([
        //     'name' => "Moscow",
        //     'country_id' => 2
        // ]);
        // State::create([
        //     'name' => "Vladivastok",
        //     'country_id' => 2
        // ]);
        // City::create([
        //     'name' => 'Moscow City',
        //     'state_id' => 3
        // ]);
        // City::create([
        //     'name' => 'Moscow province',
        //     'state_id' => 3
        // ]);
        // City::create([
        //     'name' => 'Vladivastok City',
        //     'state_id' => 4
        // ]);
        // City::create([
        //     'name' => 'Vladivastok province',
        //     'state_id' => 4
        // ]);
    }
}
