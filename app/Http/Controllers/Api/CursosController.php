<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\CursosRequest;
use App\Http\Resources\CursosResource;
use App\Models\Cursos;

class CursosController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Cursos::class);

        return CursosResource::collection(Cursos::all());
    }

    public function store(CursosRequest $request)
    {
        $this->authorize('create', Cursos::class);

        return new CursosResource(Cursos::create($request->validated()));
    }

    public function show(Cursos $cursos)
    {
        $this->authorize('view', $cursos);

        return new CursosResource($cursos);
    }

    public function update(CursosRequest $request, Cursos $cursos)
    {
        $this->authorize('update', $cursos);

        $cursos->update($request->validated());

        return new CursosResource($cursos);
    }

    public function destroy(Cursos $cursos)
    {
        $this->authorize('delete', $cursos);

        $cursos->delete();

        return response()->json();
    }
}
