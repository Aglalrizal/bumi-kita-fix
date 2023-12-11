<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['organized', 'volunteers', 'kota'];
    public function scopeFilter($query, array $filters){

        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where(function ($query) use ($search) {
                $query->where('title', 'like', '%'.$search.'%')
                    ->orWhere('description', 'like', '%'.$search.'%')
                    ->orWhereHas('kota', function ($query) use ($search) {
                        $query->where('name', 'like', '%'.$search.'%');
                    })
                    ->orWhereHas('organized', function ($query) use ($search) {
                        $query->where('name', 'like', '%'.$search.'%');
                    })
                    ->orWhereHas('kota', function ($query) use ($search) {
                        $query->whereHas('provinsi', function ($query) use ($search) {
                            $query->where('name', 'like', '%'.$search.'%');
                        });
                });
            });
        });

        // $query->when($filters['search'] ?? false, function ($query, $search){
        //     return $query->where('title', 'like', '%'.$search.'%')
        //             ->orWhere('description', 'like', '%'.$search.'%');
        // });
        // $query->when($filters['provinsi'] ?? false, function($query, $provinsi){
        //     return $query->whereHas('provinsi', function ($query) use ($provinsi) {
        //         $query->where('slug', $provinsi);
        //     });
        // });
        $query->when($filters['provinsi'] ?? false, function ($query, $provinsi){
            return $query->whereHas('kota', function($query) use ($provinsi){
                        $query->whereHas('provinsi', function ($query) use ($provinsi) {
                            $query->where('slug', $provinsi);
                });
            });
        });
        
        // versi closure
        $query->when($filters['kota'] ?? false, function ($query, $kota){
            return $query->whereHas('kota', function($query) use ($kota){
                $query->where('slug', $kota);
            });
        });
        // $query->when($filters['author'] ?? false, function ($query, $author){
        //     return $query->whereHas('author', function($query) use ($author){
        //         $query->where('username', $author);
        //     });
        // });
        //versi arrow function 
        $query->when($filters['organized'] ?? false,fn($query, $organized)=>
            $query->whereHas('organized', fn($query)=> 
                $query->where('username', $organized)
            )
        );
    }
    public function organized(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function volunteers(){
        return $this->belongsToMany(User::class, 'volunteers', 'campaign_id', 'user_id');
    }
    public function kota(){
        return $this->belongsTo(Kota::class, 'kota_id');
    }
}
