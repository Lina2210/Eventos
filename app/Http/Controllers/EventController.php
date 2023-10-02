<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Evento::all();
        return response()->json(['events' => $events]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create_event');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $event = new Evento;
        $event->name = $request->input('name');
        $event->date = $request->input('date');
        $event->hour = $request->input('hour');
        $event->description = $request->input('description');
        $event->location = $request->input('location');
        $event->imagen = $request->input('imagen');
        $event->type = $request->input('type');
        $event->category = $request->input('category');
        $event->save();


        return redirect()->route('events.index');
        }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
