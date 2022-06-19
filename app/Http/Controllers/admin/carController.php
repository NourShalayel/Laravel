<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\car;
use App\Models\category;
use App\Models\company;
use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class carController extends Controller
{
    public function index()
    {

        $car = car::all();
        return view('show_car', compact('car'));
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
        if (!$request->has('image')) {
            return response()->json(['message' => 'Missing file'], 422);
        }

        $car = new car();
        $car->name = $request->name;
        $car->model = $request->model;
        $car->color = $request->color;
        $car->price_per_day = $request->price_per_day;
        $car->price_per_km = $request->price_per_km;
        $car->company_id = $request->company_id;


        $car_image = $request->file('image');
//        $url = Storage::putFileAs('images', $file, $name . '.' . $file->extension());

//        $file_name=Storage::putFileAs('images' , $car_image ,$car->name.time().'.'.$car_image->extension());
//        $name = Str::random(10);
        $file_name=$car->name.time().'.'.$car_image->extension();
        $car_image->move('car_image',$file_name);
        $car->image=$file_name;

        $car->save();

        return redirect()->back()->with('success', 'New Car Created successfully');

    }


    public function destroy(car $car)
    {
        $car->delete();
        return redirect()->route('showAdminCar');
    }
}
