<?php

namespace App\Http\Controllers;

use App\Models\Gerant;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\GerantStoreRequest;
use App\Http\Requests\GerantUpdateRequest;

class GerantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', Gerant::class);

        $search = $request->get('search', '');

        $gerants = Gerant::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.gerants.index', compact('gerants', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', Gerant::class);

        return view('app.gerants.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GerantStoreRequest $request): RedirectResponse
    {
        $this->authorize('create', Gerant::class);

        $validated = $request->validated();

        $gerant = Gerant::create($validated);

        return redirect()
            ->route('gerants.edit', $gerant)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Gerant $gerant): View
    {
        $this->authorize('view', $gerant);

        return view('app.gerants.show', compact('gerant'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Gerant $gerant): View
    {
        $this->authorize('update', $gerant);

        return view('app.gerants.edit', compact('gerant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        GerantUpdateRequest $request,
        Gerant $gerant
    ): RedirectResponse {
        $this->authorize('update', $gerant);

        $validated = $request->validated();

        $gerant->update($validated);

        return redirect()
            ->route('gerants.edit', $gerant)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Gerant $gerant): RedirectResponse
    {
        $this->authorize('delete', $gerant);

        $gerant->delete();

        return redirect()
            ->route('gerants.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
