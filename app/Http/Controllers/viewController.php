<?php

namespace App\Http\Controllers;

class viewController extends Controller
{
    public function accueil()
    {
        return view('accueil');
    }
    public function inscriptionSalon()
    {
        return view('inscription-salon');
    }
    public function connexion()
    {
        return view('connexion');
    }
    public function contact()
    {
        return view('contact');
    }
    public function inscripptionCompte()
    {
        return view('inscription-compte');
    }

}
