<?php

namespace App\Http\Controllers\API;

use App\Models\Time;
use App\Http\Resources\TimeCollection;
use App\Http\Resources\TimeResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TimeAPIController extends Controller
{
    public function index()
    {
        return new TimeCollection(Time::paginate());
    }
 
    public function show(Time $time)
    {
        return new TimeResource($time->load(['jogadors', 'partidas']));
    }

    public function store(Request $request)
    {
        return new TimeResource(Time::create($request->all()));
    }

    public function update(Request $request, Time $time)
    {
        $time->update($request->all());

        return new TimeResource($time);
    }

    public function destroy(Request $request, Time $time)
    {
        $time->delete();

        return response()->noContent();
    }
}
