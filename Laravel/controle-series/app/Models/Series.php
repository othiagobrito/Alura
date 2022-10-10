<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    use HasFactory;

    protected $table = 'series';

    protected $fillable = ['name'];

    public static function getSeries()
    {
        return self::orderBy('name')->get();
    }

    public function seasons()
    {
        return $this->hasMany(Season::class);
    }
}
