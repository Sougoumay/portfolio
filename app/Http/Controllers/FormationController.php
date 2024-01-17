<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormationRequest;
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
    public function store(FormationRequest $request)
    {
        $formation = Formation::query()->create($request->validated());

        return redirect()->route("admin.formation.index", $formation);
    }
}
