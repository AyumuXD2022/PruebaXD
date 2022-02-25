<?php

namespace App\Models;

use App\Models\Countries;
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
    
    public function countries(){
        return $this->hasMany(Countries::class);
    }
}
