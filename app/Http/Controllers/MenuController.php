<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use DB;

class MenuController extends Controller
{
    public function display()
    {
    	$menu=Category::all();
    	return view('menu',['menu'=>$menu]);
    }
    public function show($id)
    {
    	
    	$pro=DB::table('products')
        ->where('catname',$id)
        ->get();
    	return view('product_cat',['pro'=>$pro]);
    }
    public function show_product($id)
    {

        $pro_del=Product::where('products.id',$id)
        ->join('categories','products.catname','categories.id')
        ->select('products.id','categories.catname as category','products.*')
        ->get();
        //select products.*,categories.catname as category from product left join categories on products.catname = categories.id

        // return $pro_del=Product::find($id);
        return view('show_product_detail',['pro_del'=>$pro_del]);
    }
}
