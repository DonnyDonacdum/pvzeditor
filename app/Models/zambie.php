<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class zambie extends Model
{
    use HasFactory;
    protected $table = 's';
    protected $keyType = 'string';
    protected $fillable = ['name','armortype','special','speed','descrip'];

}
