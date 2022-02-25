<?php

namespace App\Models;

use App\Models\Countries;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continents extends Model
{
    protected $fillable = [
        'continent',
    ];
    public $timestamps = false;

    public function country(){
        return $this->belongsTo(Countries::class);
    }

}