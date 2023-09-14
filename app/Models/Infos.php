<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Infos extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'TitreSite',
        'adresseSite',
        'TelephoneSite',
        'EmailSite',
        'Localisation',
    ];

    protected $searchableFields = ['*'];
}
