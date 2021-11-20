<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phpquiz extends Model
{
    use HasFactory;
    protected $table='phpquizs';
    public $primarykey='id';
    public $timestamps=true;

    public function users() {
        return $this->belongsToMany(User::class,'scorings','idquizz','iduser')
               ->withPivot('ans','point','difficulty');
   }
}
