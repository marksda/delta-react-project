<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJenisLayananRequest;
use App\Http\Requests\UpdateJenisLayananRequest;
use App\Models\JenisLayanan;
use App\Http\Resources\JenisLayananResource;

class JenisLayananController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $query = JenisLayanan::query();
    $jenis_layanans = $query->paginate(2)->onEachSide(1);

    $data = JenisLayananResource::collection($jenis_layanans);

    return inertia("Layanan/Index", [
      // "jenis_layanans" => JenisLayananResource::collection($jenis_layanans)
      "jenis_layanans" => $data
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
  public function store(StoreJenisLayananRequest $request)
  {
      //
  }

  /**
   * Display the specified resource.
   */
  public function show(JenisLayanan $jenisLayanan)
  {
      //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(JenisLayanan $jenisLayanan)
  {
      //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UpdateJenisLayananRequest $request, JenisLayanan $jenisLayanan)
  {
      //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(JenisLayanan $jenisLayanan)
  {
      //
  }
}
