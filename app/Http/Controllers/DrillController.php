<?php

namespace App\Http\Controllers;

use App\Models\Drill;
use Illuminate\Http\Request;

class DrillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('show');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Drill  $drill
     * @return \Illuminate\Http\Response
     */
    public function show(Drill $drill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Drill  $drill
     * @return \Illuminate\Http\Response
     */
    public function edit(Drill $drill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Drill  $drill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Drill $drill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Drill  $drill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Drill $drill)
    {
        //
    }
}
