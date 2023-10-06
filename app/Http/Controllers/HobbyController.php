<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hobby;

class HobbyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Returnera hela tabellen
        return Hobby::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //All data ska fyllas i för att sparas
        $request->validate([
            'place' => 'required',
            'kilometers' => 'required',
            'visited' => 'required'
        ]);
        return Hobby::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Visa data, om ej data finns = felmeddelande
        $hobby = Hobby::find($id);
        if($hobby != null){
            return $hobby;
        } else {
            return response()->json([
                'Hobby not found'
            ], 404);
        }
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

        //Visa data och uppdatera, om data ej finns = felmeddelande
        $hobby = Hobby::find($id);

        if($hobby != null){
            $hobby->update($request->all());
            return $hobby;
        } else {
            return response()->json([
                'Hobby not found'
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Radera givet id och om givet id ej finns = felmeddelande
        $hobby = Hobby::find($id);

        if($hobby != null){
            $hobby->delete();
            return response()->json([
                'Hobby deleted'
            ] );
        } else {
            return response()->json([
                'Hobby not found'
            ], 404);
        }
    }
}
