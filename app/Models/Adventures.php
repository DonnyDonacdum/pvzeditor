<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adventures extends Model
{
    use HasFactory;
    protected $table = 'adventure';
    protected $primaryKey = 'level';
    protected $keyType = 'string';
    protected $fillable = ['level','background','gimmick','flag','wave','description'];
    public static function allData(){
        return self::$adventure;
    } 
}
