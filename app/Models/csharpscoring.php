<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class csharpscoring extends Model
{
    use HasFactory;

    protected $table='csharpscorings';
    public $primarykey='id';
    public $timestamps=true;
}
