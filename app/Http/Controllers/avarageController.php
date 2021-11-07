<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Avarage;
use Session;
class AvarageController extends Controller
{
    public function avarage(Request $req){
        
        $this->validate($req, [
            'avarage'   => 'required',
            'section' => 'required', 
        ]);
        $avarage = Avarage::orderBy('avarage', 'DESC')
                                                    ->where('avarage' , '<=' , (float)$req->avarage)
                                                    ->where('section' , $req->section)
                                                    ->get();
        $avg = $req->avarage ; 
        return view('table' , compact('avarage' , 'avg' ));
    }

    public function add_college(Request $req){

        $this->validate($req, [
            'avarage'   => 'required',
            'section' => 'required', 
            'college_name' => 'required', 
        ]);

        $data = [
            'college_name' => $req->college_name,
            'section' => $req->section,
            'avarage' => $req->avarage,
            'sex' => $req->gender,
        ];

        $avarage = Avarage::create($data);

        if($avarage){
            return redirect()->back()->with('success' , 'Done');
        }else{
            return redirect()->back()->with('error' , 'not Done');
        }   
        

    }

    public function college(){

        return view('add-college' );
    }

}
