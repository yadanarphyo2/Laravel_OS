<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Subcategory;

class FrontendController extends Controller
{
    public function home($value='')
   {
   	$items=Item::orderBy('id','desc')->take(6)->get();
   	// dd($items);
   	 return view('frontend.home',compact('items'));
   }

   public function itempage($value='')
   {
      $sub=Subcategory::all();
   	return view('frontend.items',compact('sub'));
   }
   public function itemdetail($id)
   {
      $item=Item::find($id);
   	return view('frontend.details',compact('item'));
   }
   public function register($value='')
   {
   	return view('frontend.register');
   }
   public function login($value='')
   {
   	return view('frontend.login');
   }
   public function checkout($value='')
   {
   	return view('frontend.checkout');
   }
   public function about($value='')
   {
   	return view('frontend.about');
   }
   public function contact($value='')
   {
   	return view('frontend.contact');
   }
   public function profile($value='')
   {
   	return view('frontend.profile');
   }
   public function getItem(request $request)
   {
      $sid=$request->sid;
      if ($sid==0) {
      $items=Item::all();
      }else{
         $items=Subcategory::find($sid)->items;
      }
      return $items;
   }
}
