<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PawnsController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('pawns.create', [
            'default_police_department' => config('onedoc.default_police_department'),
            'police_departments' => config('onedoc.police_departments'),
            'default_province' => config('onedoc.default_province'),
            'provinces' => config('onedoc.provinces'),
            'default_management_fee_rate' => config('onedoc.default_pawn_management_fee_rate'),
            'management_fee_rates' => config('onedoc.pawn_management_fee_rates'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
