<?php

namespace App\Http\Controllers\Api;

use App\Models\Societe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\AssocieResource;
use App\Http\Resources\AssocieCollection;

class SocieteAssociesController extends Controller
{
    public function index(Request $request, Societe $societe): AssocieCollection
    {
        $this->authorize('view', $societe);

        $search = $request->get('search', '');

        $associes = $societe
            ->associes()
            ->search($search)
            ->latest()
            ->paginate();

        return new AssocieCollection($associes);
    }

    public function store(Request $request, Societe $societe): AssocieResource
    {
        $this->authorize('create', Associe::class);

        $validated = $request->validate([
            'Nom' => ['required', 'max:255', 'string'],
            'Prenom' => ['required', 'max:255', 'string'],
            'DateNaissance' => ['required', 'date'],
            'LieuNaissance' => ['required', 'max:255', 'string'],
            'Nationalite' => ['required', 'max:255', 'string'],
            'Profession' => ['required', 'max:255', 'string'],
            'CNI' => ['required', 'max:255', 'string'],
            'DateDelivrance' => ['required', 'date'],
            'DateExpiration' => ['required', 'date'],
            'Adresse' => ['required', 'max:255', 'string'],
            'Telephone' => ['required', 'max:255', 'string'],
            'PieceIdentite' => ['required', 'max:255', 'string'],
            'SituationMatrimoniale' => ['required', 'max:255', 'string'],
        ]);

        $associe = $societe->associes()->create($validated);

        return new AssocieResource($associe);
    }
}
