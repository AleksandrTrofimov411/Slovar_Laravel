<?php

declare(strict_types=1);
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected static int $maximum_categories = 26;

    public function words()
    {
        return $this->hasMany(Words::class, 'category_id', 'id');
    }

    public static function maxCategories(): int
    {
        return self::$maximum_categories;
    }
}
