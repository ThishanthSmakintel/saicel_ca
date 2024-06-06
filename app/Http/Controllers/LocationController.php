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

        $provinces = Province::where('name_en', 'like', "%{$query}%")
            ->orWhere('name_si', 'like', "%{$query}%")
            ->orWhere('name_ta', 'like', "%{$query}%")
            ->get();

        $districts = District::where('name_en', 'like', "%{$query}%")
            ->orWhere('name_si', 'like', "%{$query}%")
            ->orWhere('name_ta', 'like', "%{$query}%")
            ->get();

        $cities = City::where('name_en', 'like', "%{$query}%")
            ->orWhere('name_si', 'like', "%{$query}%")
            ->orWhere('name_ta', 'like', "%{$query}%")
            ->orWhere('sub_name_en', 'like', "%{$query}%")
            ->orWhere('sub_name_si', 'like', "%{$query}%")
            ->orWhere('sub_name_ta', 'like', "%{$query}%")
            ->get();

        $results = [];

        foreach ($provinces as $province) {
            $results[] = $this->formatResult($province, 'province');
        }

        foreach ($districts as $district) {
            $results[] = $this->formatResult($district, 'district');
        }

        foreach ($cities as $city) {
            $results[] = $this->formatResult($city, 'city');
        }

        return response()->json($results);
    }

    private function formatResult($item, $type)
    {
        $name_en = $item->name_en ?? 'Data not available in DB';
        $name_si = $item->name_si ?? 'Data not available in DB';
        $name_ta = $item->name_ta ?? 'Data not available in DB';
        $sub_name_en = $item->sub_name_en ?? 'Data not available in DB';
        $sub_name_si = $item->sub_name_si ?? 'Data not available in DB';
        $sub_name_ta = $item->sub_name_ta ?? 'Data not available in DB';

        return [
            'type' => $type,
            'name_en' => $name_en,
            'name_si' => $name_si,
            'name_ta' => $name_ta,
            'sub_name_en' => $sub_name_en,
            'sub_name_si' => $sub_name_si,
            'sub_name_ta' => $sub_name_ta,
            'details' => $item,
        ];
    }
}
