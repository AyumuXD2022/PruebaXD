<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Representatives extends Model
{
    protected $fillable = [
        'city',
        'name',
        'surname',
        'phone',
        'email',
        'id_country',
    ];
    public $timestamps = false;
}
