<?php

namespace App\Http\Controllers\Api;

use App\Models\Associe;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\AssocieResource;
use App\Http\Resources\AssocieCollection;
use App\Http\Requests\AssocieStoreRequest;
use App\Http\Requests\AssocieUpdateRequest;

class AssocieController extends Controller
{
    public function index(Request $request): AssocieCollection
    {
        $this->authorize('view-any', Associe::class);

        $search = $request->get('search', '');

        $associes = Associe::search($search)
            ->latest()
            ->paginate();

        return new AssocieCollection($associes);
    }

    public function store(AssocieStoreRequest $request): AssocieResource
    {
        $this->authorize('create', Associe::class);

        $validated = $request->validated();

        $associe = Associe::create($validated);

        return new AssocieResource($associe);
    }

    public function show(Request $request, Associe $associe): AssocieResource
    {
        $this->authorize('view', $associe);

        return new AssocieResource($associe);
    }

    public function update(
        AssocieUpdateRequest $request,
        Associe $associe
    ): AssocieResource {
        $this->authorize('update', $associe);

        $validated = $request->validated();

        $associe->update($validated);

        return new AssocieResource($associe);
    }

    public function destroy(Request $request, Associe $associe): Response
    {
        $this->authorize('delete', $associe);

        $associe->delete();

        return response()->noContent();
    }
}
