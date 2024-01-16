<?php

namespace App\Http\Controllers;

use App\Http\Requests\Formation\StoreRequest;
use App\Http\Requests\Formation\UpdateRequest;
use App\Models\Formation;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formations = Formation::all();
        return view("admin.formation.index", compact("formations"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.formation.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $formation = Formation::query()->create($request->validated());

        return redirect()->route("formation.show", $formation);
    }

    /**
     * Display the specified resource.
     */
    public function show(Formation $formation)
    {
        return view("admin.formation.show", $formation);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Formation $formation)
    {
        return view("admin.formation.edit", $formation);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Formation $formation)
    {
        $formation->update($request->validated());
        return redirect()->route("formation.show", $formation);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Formation $formation)
    {
        $formation->deleteOrFail();
        return redirect()->route("admin.hamid.formation.index");
    }
}
