<?php

namespace App\Http\Controllers;

use App\Models\gr2;
use Illuminate\Http\Request;

class gr2Controller extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'namePet' => 'required|string',
            'agePet' => 'required|integer',
            'breedPet' => 'required|string',
            'ownPet' => 'required|string',
            'number' => 'required|string',
            'address' => 'required|string',
            'GrIns' => 'required|string',
            'date' => 'required|string'
        ]);

        gr2::create([
            'namePet' => $request->namePet,
            'agePet' => $request->agePet,
            'breedPet' => $request->breedPet,
            'ownPet' => $request->ownPet,
            'number' => $request->number,
            'address' => $request->address,
            'GrIns' => $request->GrIns,
            'date' => $request->date
        ]);
        return view('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
