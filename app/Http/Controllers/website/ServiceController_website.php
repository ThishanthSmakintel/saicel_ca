<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController_website extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('contact-us.contact-us', ['services' => $services]);
    }
}
