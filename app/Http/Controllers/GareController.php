<?php

namespace App\Http\Controllers;

use App\Models\Gare;

class GareController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
        return response()->json(Gare::all()->with('boutiques'));
    }


    /**
     * Display the specified resource.
     */
    public function show(Gare $gare)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gare $gare)
    {
        //
    }
    public function historiqueGare(){

    }
}
