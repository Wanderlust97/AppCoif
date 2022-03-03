<?php

namespace App\Http\Controllers;

use App\Models\ReservationsModel;

class reservationController extends Controller
{
    public function reservations()
        {
        $reservations = ReservationsModel::get();
        return view('reservations', ['reservations' => $reservations]);
        }
    
}
