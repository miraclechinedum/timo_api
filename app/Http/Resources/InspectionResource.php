<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InspectionResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id'                   => $this->id,
            'plate_no'             => $this->plateno,
            'vehicle_type'         => $this->vehicletype,

            'license_type'         => $this->mapLicenseType($this->licencetype),

            'series_no'            => $this->seriesno,
            'inspect_date'         => $this->inspectdate,
            'inspect_times'        => $this->inspecttimes,
            'inspect_type'         => $this->inspecttype,
            'start_time'           => $this->starttime,
            'end_time'             => $this->endTime,
            'conclusion'           => $this->conclusion,
            'worker_line'          => $this->workerline,
            'register'             => $this->register,
            'inspector'            => $this->inspector,
            'appearance_inspector' => $this->appearanceinspector,
            'pit_inspector'        => $this->pitinspector,
            'owner'                => $this->owner,

            'test_result'          => $this->mapTestResult($this->testresult),

            'department_id'        => $this->dept_id,
            'is_uploaded'          => $this->isupload,
            'created_at'           => optional($this->createDate)->toDateTimeString(),
            'updated_at'           => optional($this->updateDate)->toDateTimeString(),
        ];
    }

    private function mapLicenseType($value): string
    {
        return match (strtoupper($value)) {
            'P' => 'Private',
            'C' => 'Commercial',
            default => $value,
        };
    }

    private function mapTestResult($value): string
    {
        return match (strtoupper($value)) {
            'N' => 'Pass',
            'Y' => 'Fail',
            default => $value,
        };
    }
}
