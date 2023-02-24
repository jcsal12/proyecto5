<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
    ];

    //devolver los libros asociados a una categoría determinada.
    public function libros()
    {
        return $this->hasMany(Libros::class, 'categorie_id');
    }


}
