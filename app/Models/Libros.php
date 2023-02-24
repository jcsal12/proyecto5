<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libros extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'description',
        'price',
        'currency',
        'images',
    ];

    /**
     * Devolver el usuario asociado.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function categories()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }

    public function locations()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }

}
