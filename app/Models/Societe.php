<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Societe extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'Type',
        'Denomination',
        'Adresse',
        'MontantCapital',
        'gerant_id',
    ];

    protected $searchableFields = ['*'];

    public function gerant()
    {
        return $this->belongsTo(Gerant::class);
    }

    public function associes()
    {
        return $this->hasMany(Associe::class);
    }
}
