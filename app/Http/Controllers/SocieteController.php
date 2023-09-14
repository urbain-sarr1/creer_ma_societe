<?php

namespace App\Http\Controllers;

use App\Models\Gerant;
use App\Models\Societe;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\SocieteStoreRequest;
use App\Http\Requests\SocieteUpdateRequest;

class SocieteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', Societe::class);

        $search = $request->get('search', '');

        $societes = Societe::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.societes.index', compact('societes', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', Societe::class);

        $gerants = Gerant::pluck('Nom', 'id');

        return view('app.societes.create', compact('gerants'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SocieteStoreRequest $request): RedirectResponse
    {
        $this->authorize('create', Societe::class);

        $validated = $request->validated();

        $societe = Societe::create($validated);

        return redirect()
            ->route('societes.edit', $societe)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Societe $societe): View
    {
        $this->authorize('view', $societe);

        return view('app.societes.show', compact('societe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Societe $societe): View
    {
        $this->authorize('update', $societe);

        $gerants = Gerant::pluck('Nom', 'id');

        return view('app.societes.edit', compact('societe', 'gerants'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        SocieteUpdateRequest $request,
        Societe $societe
    ): RedirectResponse {
        $this->authorize('update', $societe);

        $validated = $request->validated();

        $societe->update($validated);

        return redirect()
            ->route('societes.edit', $societe)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Request $request,
        Societe $societe
    ): RedirectResponse {
        $this->authorize('delete', $societe);

        $societe->delete();

        return redirect()
            ->route('societes.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
