<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationsModel extends Model
{
    use HasFactory;
    protected $table = 'reservations';

    public function reservations(){
        return $this->belongsTo(ReservationsModel::class);
    }
}
