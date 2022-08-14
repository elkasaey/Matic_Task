<?php

namespace App\Http\Controllers;

use App\Models\Car_maintainance;
use App\Http\Requests\StoreCar_maintainanceRequest;
use App\Http\Requests\UpdateCar_maintainanceRequest;

class CarMaintainanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreCar_maintainanceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCar_maintainanceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car_maintainance  $car_maintainance
     * @return \Illuminate\Http\Response
     */
    public function show(Car_maintainance $car_maintainance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car_maintainance  $car_maintainance
     * @return \Illuminate\Http\Response
     */
    public function edit(Car_maintainance $car_maintainance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCar_maintainanceRequest  $request
     * @param  \App\Models\Car_maintainance  $car_maintainance
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCar_maintainanceRequest $request, Car_maintainance $car_maintainance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car_maintainance  $car_maintainance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car_maintainance $car_maintainance)
    {
        //
    }
}
