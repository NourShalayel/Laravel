<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use function redirect;
use function view;

class adminController extends Controller
{
    public function create()
    {
        $admin = admin::all();
        return view('admin.add_admin', compact('admin'));
    }

    public function store(Request $request)
    {
        $rules = ['name' => 'required|max:30|min:5',
        ];
        $masseges = [
            'name.required' => 'name must be entered',
            'email.required' => 'code must be entered',
//            'code.integer' => 'code must be integer',
//            'cat_id.required' => 'category must be entered',
//            'cat_id.integer' => 'category must be integer'
        ];

        $validator = Validator::make($request->all(), $rules, $masseges);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }
        /*$request->validate([
            'title' =>'required|max:30|min:5',
            'body' => 'required|string',
            'cat_id' => 'required|integer'
        ]);*/
        $admin = new admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = $request->password;
//
//        $image = $request->file('image');
//        $file_name=$company->name.time().'.'.$image->extension();
//        $image->move('image',$file_name);

        $admin->save();

        return redirect()->back()->with('success', 'New admin Created successfully');

    }
}
