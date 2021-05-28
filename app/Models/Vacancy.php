<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;

    public function languages(){
        return $this->hasMany(VacancyLanguage::class);
    }

    public function certificates(){
        return $this->hasMany(VacancyCertificate::class);
    }

    public function computer_skills(){
        return $this->hasMany(VacancyComputerSkill::class);
    }

    public function company(){
        return $this->belongsTo(User::class)->where('type', 'company');
    }
}
