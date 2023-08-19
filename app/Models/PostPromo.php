<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostPromo extends Model
{
    use HasFactory;

    protected $table = 'postpromos';

    protected $fillable = [
        'title',
        'images',
        'description',
        'start_date', // Pastikan kolom start_date dimasukkan ke sini
        'updated_at',
        'created_at',
        'slug'
    ];
}
