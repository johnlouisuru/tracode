<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class csharp extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table='csharps';
    public $primarykey='id';
    public $timestamps=true;
}
