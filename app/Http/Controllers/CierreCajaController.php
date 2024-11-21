<?php

namespace App\Http\Controllers;

use App\Models\cierreCaja;
use Illuminate\Http\Request;

class CierreCajaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {return view('cierreCaja.index');
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {return view('cierreCaja.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(cierreCaja $cierreCaja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cierreCaja $cierreCaja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cierreCaja $cierreCaja)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cierreCaja $cierreCaja)
    {
        //
    }
}
