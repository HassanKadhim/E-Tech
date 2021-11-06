<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Avarage;

class AvarageController extends Controller
{
    public function avarage(Request $req){
        $title = "Let's Back" ;
        
        $this->validate($req, [
            'avarage'   => 'required',
            'section' => 'required', 
        ]);
        $avarage = Avarage::orderBy('avarage', 'DESC')
                                                    ->where('avarage' , '<=' , (float)$req->avarage)
                                                    ->where('section' , $req->section)
                                                    ->get();
        $avg = $req->avarage ; 
        return view('table' , compact('avarage' , 'avg' , 'title'));
    }

}
