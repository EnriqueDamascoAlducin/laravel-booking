<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable =[
        "name",
        "url_key"
    ];

    public function flights()
    {
        return $this->belongsToMany(Flight::class, 'flight_categories', 'category_id', 'flight_id');
    }


    public function getSpecificFlight($flightId) {
        $flightCategory = FlightCategory::where("category_id", $this->id)->where("flight_id", $flightId)->first();
        return $flightCategory ? $flightCategory->flight() : null ;
    }
}
