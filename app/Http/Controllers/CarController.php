<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use App\Car;

class CarController extends Controller
{
    public function allCars()
    {
        $cars = Car::all();
        return view('allcars',['cars' => $cars]);
    }
    public function particularCar($id)
    {
        $cars = Car::find($id);
        return view('particularcar',['Car' => $cars]);
    }
    public function newCarForm()
    {
        return view('newcar');
    }
    public function newcar(Request $request)
    {
        $car = new Car;
        $cararray = $request->validate([
            'make' => ['required'],
            'model' => ['required','unique:cars'],
            'produced_on' => ['required'],
            'image' => ['required']
        ]);
        $car->make = $request->make;
        $car->model = $request->model;
        $car->produced_on = $request->produced_on;
        $path = $request->file('image')->store('/public/images');
        $car->image = $path;
        $car->save();
        return view('newcar');
    }
}
