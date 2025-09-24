<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inspection extends Model
{
    protected $table = 'i_data_base';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;

    protected $fillable = [
        'plateno',
        'vehicletype',
        'licencetype',
        'seriesno',
        'inspectdate',
        'inspecttimes',
        'inspecttype',
        'starttime',
        'endTime',
        'conclusion',
        'workerline',
        'register',
        'inspector',
        'appearanceinspector',
        'pitinspector',
        'owner',
        'testresult',
        'dept_id',
        'isupload'
    ];

    protected $casts = [
        'createDate' => 'datetime',
        'updateDate' => 'datetime',
    ];

    // public function getRouteKeyName(): string
    // {
    //     return 'plateno';
    // }
}
