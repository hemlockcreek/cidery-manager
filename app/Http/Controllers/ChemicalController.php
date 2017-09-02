<?php

namespace Cidery\Http\Controllers;

use Cidery\Chemical;
use Illuminate\Http\Request;

class ChemicalController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \Cidery\Chemical  $chemical
     * @return \Illuminate\Http\Response
     */
    public function show(Chemical $chemical)
    {
        return $chemical;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Cidery\Chemical  $chemical
     * @return \Illuminate\Http\Response
     */
    public function edit(Chemical $chemical)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Cidery\Chemical  $chemical
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chemical $chemical)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Cidery\Chemical  $chemical
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chemical $chemical)
    {
        //
    }
}
