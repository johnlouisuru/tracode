<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class scoring extends Model
{
    use HasFactory;

    protected $table='scorings';
    public $primarykey='id';
    public $timestamps=true;

   public function user()
    {
      return $this->belongsToMany(User::class,'iduser');
    }
  
    public function quizzes()
    {
      return $this->belongsToMany(phpquiz::class,'idquizz');
    }
    
}
