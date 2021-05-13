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

    public function compute_knowledges(){
        return $this->hasMany(VacancyComputerKnowledge::class);
    }
}
