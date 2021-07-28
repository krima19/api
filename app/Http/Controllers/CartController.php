<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use DB;
use Redirect;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add_to_cart(Request $request)
    {
        if(auth()->id())
        {
            $user_id=auth()->id();
            $cart=new Cart;
            $cart->user_id=$user_id;
            $cart->product_id=$request->product_id;
            $cart->quantity=$request->qty;
            $total=$request->qty*$request->product_price;
            $cart->total=$total;
            $sv=$cart->save();
            if($sv)
            {
                return Redirect::to('menu');
            }
            else
            {
                echo "no item added";
            }
            

        }
        else
        {
            return Redirect::to('/login');
            
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show_cart()
    {
        if(auth()->id())
        {
            $user_id=auth()->id();
            $pro=DB::table('carts')
            ->join('products','carts.product_id','products.id')
            // ->select('carts.*','products.pname','products.price')
            ->where('carts.user_id',$user_id)
            ->get();

            return view('show_cart')->with('pro',$pro);
        }  
        else
        {
            return Redirect::to('/');
        } 

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function delete_to_cart($rowId)
    {
        Cart::where('product_id',$rowId)
        ->delete();
        return Redirect::to('/show-cart');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update_cart(Request $request)
    {
        $qty=$request->qty;
        $rowId=$request->rowId;
        $price=$request->price;
        $total=$price*$qty;
        Cart::where('product_id',$rowId)
        ->update(['quantity'=>$qty,'total'=>$total]);

        return Redirect::to('/show-cart');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
