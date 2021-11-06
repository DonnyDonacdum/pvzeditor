<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class zambie extends Model
{
    use HasFactory;
    protected $table = 'zombielist';
    protected $fillable = ['level','background','gimmick','flag','wave','description'];
}
