<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\car;
use App\Models\company;
use App\Models\User;
use Illuminate\Http\Request;


class dashController extends Controller
{
    function addAdmin()
    {
        return view('admin.add_admin');
    }
    function addUser()
    {
        return view('admin.add_user');
    }
    function showAdmin()
    {
        $admin = admin::all();
        return view('admin.show_admin', compact('admin'));
//        return view('admin.show_admin');
    }


    function showAdminCar()
    {
        $car = car::all();
        return view('admin.show_car', compact('car'));
    }
    function showAdminCompany()
    {
        $company = company::all();
        return view('admin.show_company', compact('company'));
    }
    function showUser()
    {
        $user = User::all();
        return view('admin.show_user', compact('user'));
    }
    function updateAdmin()
    {
        $admin = admin::all();
        return view('admin.update_admin', compact('admin'));
    }
    function updateUser()
    {
        return view('admin.update_user');
    }
    function login()
    {
        return view('auth.login_admin');
    }
    function loginUser()
    {
        return view('auth.login_user');
    }
}

