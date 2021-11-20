<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class javascoring extends Model
{
    use HasFactory;

    protected $table='javascorings';
    public $primarykey='id';
    public $timestamps=true;

}
