<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LeveeFond extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'DescriptionProjet',
        'EtatAvancement',
        'BesoinFinancement',
        'ModaliteRemboursement',
        'Garanties',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'levee_fonds';
}
