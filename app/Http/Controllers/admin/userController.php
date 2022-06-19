<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use function redirect;
use function view;

class userController extends Controller
{

    public function index()
    {

        $user = User::all();
        return view('show_user', compact('user'));
    }
    public function create()
    {
        $user = User::all();
        return view('user', compact('user'));
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
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = $request->password;
//        $user->car_id = $request->car_id;
//
//        $image = $request->file('image');
//        $file_name=$company->name.time().'.'.$image->extension();
//        $image->move('image',$file_name);

        $user->save();

        return redirect()->back()->with('success', 'New admin Created successfully');

    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('showUser');
    }
}
