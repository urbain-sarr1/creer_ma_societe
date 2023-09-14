<?php

namespace App\Http\Controllers\Api;

use App\Models\Conjoint;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\ConjointResource;
use App\Http\Resources\ConjointCollection;
use App\Http\Requests\ConjointStoreRequest;
use App\Http\Requests\ConjointUpdateRequest;

class ConjointController extends Controller
{
    public function index(Request $request): ConjointCollection
    {
        $this->authorize('view-any', Conjoint::class);

        $search = $request->get('search', '');

        $conjoints = Conjoint::search($search)
            ->latest()
            ->paginate();

        return new ConjointCollection($conjoints);
    }

    public function store(ConjointStoreRequest $request): ConjointResource
    {
        $this->authorize('create', Conjoint::class);

        $validated = $request->validated();

        $conjoint = Conjoint::create($validated);

        return new ConjointResource($conjoint);
    }

    public function show(Request $request, Conjoint $conjoint): ConjointResource
    {
        $this->authorize('view', $conjoint);

        return new ConjointResource($conjoint);
    }

    public function update(
        ConjointUpdateRequest $request,
        Conjoint $conjoint
    ): ConjointResource {
        $this->authorize('update', $conjoint);

        $validated = $request->validated();

        $conjoint->update($validated);

        return new ConjointResource($conjoint);
    }

    public function destroy(Request $request, Conjoint $conjoint): Response
    {
        $this->authorize('delete', $conjoint);

        $conjoint->delete();

        return response()->noContent();
    }
}
