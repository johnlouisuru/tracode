<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reqscore extends Model
{
    use HasFactory;

    protected $table='reqscores';
    public $primarykey='id';
    public $timestamps=true;
}
