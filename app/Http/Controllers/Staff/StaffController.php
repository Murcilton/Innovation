<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Http\Requests\Staff\StaffRequest;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Staff::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(StaffRequest $request)
    {
        $data = $request->validated();
        return Staff::create($data);
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
        return Staff::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return Staff::find('id');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       return Staff::where('id', $id)->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Staff::where('id', $id)->delete();
    }
}
