<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VacancyComputerSkill extends Model
{
    use HasFactory;

    public function computer_skill(){
        return $this->belongsTo(ComputerSkill::class);
    }

    protected $fillable = ['vacancy_id', 'computer_skill_id', 'level'];
}
