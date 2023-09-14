<?php

namespace App\Http\Controllers\Api;

use App\Models\Infos;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\InfosResource;
use App\Http\Resources\InfosCollection;
use App\Http\Requests\InfosStoreRequest;
use App\Http\Requests\InfosUpdateRequest;

class InfosController extends Controller
{
    public function index(Request $request): InfosCollection
    {
        $this->authorize('view-any', Infos::class);

        $search = $request->get('search', '');

        $allInfos = Infos::search($search)
            ->latest()
            ->paginate();

        return new InfosCollection($allInfos);
    }

    public function store(InfosStoreRequest $request): InfosResource
    {
        $this->authorize('create', Infos::class);

        $validated = $request->validated();

        $infos = Infos::create($validated);

        return new InfosResource($infos);
    }

    public function show(Request $request, Infos $infos): InfosResource
    {
        $this->authorize('view', $infos);

        return new InfosResource($infos);
    }

    public function update(
        InfosUpdateRequest $request,
        Infos $infos
    ): InfosResource {
        $this->authorize('update', $infos);

        $validated = $request->validated();

        $infos->update($validated);

        return new InfosResource($infos);
    }

    public function destroy(Request $request, Infos $infos): Response
    {
        $this->authorize('delete', $infos);

        $infos->delete();

        return response()->noContent();
    }
}
