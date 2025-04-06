<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use App\Http\Requests\Providers\CategoryProvidersRequest;
use App\Models\CategoryProvider;

class CategoryProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CategoryProvider::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryProvidersRequest $request)
    {
        $data = $request->validated();
        CategoryProvider::create($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return CategoryProvider::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return CategoryProvider::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryProvidersRequest $request, string $id)
    {
        return CategoryProvider::findOrFail($id)->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return CategoryProvider::findOrFail($id)->delete();
    }
}
