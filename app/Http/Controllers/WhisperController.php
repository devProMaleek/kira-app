<?php

namespace App\Http\Controllers;

use App\Models\Whisper;
use App\Http\Requests\StoreWhisperRequest;
use App\Http\Requests\UpdateWhisperRequest;

class WhisperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user.whisper.index');
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
     * @param  \App\Http\Requests\StoreWhisperRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWhisperRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Whisper  $whisper
     * @return \Illuminate\Http\Response
     */
    public function show(Whisper $whisper)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Whisper  $whisper
     * @return \Illuminate\Http\Response
     */
    public function edit(Whisper $whisper)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWhisperRequest  $request
     * @param  \App\Models\Whisper  $whisper
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWhisperRequest $request, Whisper $whisper)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Whisper  $whisper
     * @return \Illuminate\Http\Response
     */
    public function destroy(Whisper $whisper)
    {
        //
    }
}