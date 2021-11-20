<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class csharpquiz extends Model
{
    use HasFactory;

    protected $table='csharpquizs';
    public $primarykey='id';
    public $timestamps=true;

    public function users() {
        return $this->belongsToMany(User::class,'csharpscorings','idquizz','iduser')
               ->withPivot('ans','point','difficulty');
   }
}
