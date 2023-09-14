<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Associe extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'Nom',
        'Prenom',
        'DateNaissance',
        'LieuNaissance',
        'Nationalite',
        'Profession',
        'CNI',
        'DateDelivrance',
        'DateExpiration',
        'Adresse',
        'Telephone',
        'PieceIdentite',
        'SituationMatrimoniale',
        'societe_id',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'DateNaissance' => 'date',
        'DateDelivrance' => 'date',
        'DateExpiration' => 'date',
    ];

    public function conjoints()
    {
        return $this->hasMany(Conjoint::class);
    }

    public function societe()
    {
        return $this->belongsTo(Societe::class);
    }
}
