<?php

namespace App\Http\Controllers;

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
        return view('admin.show_admin');
    }
    function showAdminCar()
    {
        return view('admin.show_car');
    }
    function showAdminCompany()
    {
        return view('admin.show_company');
    }
    function showUser()
    {
        return view('admin.show_user');
    }
    function updateAdmin()
    {
        return view('admin.update_admin');
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

