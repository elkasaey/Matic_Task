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
      $owened_cars = Owened_cars::with("user")->get();
      return view('owenedcar.index', compact('owened_cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('owenedcar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOwened_carsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOwened_carsRequest $request)
    {
      $owened_cars = Owened_cars::create($request->all());
      return redirect('/Owened')->with('completed', 'owned has been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Owened_cars  $owened_cars
     * @return \Illuminate\Http\Response
     */
    public function show(Owened_cars $owened_cars)
    {
        return view('owenedcar.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Owened_cars  $owened_cars
     * @return \Illuminate\Http\Response
     */
    public function edit(Owened_cars $owened_cars)
    {
        return view('owenedcar.edit', compact('user'));
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
      $owened_cars->update($request);
      return redirect('/Owened')->with('completed', 'owned has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Owened_cars  $owened_cars
     * @return \Illuminate\Http\Response
     */
    public function destroy(Owened_cars $owened_cars)
    {
      $owened_cars->delete();
      return redirect('/Owened')->with('completed', 'owned has been deleted');
    }
}
