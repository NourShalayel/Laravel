<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\car;
use App\Models\company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use function redirect;
use function view;

class companyController extends Controller
{


    public function index()
    {

        $company = company::all();
        return view('show_company', compact('company'));
    }



    public function create()
    {
        $company = company::all();
        return view('admin.user.companyAdd', compact('company'));
    }

    public function store(Request $request)
    {
        $rules = ['name' => 'required|max:30|min:5',
            'code' => 'required|string',
        ];
        $masseges = [
            'name.required' => 'name must be entered',
            'code.required' => 'code must be entered',
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
        $company = new company();
        $company->name = $request->name;
        $company->contact = $request->contact;
        $company->code = $request->code;
        $company->email = $request->email;
        $company->address = $request->address;
        $company->age = $request->age;
        $company->description = $request->description;


        $company_image = $request->file('image');

        $file_name=$company->name.time().'.'.$company_image->extension();
        $company_image->move('company_image',$file_name);
        $company->image=$file_name;

        $company->save();

        return redirect()->back()->with('success', 'New Company Created successfully');

    }
    public function destroy(company $company)
    {
        $company->delete();
        return redirect()->route('showAdmin');
    }
}
