<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    use HasFactory;

    public function educations(){
        return $this->hasMany(CvEducation::class);
    }

    public function experiences(){
        return $this->hasMany(CvExperience::class);
    }

    public function languages(){
        return $this->hasMany(CvLanguage::class);
    }

    public function computer_skills(){
        return $this->hasMany(CvComputerSkill::class);
    }
    
    public function certificates(){
        return $this->hasMany(CvCertificate::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
