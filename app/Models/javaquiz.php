<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class javaquiz extends Model
{
    use HasFactory;
    protected $table='javaquizs';
    public $primarykey='id';
    public $timestamps=true;

    public function users() {
        return $this->belongsToMany(User::class,'javascorings','idquizz','iduser')
               ->withPivot('ans','point','difficulty');
   }
}
