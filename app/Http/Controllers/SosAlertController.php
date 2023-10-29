<?php

namespace App\Http\Controllers;

use App\Models\SosAlert;
use App\Http\Requests\StoreSosAlertRequest;
use App\Http\Requests\UpdateSosAlertRequest;

class SosAlertController extends Controller
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
     * @param  \App\Http\Requests\StoreSosAlertRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSosAlertRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SosAlert  $sosAlert
     * @return \Illuminate\Http\Response
     */
    public function show(SosAlert $sosAlert)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SosAlert  $sosAlert
     * @return \Illuminate\Http\Response
     */
    public function edit(SosAlert $sosAlert)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSosAlertRequest  $request
     * @param  \App\Models\SosAlert  $sosAlert
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSosAlertRequest $request, SosAlert $sosAlert)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SosAlert  $sosAlert
     * @return \Illuminate\Http\Response
     */
    public function destroy(SosAlert $sosAlert)
    {
        //
    }
}
