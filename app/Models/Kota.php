<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function provinsi(){
        return $this->belongsTo(Provinsi::class, 'provinsi_id');
    }
    public function campaign(){
        return $this->hasMany(Campaign::class);
    }
}