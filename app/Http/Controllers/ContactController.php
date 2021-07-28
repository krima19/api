<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Redirect;

use Session;
session_start();

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contact=new Contact;
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        $this->AdminAuthCheck();
        $contact=Contact::all();
        return view('admin.contactdetail',['contact'=>$contact]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact=Contact::find($id);
        $contact->delete();
        return redirect('contactdetail');
    }

    public function AdminAuthCheck()
    {
      $admin_id=Session::get('admin_id');
      
      if ($admin_id) {
         return;
      }else{
         return Redirect::to('/admin')->send();
      }
    }
}
