<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Requests\SensorRequest;
use App\Sensor;


class SensorController extends Controller
{
    //
    public function store(SensorRequest $request)
    {
        $sensor = Sensor::create([
            'temperature' => $request->input('temperature') ,
            'pressure' => $request->input('pressure'),
            'humidity' => $request->input('humidity'),
            'sensor_id' => $request->input('sensor_id'),
            ]);
            return response()->json($sensor, 201);
    }
    public function show()
    {
        $id = Sensor::max('id');
        return Sensor::find($id);
    }

}
