<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePasienRequest;
use App\Http\Requests\UpdatePasienRequest;
use App\Http\Resources\PasienResource;
use App\Models\Pasien;

class PasienController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $query = Pasien::query();

    // $sortField = request("sort_field", 'created_at');
    // $sortDirection = request("sort_direction", "desc");

    // if (request("name")) {
    //     $query->where("name", "like", "%" . request("name") . "%");
    // }
    // if (request("status")) {
    //     $query->where("status", request("status"));
    // }

    // $pasiens = $query->orderBy($sortField, $sortDirection)
    //     ->paginate(10)
    //     ->onEachSide(1);

    $pasiens = $query->paginate(10)->onEachSide(1);

    return inertia("RekamMedis", [
      "pasiens" => PasienResource::collection($pasiens),
      'queryParams' => request()->query() ?: null,
      'success' => session('success'),
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
  public function store(StorePasienRequest $request)
  {
    //
  }

  /**
   * Display the specified resource.
   */
  public function show(Pasien $pasien)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Pasien $pasien)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UpdatePasienRequest $request, Pasien $pasien)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Pasien $pasien)
  {
    //
  }
}
