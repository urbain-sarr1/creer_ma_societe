<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gerant extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'Nom',
        'Prenom',
        'Nationalite',
        'Profession',
        'Email',
        'Telephone',
    ];

    protected $searchableFields = ['*'];

    public function societe()
    {
        return $this->hasOne(Societe::class);
    }
}
