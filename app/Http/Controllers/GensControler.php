<?php
namespace App\Http\Controllers;

use App\Models\Gens;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


//use Illuminate\Http\Request;

class GensControler extends Controller
{
    //
    public  function home(){
        $humain = Gens::all();
        $nb = count($humain);
        return view('welcome', ['nb' =>$nb]);
    }

    public function register(){
        return view('register');
    }



    public function register_add(Request $request){
            //dd($request ->all());
        $trackingNumber=rand(100000000, 999999999);
        $message = "Personne enregistrer! numero de suivie : " . $trackingNumber;


    //Valdation des données
    $validator = Validator::make($request->all(), [
        'name' => 'required |string|max:20',
        'username' => 'required |string|max:20',
        'sexe' => 'required |string|max:20',
    ]);
    if($validator->fails()){
        return "Erreur";
    }


    //incetion dans la base de données
    $perso = Gens::create([
        'name' => $request->name,
        'username'=> $request->username,
        'sexe'=>$request->sexe,
        'tracking_number' =>$trackingNumber
    ]);

    return view('register', compact('message'));
    }

    public function traking_index(){
        return view('tracking');
    }
    
    public function tracking_search(Request $request){
        $trackingNumber = $request->tracking_number;
        $hum = Gens::where('tracking_number', $trackingNumber)->first();
        if (!$hum){
            return 'introuvable';
        }

        return 'personne rechercher touver ';
    }


}
