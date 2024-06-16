<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Flight extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        "name",
        "main_photo",
        "status",
        "price",
        "special_price",
        "kids_price",
        "kids_special_price",
        "last_hours",
        "description",
        "short_description",
        "extra_comments",
        "payment_by",
        "allow_kids",
        "min_people",
        "max_people",
        "is_recommended",
        "url_key",
    ];


    public function photos() {
        return $this->hasMany(FlightPhoto::class);
    }

    public function getMainPhoto() {
        if (!Storage::disk('products')->exists($this->main_photo)) {
           return Storage::disk('products')->url('no-image.png');
        } else {
           return Storage::disk('products')->url($this->main_photo);
        }
    }

    public function getSpecificCategory($categoryId) {
        $flightCategory = FlightCategory::where("flight_id", $this->id)->where("category_id", $categoryId)->first();
        return $flightCategory ? $flightCategory->category() : null ;
    }

    
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'flight_categories', 'flight_id', 'category_id');
    }
}
