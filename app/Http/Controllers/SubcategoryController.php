<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Subcategory;
class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories=Subcategory::all();
        // $categories=Category::all();

        return view('backend.subcategories.index',compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
        $categories=Category::all();
       return view('backend.subcategories.create',compact('categories'));
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
   
        'subcategory_name'=>'required',
        
        'category_id'=>'required',
        
       ]);
     

       // insert data
       // $item->column name=$request->form name

       $subcategory=new Subcategory;
       
       $subcategory->name=$request->subcategory_name;
       
       $subcategory->category_id=$request->category_id;
       $subcategory->save();

       return redirect()->route('subcategories.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subcategory=Subcategory::find($id);
        $categories=category::all();
        return view('backend.subcategories.edit',compact('subcategory','categories'));
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
        
        'subcategory_name'=>'required',
        
        'category_id'=>'required',
       
       ]);

        //if include file,upload

       

        //data update
       $subcategory=Subcategory::find($id);
       $subcategory->name=$request->subcategory_name;
       $subcategory->category_id=$request->category_id;
       $subcategory->save();
        //redirect
       return redirect()->route('subcategories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $subcategory=Subcategory::find($id);
        $subcategory->delete();
        //redirect
        return redirect()->route('subcategories.index');
    }
}
