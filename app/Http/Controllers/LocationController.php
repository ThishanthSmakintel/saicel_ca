<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\District;
use App\Models\City;

class LocationController extends Controller
{
    public function index()
    {
        return view('locationFinder');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $results = City::join('districts', 'cities.district_id', '=', 'districts.id')
            ->join('provinces', 'districts.province_id', '=', 'provinces.id')
            ->select(
                'cities.id AS city_id',
                'provinces.name_en AS province_name_en',
                'provinces.name_ta AS province_name_ta',
                'provinces.name_si AS province_name_si',
                'cities.name_en AS city_name_en',
                'cities.name_si AS city_name_si',
                'cities.name_ta AS city_name_ta',
                'cities.sub_name_en',
                'cities.sub_name_si',
                'cities.sub_name_ta',
                'cities.postcode',
                'cities.latitude',
                'cities.longitude',
                'districts.id AS district_id',
                'districts.name_en AS district_name_en',
                'districts.name_si AS district_name_si',
                'districts.name_ta AS district_name_ta',
                'provinces.id AS province_id'
            )
            ->orderBy('provinces.name_en')
            ->orderBy('provinces.name_ta')
            ->orderBy('provinces.name_si')
            ->get();

        return response()->json($results);
    }
}
