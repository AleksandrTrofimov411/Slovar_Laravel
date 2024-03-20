<?php
///строгий мод
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //тип данных
    protected $guarded = [];
    protected static int $maximum_categories = 26;

    //тип данных, глагол
    public function words()
    {
        return $this->hasMany(Words::class, 'category_id', 'id');
    }

    //ГЛАГОЛ
    public static function maxCategories(): int
    {
        return self::$maximum_categories;
    }
}
