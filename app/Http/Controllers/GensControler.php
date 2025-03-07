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



    public function regoster_add(){
            //dd($request ->all());

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
        'sexe'=>$request->sexe


    ]);
    return "Envoyer";
    }
}
