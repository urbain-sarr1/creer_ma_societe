<?php

namespace App\Http\Controllers\Api;

use App\Models\Associe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ConjointResource;
use App\Http\Resources\ConjointCollection;

class AssocieConjointsController extends Controller
{
    public function index(
        Request $request,
        Associe $associe
    ): ConjointCollection {
        $this->authorize('view', $associe);

        $search = $request->get('search', '');

        $conjoints = $associe
            ->conjoints()
            ->search($search)
            ->latest()
            ->paginate();

        return new ConjointCollection($conjoints);
    }

    public function store(Request $request, Associe $associe): ConjointResource
    {
        $this->authorize('create', Conjoint::class);

        $validated = $request->validate([
            'PrenomNom' => ['required', 'max:255', 'string'],
            'DateNaissance' => ['required', 'date'],
            'LieuNaissance' => ['required', 'max:255', 'string'],
            'Nationalite' => ['required', 'max:255', 'string'],
            'DateMariage' => ['required', 'date'],
            'LieuMariage' => ['required', 'max:255', 'string'],
            'DateContratMariage' => ['required', 'date'],
            'NomResidentNotaire' => ['required', 'max:255', 'string'],
            'RegimeMatrimoniale' => ['required', 'max:255', 'string'],
        ]);

        $conjoint = $associe->conjoints()->create($validated);

        return new ConjointResource($conjoint);
    }
}
