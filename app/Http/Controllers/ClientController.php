<?php

namespace App\Http\Controllers;
use App\client;
use App\sale;
use App\product;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
             $clients = client::all() ;
             return view ('showclient' , compact('clients')) ;

      /* return view ('showclient',[
            'sales'=>sale::all(),
        'clients'=>client::all(),
        'products'=>product::all(),]);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new client() ;
       $client->client_name_ar=$request->namear;
       $client->client_name_en=$request->nameen;
       $client->tax_number=$request->taxnum;
       $client->address=$request->address;
       $client->mobile=$request->phonenum;
       $client->email=$request->email;
       $client->save();
       session()->flash('status','تم تسجيل العميل بنجاح  ');
       return view('welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(client $client)
    {
        //
    }
}
