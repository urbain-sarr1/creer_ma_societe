<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Conjoint extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'PrenomNom',
        'DateNaissance',
        'LieuNaissance',
        'Nationalite',
        'DateMariage',
        'LieuMariage',
        'DateContratMariage',
        'NomResidentNotaire',
        'RegimeMatrimoniale',
        'associe_id',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'DateNaissance' => 'date',
        'DateMariage' => 'date',
        'DateContratMariage' => 'date',
    ];

    public function associe()
    {
        return $this->belongsTo(Associe::class);
    }
}
