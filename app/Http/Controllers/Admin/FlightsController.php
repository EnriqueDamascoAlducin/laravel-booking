<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Flight;
use App\Models\FlightPhoto;
use Illuminate\Support\Facades\Storage;

class FlightsController extends Controller
{
    public function show() {
        return view('admin.flights.index');
    }
    public function register() {
        return view('admin.flights.forms.register');
    }
    public function save(Request $request) {
        $flight = Flight::create($request->input());
        
        if ($request->photos && count($request->photos)) {
            foreach($request->photos as $index => $pick) {
              
                if ($index == 0) {
                    $pickName = $flight->id. '-' . str_replace(" ","_", $flight->name). '-main.' . $pick->extension();
                    $flight->main_photo = $pickName;
                    $flight->save();
                } else {
                    $pickName = $flight->id. '-' . str_replace(" ","_", $flight->name). '-' .time() ."$index." . $pick->extension();
                    FlightPhoto::create(["flight_id" => $flight->id, "name" => $pickName]);
                }
                Storage::disk('products')->put('./'.$pickName, file_get_contents($pick));
               
            }
        }
        
       return redirect()->route('flights.index');
    }
    public function edit(Flight $flight) {
        return view('admin.flights.forms.edit', ["flight" => $flight]);

    }
    public function update(Flight $flight, Request $request) {
        
        $flight->update($request->input());
        return redirect()->route('flights.index');
    }

    public function updatePhotos(Flight $flight, Request $request) {
        if ($request->main_photo) {
            $pick = $request->main_photo;
            $pickName = $flight->id. '-' . str_replace(" ","_", $flight->name). '-'. time() .'.' . $pick->extension();
            Storage::disk('products')->put('./'.$pickName, file_get_contents($pick));
            $flight->main_photo = $pickName;
            $flight->save();
        }


        if ($request->photos && count($request->photos)) {
            foreach($request->photos as $index => $pick) {
                $pickName = $flight->id. '-' . str_replace(" ","_", $flight->name). '-' .time() ."$index." . $pick->extension();
                
                Storage::disk('products')->put('./'.$pickName, file_get_contents($pick));
                FlightPhoto::create(["flight_id" => $flight->id, "name" => $pickName]);
                
               
            }
        }
        
       return redirect()->route('flights.index');
    }

    public function deleteImage(Request $request) {
        $image = $request->input('image');
        Storage::disk('products')->delete($image);
    }
}
