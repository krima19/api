<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Session;
use Redirect;
use App\Product;
use App\Category;
use Str;
session_start();



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->AdminAuthCheck();
        $pro=Product::all();
        return view('admin.product',['product'=>$pro]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat=Category::all();
        return view('admin.addproduct',['cat'=>$cat]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $pro=new Product;
        $pro->pname=$req->pname;
        $pro->catname=$req->catname;
        $pro->price=$req->price;
        $pro->image=$req->image;
        $image=$req->file('image');
        if ($image)
        {
           $image_name=Str::random(10);
           $ext=strtolower($image->getClientOriginalExtension());
           $image_full_name=$image_name.'.'.$ext;
           $upload_path='image/';
           $image_url=$upload_path.$image_full_name;

           $success=$image->move($upload_path,$image_full_name);
           if ($success) 
            {
                $pro->image=$image_url;
                $result=$pro->save();
                if($result)
                {
                    return redirect('product');
                }
                else
                {
                    return "product not Added"; 
                }
            }
        }
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pro=Product::find($id);
        $pro['category']=Category::all();
        return view('admin.editproduct',['product'=>$pro]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req,$id)
    {
        $pro=Product::find($id);
        $pro->pname=$req->get('pname');
        $pro->catname=$req->get('catname');
        $pro->price=$req->get('price');
        

        


            if($req->file('image') && $req->file('image')!='')
            {
               $pro->image=$req->image;
               $image=$req->file('image');
               $image_name=Str::random(10);
               $ext=strtolower($image->getClientOriginalExtension());
               $image_full_name=$image_name.'.'.$ext;
               $upload_path='image/';
               $image_url=$upload_path.$image_full_name;
               $success=$image->move($upload_path,$image_full_name);
               if ($success) 
                {
                    $pro->image=$image_url;
                    
                }
            }
            $result=$pro->save();
                    if($result)
                    {
                        return redirect('product');
                    }
                    else
                    {
                        return "product not Added"; 
                    }
               
        } 
         
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pro=Product::find($id);
        $pro->delete();
        return redirect('product');
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
