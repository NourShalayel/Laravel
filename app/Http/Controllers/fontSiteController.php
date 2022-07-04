<?php

namespace App\Http\Controllers;

use App\Models\car;
use App\Models\company;
use Illuminate\Http\Request;

class fontSiteController extends Controller
{
    function showHome()
    {
        $car = car::all();
        return view("user.indexLogin" ,compact('car') );
    }

    function showAboutUs()
    {
        return view("user.about");
    }

    function showCompany()
    {
        $company = company::all();
        return view('user.companyList', compact('company'));
//        return view("user.companyList");
    }

    function showCars()
    {
        $car = car::all();
        return view('user.carList', compact('car'));
//        return view('user.carList');
    }

    function showAddCars()
    {
        $company = company::all();
        return view('user.carAdd',compact('company'));
//       return view('user.carAdd');
    }

    function showAddCompany()
    {

        return view('user.CompanyAdd');
    }

    function showContactUs()
    {

        return view('user.contact');
    }

    function order()
    {
        $car = car::all();
        return view('user.order');
    }

    function conformOrder()
    {
        $car = car::all();
        return view('user.conform_order');
    }
}
