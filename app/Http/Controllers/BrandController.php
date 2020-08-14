<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands=Brand::all();
       return view('backend.brands.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands= Brand::all();
        return view('backend.brands.create',compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'brand_name'=>'required',
        'brand_photo'=>'required', 
       ]);
       $imageName=time().'.'.$request->brand_photo->extension();
       $request->brand_photo->move(public_path('backend/brandimg/'),$imageName);
       $myfile='backend/brandimg/'.$imageName;

       // insert data
       // $item->column name=$request->form name

       $brand=new Brand;
       
       $brand->name=$request->brand_name;
       $brand->photo=$myfile;
   
       $brand->save();

       return redirect()->route('brands.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand=Brand::find($id);
        
        return view('backend.brands.edit',compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $request->validate([
        
        'brand_name'=>'required',
        'brand_photo'=>'sometimes',
        
       ]);

        //if include file,upload

        if ($request->hasFile('brand_photo')) {
        $imageName=time().'.'.$request->brand_photo->extension();
       $request->brand_photo->move(public_path('backend/brandimg/'),$imageName);
       $myfile='backend/brandimg/'.$imageName;

        $oldphoto=$request->old_photo;
        @unlink($oldphoto);
   }else{
        $myfile=$request->old_photo;
   }

        //data update
       $brand=Brand::find($id);
     
       $brand->name=$request->brand_name;
       $brand->photo=$myfile;
       
       $brand->save();


        //redirect
       return redirect()->route('brands.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand=Brand::find($id);
        $brand->delete();
        //redirect
        return redirect()->route('brands.index');
    }
}
