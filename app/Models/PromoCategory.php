<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromoCategory extends Model
{
    use HasFactory;
    protected $table = 'promo_categories';
    protected $fillable = ['id', 'name'];

    public function post()
    {
        return $this->belongsTo(promo_categories::class, 'id', 'name');
    }
}
