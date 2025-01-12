<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreObatRequest;
use App\Http\Requests\UpdateObatRequest;
use App\Models\Obat;
use Illuminate\Support\Facades\Http;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $response = Http::withHeaders([
        'Content-Type'=> 'application/json',
        'Authorization' => 'Bearer 9df38141-7c54-4dad-b69b-2157d83779bf|s0Mdc22XIeYBXza3nFhe6AddKB7pnqelMWQCc4Oic60a4240',
      ])->get('http://http://recruitment.rsdeltasurya.com/api/v1/medicines');

      $obats = $response->json();

      return $obats;

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
    public function store(StoreObatRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Obat $obat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Obat $obat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateObatRequest $request, Obat $obat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Obat $obat)
    {
        //
    }

    static public function getObat()
    {
      $response = Http::withHeaders([
        'Content-Type'=> 'application/json',
        'Authorization' => 'Bearer 9df38141-7c54-4dad-b69b-2157d83779bf|s0Mdc22XIeYBXza3nFhe6AddKB7pnqelMWQCc4Oic60a4240',
      ])->get('http://recruitment.rsdeltasurya.com/api/v1/medicines');

      $obats = $response->json();

      return $obats;

    }
}
