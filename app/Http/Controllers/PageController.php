<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    //
    public function products()
    {
        return view('products');
    }

    public function contacts()
    {
        return view('contact-us');
    }

    public function software_solutions()
    {
        return view('software-solutions');
    }

    public function hardware_solutions()
    {

        return view('hardware-solutions');

    }
    public function it_solutions()
    {

        return view('it-solutions');

    }
    public function mobile_solutions()
    {

        return view('mobile-solutions');

    }
}
