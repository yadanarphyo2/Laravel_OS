<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Brand;
use App\Subcategory;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.items.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands= Brand::all();
        $subcategories=Subcategory::all();
       return view('backend.items.create',compact('brands','subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
       $request->validate([
        'item_code'=>'required|min:4',
        'item_name'=>'required',
        'item_photo'=>'required',
        'item_price'=>'required',
        'item_discount'=>'required',
        'item_brand'=>'required',
        'item_subcategory'=>'required',
        'item_des'=>'required'
       ]);
       $imageName=time().'.'.$request->item_photo->extension();
       $request->item_photo->move(public_path('backend/itemimg/'),$imageName);
       $myfile='backend/itemimg/'.$imageName;

       // insert data
       // $item->column name=$request->form name

       $item=new Item;
       $item->codeno=$request->item_code;
       $item->name=$request->item_name;
       $item->photo=$myfile;
       $item->price=$request->item_price;
       $item->discount=$request->item_discount;
       $item->description=$request->item_des;
       $item->brand_id=$request->item_brand;
       $item->subcategory_id=$request->item_subcategory;
       $item->save();

       return redirect()->route('items.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.items.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend.items.edit');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
