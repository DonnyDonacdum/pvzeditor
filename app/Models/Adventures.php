<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adventure extends Model
{
    use HasFactory;
    protected $table = 'adventure';
    protected $fillable = ['level','background','gimmick','flag','wave','description'];
    public static function all(){
        return self::$adventure;
    } 
}
