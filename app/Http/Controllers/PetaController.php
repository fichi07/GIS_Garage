<?php

namespace App\Http\Controllers;

use App\Models\Peta;
use Illuminate\Http\Request;

class PetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.index',[
            'kor' => Peta::get()
        ]);
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
     * @param  \App\Models\Peta  $peta
     * @return \Illuminate\Http\Response
     */
    public function show(Peta $peta)
    {
        return view('home.show',[
            'maps' => Peta::where('id','=', $peta->id)->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peta  $peta
     * @return \Illuminate\Http\Response
     */
    public function edit(Peta $peta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peta  $peta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peta $peta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peta  $peta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peta $peta)
    {
        //
    }
}
