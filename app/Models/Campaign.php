<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['organized'];
    public function organized(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
