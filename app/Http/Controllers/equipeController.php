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
        return view('bleue.enigme1bl');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valider = $request->input('enigme1bl');
        
        if ($valider == 'DESIGN'){
            
           return view('bleue.enigme2bl');
            
        }
        else {
            
            return view('bleue.enigme1bl');
            
        }
        
       
        //    recupere la valeur de l'input 
        //comparer la valeur à la valeur attendue
        //si valeur input = valeur attendue retourne la vue de l'énigme 2 sinon remettre le focus sur l'input
          
    }
    
    public function verifE1(){
        
        $valider = $request->input('enigme1bl');
        
        if ($valider == 'DESIGN'){
            
            return view('bleue.enigme2bl');
        }
        else {
            
            return view('bleue.enigme1bl');
        }
    }
    
    public function verifE2(){
        
        $valider = $request->input('enigme2bl');
        
        if ($valider == 'TECHNOLOGIE'){
            
            return view('bleue.enigme3bl');
        }
        else {
            
            return view('bleue.enigme2bl');
        }
    }
    
    public function verifE3(){
        
        $valider = $request->input('enigme3bl');
        
        if ($valider == 'ACADEMIE'){
            
            return view('bleue.enigme4bl');
        }
        else {
            
            return view('bleue.enigme3bl');
        }
    }
    
    public function verifE4(){
        
        $valider = $request->input('enigme4bl');
        
        if ($valider == 'DTA'){
            
            return view('bleue.enigme5bl');
        }
        else {
            
            return view('bleue.enigme4bl');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $equipe = Equipe::find($id);
            
            if ($id == 1){
                
                return view('bleue.enigme1bl')->with('equipes', $equipe);
                
            }
            elseif ($id == 2){
                
                return view ('rouge.enigme1ro')->with('equipes', $equipe);
                
            }
            elseif ($id == 3){
                
                return view ('verte.enigme1ve')->with('equipes', $equipe);
                
            }
            elseif ($id == 4){
                
                return view ('jaune.enigme1ja')->with('equipes', $equipe);
                
            }
            elseif ($id == 5){
                
                return view ('violette.enigme1vi')->with('equipes', $equipe);
                
            }

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
