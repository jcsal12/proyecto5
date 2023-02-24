<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name'
    ];

    public function libros()
    {
        return $this->hasMany(Libros::class, 'location_id');
    }
}
