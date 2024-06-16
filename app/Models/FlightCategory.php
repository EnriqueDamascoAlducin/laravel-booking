<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FlightCategory extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        "flight_id",
        "category_id"
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function flight() {
        return $this->belongsTo(Flight::class);
    }
}
