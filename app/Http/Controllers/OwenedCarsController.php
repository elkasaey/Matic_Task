<?php

namespace App\Http\Controllers;

use App\Models\Owened_cars;
use App\Http\Requests\StoreOwened_carsRequest;
use App\Http\Requests\UpdateOwened_carsRequest;

class OwenedCarsController extends Controller
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
     * @param  \App\Http\Requests\StoreOwened_carsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOwened_carsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Owened_cars  $owened_cars
     * @return \Illuminate\Http\Response
     */
    public function show(Owened_cars $owened_cars)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Owened_cars  $owened_cars
     * @return \Illuminate\Http\Response
     */
    public function edit(Owened_cars $owened_cars)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOwened_carsRequest  $request
     * @param  \App\Models\Owened_cars  $owened_cars
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOwened_carsRequest $request, Owened_cars $owened_cars)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Owened_cars  $owened_cars
     * @return \Illuminate\Http\Response
     */
    public function destroy(Owened_cars $owened_cars)
    {
        //
    }
}
