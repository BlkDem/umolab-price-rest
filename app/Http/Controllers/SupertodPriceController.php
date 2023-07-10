<?php

namespace App\Http\Controllers;

use App\Models\SupertodPrice;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;

class SupertodPriceController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function priceByName($modelName)
    {
        $price = SupertodPrice::where('model', '=', $modelName)->get();
        return $this->sendResponse($price, "Device Price", []);

    }

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
    public function create()
    {
        //
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
    public function show(SupertodPrice $supertodPrice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SupertodPrice $supertodPrice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SupertodPrice $supertodPrice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SupertodPrice $supertodPrice)
    {
        //
    }
}
