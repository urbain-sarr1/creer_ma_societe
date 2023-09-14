<?php

namespace App\Http\Controllers\Api;

use App\Models\Gerant;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\GerantResource;
use App\Http\Resources\GerantCollection;
use App\Http\Requests\GerantStoreRequest;
use App\Http\Requests\GerantUpdateRequest;

class GerantController extends Controller
{
    public function index(Request $request): GerantCollection
    {
        $this->authorize('view-any', Gerant::class);

        $search = $request->get('search', '');

        $gerants = Gerant::search($search)
            ->latest()
            ->paginate();

        return new GerantCollection($gerants);
    }

    public function store(GerantStoreRequest $request): GerantResource
    {
        $this->authorize('create', Gerant::class);

        $validated = $request->validated();

        $gerant = Gerant::create($validated);

        return new GerantResource($gerant);
    }

    public function show(Request $request, Gerant $gerant): GerantResource
    {
        $this->authorize('view', $gerant);

        return new GerantResource($gerant);
    }

    public function update(
        GerantUpdateRequest $request,
        Gerant $gerant
    ): GerantResource {
        $this->authorize('update', $gerant);

        $validated = $request->validated();

        $gerant->update($validated);

        return new GerantResource($gerant);
    }

    public function destroy(Request $request, Gerant $gerant): Response
    {
        $this->authorize('delete', $gerant);

        $gerant->delete();

        return response()->noContent();
    }
}
