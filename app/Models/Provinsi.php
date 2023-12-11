<?php

namespace App\Models;

use App\Models\Kota;
use App\Models\Campaign;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Provinsi extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $with = ['kota'];

    public function kota(){
        return $this->hasMany(Kota::class);
    }

    public function kampanyes()
    {
        return $this->hasManyThrough(Campaign::class, Kota::class);
    }
    
}
