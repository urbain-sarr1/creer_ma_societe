<?php

namespace App\Http\Controllers;

use App\Models\Infos;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\InfosStoreRequest;
use App\Http\Requests\InfosUpdateRequest;

class InfosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', Infos::class);

        $search = $request->get('search', '');

        $allInfos = Infos::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.all_infos.index', compact('allInfos', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', Infos::class);

        return view('app.all_infos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InfosStoreRequest $request): RedirectResponse
    {
        $this->authorize('create', Infos::class);

        $validated = $request->validated();

        $infos = Infos::create($validated);

        return redirect()
            ->route('all-infos.edit', $infos)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Infos $infos): View
    {
        $this->authorize('view', $infos);

        return view('app.all_infos.show', compact('infos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Infos $infos): View
    {
        $this->authorize('update', $infos);

        return view('app.all_infos.edit', compact('infos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        InfosUpdateRequest $request,
        Infos $infos
    ): RedirectResponse {
        $this->authorize('update', $infos);

        $validated = $request->validated();

        $infos->update($validated);

        return redirect()
            ->route('all-infos.edit', $infos)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Infos $infos): RedirectResponse
    {
        $this->authorize('delete', $infos);

        $infos->delete();

        return redirect()
            ->route('all-infos.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
