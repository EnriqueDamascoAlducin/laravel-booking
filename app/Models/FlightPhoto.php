<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightPhoto extends Model
{
    use HasFactory;
    protected $fillable = ["flight_id", "name"];

    public function flight() {
        return $this->belongsTo(Flight::class);
    }
}
