<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;

    protected $table = 'episodes';

    protected $fillable = ['number', 'watched'];
    
    public $timestamps = false;

    protected $casts = [
        'watched' => 'bool',
    ];

    public function season()
    {
        return $this->belongsTo(Season::class);
    }

    // protected function watched(): Attribute
    // {
    //     return new Attribute(
    //         get: fn ($watched) => (bool) $watched,
    //         set: fn ($watched) => (bool) $watched,
    //     );
    // }
    
    public function scopeWatched($query)
    {
        $query->where('watched', true);
    }
}
