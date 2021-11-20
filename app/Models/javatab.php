<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class javatab extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table='javatabs';
    public $primarykey='id';
    public $timestamps=true;
}
