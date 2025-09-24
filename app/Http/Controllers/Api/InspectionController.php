<?php
// app/Http/Controllers/Api/InspectionController.php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Inspection;
use App\Http\Resources\InspectionResource;
use App\Http\Requests\StoreInspectionRequest;
use App\Http\Requests\UpdateInspectionRequest;
use Illuminate\Http\Response;

class InspectionController extends Controller
{
    public function index()
    {
        $list = Inspection::orderBy('createDate', 'desc')->paginate(15);
        return InspectionResource::collection($list);
    }

    public function store(StoreInspectionRequest $request)
    {
        $ins = Inspection::create($request->validated());
        return new InspectionResource($ins);
    }

    public function show(Inspection $inspection)
    {
        return new InspectionResource($inspection);
    }

    public function update(UpdateInspectionRequest $request, Inspection $inspection)
    {
        $inspection->update($request->validated());
        return new InspectionResource($inspection);
    }

    public function destroy(Inspection $inspection)
    {
        $inspection->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
