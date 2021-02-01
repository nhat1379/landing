<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Province;
use App\Models\Ward;

class District extends Model
{
    use HasFactory;
    protected $table = 'tbl_district';

    public function province() {
        return $this->belongsTo(Province::class, 'matp');
    }

    public function wards() {
        return $this->hasMany(Ward::class, 'maqh');
    }
}
