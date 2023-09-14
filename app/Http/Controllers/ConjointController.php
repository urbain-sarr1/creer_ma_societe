<?php

namespace App\Http\Controllers;

use App\Models\Associe;
use App\Models\Conjoint;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\ConjointStoreRequest;
use App\Http\Requests\ConjointUpdateRequest;

class ConjointController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', Conjoint::class);

        $search = $request->get('search', '');

        $conjoints = Conjoint::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.conjoints.index', compact('conjoints', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', Conjoint::class);

        $associes = Associe::pluck('Nom', 'id');

        return view('app.conjoints.create', compact('associes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ConjointStoreRequest $request): RedirectResponse
    {
        $this->authorize('create', Conjoint::class);

        $validated = $request->validated();

        $conjoint = Conjoint::create($validated);

        return redirect()
            ->route('conjoints.edit', $conjoint)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Conjoint $conjoint): View
    {
        $this->authorize('view', $conjoint);

        return view('app.conjoints.show', compact('conjoint'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Conjoint $conjoint): View
    {
        $this->authorize('update', $conjoint);

        $associes = Associe::pluck('Nom', 'id');

        return view('app.conjoints.edit', compact('conjoint', 'associes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        ConjointUpdateRequest $request,
        Conjoint $conjoint
    ): RedirectResponse {
        $this->authorize('update', $conjoint);

        $validated = $request->validated();

        $conjoint->update($validated);

        return redirect()
            ->route('conjoints.edit', $conjoint)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Request $request,
        Conjoint $conjoint
    ): RedirectResponse {
        $this->authorize('delete', $conjoint);

        $conjoint->delete();

        return redirect()
            ->route('conjoints.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
