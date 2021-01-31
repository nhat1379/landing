<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table = 'teams';
    protected $fillable = ['name', 'avatar', 'department', 'position', 'experience', 'email', 'phone', 'twitter', 'facebook', 'youtube', 'instagram', 'status'];
    public $timestamps = true;
}
