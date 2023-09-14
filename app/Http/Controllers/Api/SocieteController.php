<?php

namespace App\Http\Controllers\Api;

use App\Models\Societe;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\SocieteResource;
use App\Http\Resources\SocieteCollection;
use App\Http\Requests\SocieteStoreRequest;
use App\Http\Requests\SocieteUpdateRequest;

class SocieteController extends Controller
{
    public function index(Request $request): SocieteCollection
    {
        $this->authorize('view-any', Societe::class);

        $search = $request->get('search', '');

        $societes = Societe::search($search)
            ->latest()
            ->paginate();

        return new SocieteCollection($societes);
    }

    public function store(SocieteStoreRequest $request): SocieteResource
    {
        $this->authorize('create', Societe::class);

        $validated = $request->validated();

        $societe = Societe::create($validated);

        return new SocieteResource($societe);
    }

    public function show(Request $request, Societe $societe): SocieteResource
    {
        $this->authorize('view', $societe);

        return new SocieteResource($societe);
    }

    public function update(
        SocieteUpdateRequest $request,
        Societe $societe
    ): SocieteResource {
        $this->authorize('update', $societe);

        $validated = $request->validated();

        $societe->update($validated);

        return new SocieteResource($societe);
    }

    public function destroy(Request $request, Societe $societe): Response
    {
        $this->authorize('delete', $societe);

        $societe->delete();

        return response()->noContent();
    }
}
