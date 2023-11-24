<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manzana extends Model
{

    protected $table = "manzanas";

    public $timestamps = false; 
    use HasFactory;
}
