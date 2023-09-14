<?php

namespace App\Http\Controllers;

use App\Models\LeveeFond;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\LeveeFondStoreRequest;
use App\Http\Requests\LeveeFondUpdateRequest;

class LeveeFondController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', LeveeFond::class);

        $search = $request->get('search', '');

        $leveeFonds = LeveeFond::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.levee_fonds.index', compact('leveeFonds', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', LeveeFond::class);

        return view('app.levee_fonds.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LeveeFondStoreRequest $request): RedirectResponse
    {
        $this->authorize('create', LeveeFond::class);

        $validated = $request->validated();

        $leveeFond = LeveeFond::create($validated);

        return redirect()
            ->route('levee-fonds.edit', $leveeFond)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, LeveeFond $leveeFond): View
    {
        $this->authorize('view', $leveeFond);

        return view('app.levee_fonds.show', compact('leveeFond'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, LeveeFond $leveeFond): View
    {
        $this->authorize('update', $leveeFond);

        return view('app.levee_fonds.edit', compact('leveeFond'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        LeveeFondUpdateRequest $request,
        LeveeFond $leveeFond
    ): RedirectResponse {
        $this->authorize('update', $leveeFond);

        $validated = $request->validated();

        $leveeFond->update($validated);

        return redirect()
            ->route('levee-fonds.edit', $leveeFond)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Request $request,
        LeveeFond $leveeFond
    ): RedirectResponse {
        $this->authorize('delete', $leveeFond);

        $leveeFond->delete();

        return redirect()
            ->route('levee-fonds.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
