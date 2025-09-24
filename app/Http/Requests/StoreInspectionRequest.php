<?php
// app/Http/Requests/StoreInspectionRequest.php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInspectionRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'plateno'             => 'required|string|max:30',
            'vehicletype'         => 'nullable|string|max:4',
            'licencetype'         => 'nullable|string|max:2',
            'seriesno'            => 'nullable|string|max:30',
            'inspectdate'         => 'nullable|date_format:Y-m-d',
            'inspecttimes'        => 'nullable|integer',
            'inspecttype'         => 'nullable|string|max:2',
            'starttime'           => 'nullable|date_format:Y-m-d H:i:s',
            'endTime'             => 'nullable|date_format:Y-m-d H:i:s',
            'conclusion'          => 'nullable|string|max:200',
            'workerline'          => 'nullable|string|max:20',
            'register'            => 'nullable|string|max:50',
            'inspector'           => 'nullable|string|max:50',
            'appearanceinspector' => 'nullable|string|max:50',
            'pitinspector'        => 'nullable|string|max:50',
            'owner'               => 'nullable|string|max:200',
            'testresult'          => 'nullable|string|max:2',
            'dept_id'             => 'nullable|integer',
            'isupload'            => 'nullable|string|max:2',
        ];
    }
}
