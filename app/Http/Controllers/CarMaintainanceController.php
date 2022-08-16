<?php
namespace App\Http\Controllers;

use App\Models\Car_maintainance;
use App\Http\Requests\StoreCar_maintainanceRequest;
use App\Http\Requests\UpdateCar_maintainanceRequest;
use Illuminate\Support\Carbon;

class CarMaintainanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $car_maintainance = Car_maintainance::whereBetween('maintainance_date', [Carbon::today(),  Carbon::today()->addDays(7)])->with(["owened_cars:user","maintenance_type"])->get();
      return view('maintainance.index', compact('car_maintainance'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('maintainance.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCar_maintainanceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCar_maintainanceRequest $request)
    {
        $Car_maintainance = Car_maintainance::create($request->all());
        return redirect('/maintainance')->with('completed', 'maintainance has been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car_maintainance  $car_maintainance
     * @return \Illuminate\Http\Response
     */
    public function show(Car_maintainance $car_maintainance)
    {
        return view('maintainance.show',compact('car_maintainance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car_maintainance  $car_maintainance
     * @return \Illuminate\Http\Response
     */
    public function edit(Car_maintainance $car_maintainance)
    {
        return view('maintainance.edit', compact('car_maintainance'));
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
      $car_maintainance->update($request);
      return redirect('/maintainance')->with('completed', 'maintainance has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car_maintainance  $car_maintainance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car_maintainance $car_maintainance)
    {
        $car_maintainance->delete();
        return redirect('/maintainance')->with('completed', 'maintainance has been deleted');
    }
}
