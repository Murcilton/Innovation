<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use App\Http\Requests\Providers\ProvidersRequest;
use App\Models\Provider;

class ProviderController extends Controller
{
    public function index()
{
    return Provider::all();
}

public function store(ProvidersRequest $request)
{
    Provider::create($request->validated());
}

public function show(Provider $provider)
{
    return $provider;
}

public function update(ProvidersRequest $request, Provider $provider)
{
    $provider->update($request->validated());
}

public function destroy(Provider $provider)
{
    $provider->delete();
}
}
