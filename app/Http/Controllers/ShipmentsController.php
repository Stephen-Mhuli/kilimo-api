<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shipment;

class ShipmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Shipment::all();
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
        $request->validate([
            'company_name' => 'required',
            'phone_number' => 'required',
            'price' => 'required',

        ]);
        return Shipment::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $userPayment
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit($id)
    {
        return Shipment::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserPayment  $userPayment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $shipment = Shipment::find($id);
        $shipment->update($request->all());
        return $shipment;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserPayment  $userPayment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Shipment::destroy($id);
    }
}
