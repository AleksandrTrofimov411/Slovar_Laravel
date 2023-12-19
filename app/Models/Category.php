<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function words()
    {
        return $this->hasMany(Words::class, 'category_id', 'id');
    }
}
