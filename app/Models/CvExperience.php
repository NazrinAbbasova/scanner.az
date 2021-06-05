<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CvExperience extends Model
{
    use HasFactory;

    public function cv(){
        return $this->belongsTo(Cv::class);
    }

    protected $fillable = [
        'cv_id',
        'company',
        'function',
        'position',
        'field',
        'employment_date',
        'unemployment_date',
        'obligations',
    ];
}
