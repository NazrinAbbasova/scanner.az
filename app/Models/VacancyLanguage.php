<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VacancyLanguage extends Model
{
    use HasFactory;

    public function language(){
        return $this->belongsTo(Language::class);
    }

    protected $fillable = ['vacancy_id', 'language_id', 'level'];
}
