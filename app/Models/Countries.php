<?php

namespace App\Models;

use App\Models\Continents;
use App\Models\Representatives;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    protected $fillable = [
        'country',
        'id_continent',
    ];
    public $timestamps = false;
    
    public function continents(){
        return $this->hasMany(Continents::class);
    }
    public function representative(){
        return $this->belongsTo(Representatives::class);
    }
}
