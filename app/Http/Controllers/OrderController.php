<?php

namespace App\Http\Controllers;
use Redirect;
use Session;
use App\Order;
use App\OrderMap;
use App\Cart;
use App\Product;
use DB;
session_start();

use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function orderNow()
    {
        if(auth()->id())
        {
            $user_id=auth()->id();

            $total_price=DB::table('carts')
            ->join('products','carts.product_id','products.id')
            ->where('carts.user_id',$user_id)
            ->sum('carts.total');

            $pro=DB::table('carts')
            ->join('products','carts.product_id','products.id')
            ->where('carts.user_id',$user_id)
            ->get();

            
            return view('order_total',['pro'=>$pro],['total_price'=>$total_price]);
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
    public function order_place(Request $request)
    {
        if(auth()->id())
        {
            $user_id=auth()->id();
            $allcart=Cart::where('user_id',$user_id)->get();
            
            $order=new Order;
            $order->user_id=$user_id;
            $order->address=($request->address != '')?$request->address:'';
            $order->status='pending';
            $order->payment_method=$request->payment;
            $order->payment_status='pending';
            
            $lastInsertID=$order->save();
            if($lastInsertID == 1)
            {
                foreach ($allcart as $cart)
                {
                    // $arr[]=Product::getPrice($cart['product_id']);
                    
                    $orderm=new OrderMap;
                    $orderm->order_id= $order->id;
                    $orderm->product_id=$cart['product_id'];
                    $orderm->user_id=$cart['user_id'];
                    $orderm->price=Product::getPrice($cart['product_id']);
                    $orderm->quantity=$cart['quantity'];
                    $orderm->save();

                }
                // return $arr;            
                Cart::where('user_id',$user_id)->delete();
            }
            return Redirect::to('menu');
        }
        else
        {
            return Redirect::to('/login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function view_order(Request $request)
    {
        $this->AdminAuthCheck();
    
        $order=Order::all();
        
        
        return view('admin.view_order',['order'=>$order]);
    }

    public function view_orderMap(Request $request,$id)
    {
        $this->AdminAuthCheck();
        
        
        $detail=OrderMap::where('order_id',$id)
       ->join('products','order_maps.product_id','products.id')
       ->join('categories','products.catname','categories.id')
       ->select('order_maps.*','products.image','products.pname','categories.catname')
       ->get();
        return view('admin.view_orderMap',['detail'=>$detail]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function myOrder(Order $order)
    {
        if(auth()->id())
        {
            $user_id=auth()->id();
            $order=DB::table('orders')
            ->where('orders.user_id',$user_id)
            ->get();
            return view('myorder',['order'=>$order]);
        }
        else
        {
            return Redirect::to('/login');
            
        }

        // return $myorder=DB::table('products')
        // ->where($pro,'products.product_id')
        // ->get();

        
    }
    public function order_details($id)
    {
        if(auth()->id())
        {
            $detail=OrderMap::where('order_id',$id)
           ->join('products','order_maps.product_id','products.id')
           ->join('categories','products.catname','categories.id')
           ->select('order_maps.*','products.image','products.pname','categories.catname')
           ->get();

            return view('order_detail',['detail'=>$detail]);
        }
        else
        {
            return Redirect::to('/login');
        }


        
    }

     public function unactive_order($order_id)
    {
          DB::table('orders')
              ->where('id',$order_id)
              ->update(['status' => 'pending']);
          // Session::put('message','order Unactive successfully !! ');
              return Redirect::to('orderview');
    }

    public function active_order($order_id)
    {
          DB::table('orders')
              ->where('id',$order_id)
              ->update(['status' => 'processing']);
          // Session::put('message','order active successfully !! ');
              return Redirect::to('orderview');
    }
    public function cancel_order($order_id)
    {
          DB::table('orders')
              ->where('id',$order_id)
              ->update(['status' => 'cancel']);
          // Session::put('message','order active successfully !! ');
              return Redirect::to('myorder');
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    public function AdminAuthCheck()
    {
      $admin_id=Session::get('admin_id');
      
      if ($admin_id) 
      {
         return;
      }
      else
      {
         return Redirect::to('/admin')->send();
      }
    }
}
