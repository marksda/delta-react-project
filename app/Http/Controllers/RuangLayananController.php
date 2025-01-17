<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRuangLayananRequest;
use App\Http\Requests\UpdateRuangLayananRequest;
use App\Http\Resources\RuangLayananResource;
use App\Models\RuangLayanan;

class RuangLayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $query = RuangLayanan::query();
      $ruang_layanans = $query->paginate(2)->onEachSide(1);

      return inertia("Ruang/Index", [
        "ruang_layanans" => RuangLayananResource::collection($ruang_layanans)
      ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRuangLayananRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(RuangLayanan $ruangLayanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RuangLayanan $ruangLayanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRuangLayananRequest $request, RuangLayanan $ruangLayanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RuangLayanan $ruangLayanan)
    {
        //
    }
}
