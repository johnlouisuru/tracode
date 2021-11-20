<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phptab extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table='phptabs';
    public $primarykey='id';
    public $timestamps=true;
}
