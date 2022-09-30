<?php

namespace App\Http\Controllers;

use App\Models\Learn;
use App\Http\Requests\StoreLearnRequest;
use App\Http\Requests\UpdateLearnRequest;

class LearnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user.learn.index');
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
     * @param  \App\Http\Requests\StoreLearnRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLearnRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Learn  $learn
     * @return \Illuminate\Http\Response
     */
    public function show(Learn $learn)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Learn  $learn
     * @return \Illuminate\Http\Response
     */
    public function edit(Learn $learn)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLearnRequest  $request
     * @param  \App\Models\Learn  $learn
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLearnRequest $request, Learn $learn)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Learn  $learn
     * @return \Illuminate\Http\Response
     */
    public function destroy(Learn $learn)
    {
        //
    }
}