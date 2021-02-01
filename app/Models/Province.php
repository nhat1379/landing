<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\District;

class Province extends Model
{
    use HasFactory;
    protected $table = 'tbl_province';


    public function districts() {
        return $this->hasMany(Districy::class, 'matp');
    }
}
