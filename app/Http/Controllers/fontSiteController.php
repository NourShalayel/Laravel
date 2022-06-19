<?php

namespace App\Http\Controllers;

use App\Models\company;
use Illuminate\Http\Request;

class fontSiteController extends Controller
{
    function showHome()
    {
        return view("user.indexLogin");
    }

    function showAboutUs()
    {
        return view("user.about");
    }

    function showCompany()
    {
        return view("user.companyList");
    }

    function showCars()
    {

        return view('user.carList');
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
}
