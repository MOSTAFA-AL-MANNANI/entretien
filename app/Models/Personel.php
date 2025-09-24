<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personel extends Model
{
        
    protected $table = "personel";
    protected $primaryKey = "id";
    protected $fillable = ["question"];
}
