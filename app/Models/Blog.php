<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';
    protected $fillable = ['title', 'thumb', 'desc', 'content', 'tags', 'created_by'];
    public $timestamps = true;

    public function author() {
        return $this->belongsTo(User::class, 'created_by');
    }
}
