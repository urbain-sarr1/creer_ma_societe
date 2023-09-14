<?php

namespace App\Http\Controllers\Api;

use App\Models\LeveeFond;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\LeveeFondResource;
use App\Http\Resources\LeveeFondCollection;
use App\Http\Requests\LeveeFondStoreRequest;
use App\Http\Requests\LeveeFondUpdateRequest;

class LeveeFondController extends Controller
{
    public function index(Request $request): LeveeFondCollection
    {
        $this->authorize('view-any', LeveeFond::class);

        $search = $request->get('search', '');

        $leveeFonds = LeveeFond::search($search)
            ->latest()
            ->paginate();

        return new LeveeFondCollection($leveeFonds);
    }

    public function store(LeveeFondStoreRequest $request): LeveeFondResource
    {
        $this->authorize('create', LeveeFond::class);

        $validated = $request->validated();

        $leveeFond = LeveeFond::create($validated);

        return new LeveeFondResource($leveeFond);
    }

    public function show(
        Request $request,
        LeveeFond $leveeFond
    ): LeveeFondResource {
        $this->authorize('view', $leveeFond);

        return new LeveeFondResource($leveeFond);
    }

    public function update(
        LeveeFondUpdateRequest $request,
        LeveeFond $leveeFond
    ): LeveeFondResource {
        $this->authorize('update', $leveeFond);

        $validated = $request->validated();

        $leveeFond->update($validated);

        return new LeveeFondResource($leveeFond);
    }

    public function destroy(Request $request, LeveeFond $leveeFond): Response
    {
        $this->authorize('delete', $leveeFond);

        $leveeFond->delete();

        return response()->noContent();
    }
}
