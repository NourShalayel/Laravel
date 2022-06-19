<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\car;
use App\Models\category;
use App\Models\company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class carController extends Controller
{
    public function index()
    {
        $car = car::all();
        return view('user.index', compact('car'));
    }
    public function create()
    {
        $company = company::all();
        return view('user.carAdd',$company);
//        return view('user.carAdd', compact('company'));
    }

    public function store(Request $request)
    {
        $rules=['name' =>'required|max:30|min:2',
            'model' => 'required|string',
//            'company_id' => 'required|integer'
        ];
        $masseges=[
            'name.required' =>'name must be entered',
            'model.required' => 'model must be entered',
//            'code.integer' => 'code must be integer',
//            'company_id.required' => 'company_id must be entered',
//            'cat_id.integer' => 'category must be integer'
        ];

        $validator=Validator::make($request->all(),$rules ,$masseges);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        $car = new car();
        $car->name = $request->name;
        $car->model = $request->model;
        $car->color = $request->color;
        $car->image = $request->image;
        $car->price_per_day = $request->price_per_day;
        $car->price_per_km = $request->price_per_km;
        $car->company_id = $request->company_id;
//
//        $image = $request->file('image');
//        $file_name=$company->name.time().'.'.$image->extension();
//        $image->move('image',$file_name);

        $car->save();

        return redirect()->back()->with('success', 'New Car Created successfully');

    }
}
