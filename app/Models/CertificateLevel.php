<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CertificateLevel extends Model
{
    use HasFactory;

    public function certificate(){
        return $this->belongsTo(Certificate::class);
    }
    
}
