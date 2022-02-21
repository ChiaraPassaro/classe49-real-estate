<?php

namespace App\Http\Controllers;

use App\House;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $houses = House::paginate(15);
        return view('houses.home', ['houses' => $houses]);
    }


    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\House  $house
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     $house = new House();

    //     dd($house->findOrFail($id));
    // }


    /**
     * Display the specified resource.
     *
     * @param  \App\House  $house
     * @return \Illuminate\Http\Response
     */
    public function show(House $house) //findOrFail
    {
        //restituiamo una view alla quale passiamo la nostra riga specifica del db
        // return view('houses.show', ['house' => $house]);
        return view('houses.show', compact('house'));
    }
}
