<?php
// app/Http/Requests/UpdateInspectionRequest.php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateInspectionRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules(): array
    {
        // On update we allow all same fields (nullable)
        return (new StoreInspectionRequest())->rules();
    }
}
