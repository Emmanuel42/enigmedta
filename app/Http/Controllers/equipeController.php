<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipe;

class equipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipes = Equipe::all();
        
        return view ('bleue.enigme1bl', ['equipes' => $equipes]);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if ($equipe = Equipe::find(1)){
            
            return view('bleue.enigme1bl')->with('equipes', $equipe);
        }
        elseif ($equipe = Equipe::find(2)){
        
            return view ('rouge.enigme1ro')->with('equipes', $equipe);
        }
        elseif ($equipe = Equipe::find(3)){
            
            return view ('verte.enigme1ve')->with('equipes', $equipe);
        }
        elseif ($equipe = Equipe::find(4)){
            
            return view ('jaune.enigme1ja')->with('equipes', $equipe);
        }
        elseif ($equipe = Equipe::find(5)){
            
            return view ('violette.enigme1vi')->with('equipes', $equipe);
        }
        else {
            //message erreur
        }
              
//         return view ('enigme1');

//         $addresse= AddressesModel::find($id);
//         return view('addresses.detailAddresse')->with('addresse', $addresse);
        
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
