<?php

namespace App\Http\Controllers;

use App\Models\Associe;
use App\Models\Societe;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\AssocieStoreRequest;
use App\Http\Requests\AssocieUpdateRequest;

class AssocieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', Associe::class);

        $search = $request->get('search', '');

        $associes = Associe::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.associes.index', compact('associes', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', Associe::class);

        $societes = Societe::pluck('Type', 'id');

        return view('app.associes.create', compact('societes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AssocieStoreRequest $request): RedirectResponse
    {
        $this->authorize('create', Associe::class);

        $validated = $request->validated();

        $associe = Associe::create($validated);

        return redirect()
            ->route('associes.edit', $associe)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Associe $associe): View
    {
        $this->authorize('view', $associe);

        return view('app.associes.show', compact('associe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Associe $associe): View
    {
        $this->authorize('update', $associe);

        $societes = Societe::pluck('Type', 'id');

        return view('app.associes.edit', compact('associe', 'societes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        AssocieUpdateRequest $request,
        Associe $associe
    ): RedirectResponse {
        $this->authorize('update', $associe);

        $validated = $request->validated();

        $associe->update($validated);

        return redirect()
            ->route('associes.edit', $associe)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Request $request,
        Associe $associe
    ): RedirectResponse {
        $this->authorize('delete', $associe);

        $associe->delete();

        return redirect()
            ->route('associes.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
