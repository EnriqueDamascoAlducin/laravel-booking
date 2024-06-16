<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerAddress extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
       
        'user_id',
        'street',
        'country',
        'city',
        'state',
        'postcode',
        'country'
    ];

    protected $table = 'user_addresses';
}
