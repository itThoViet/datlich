<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkerInfomation extends Model
{
    use HasFactory;
    protected $fillable =[
        'slug',
        'name_worker',
        'img_worker',
        'code_worker',
        'year_worker',
        'description_worker',
        'flag',
    ];
}
