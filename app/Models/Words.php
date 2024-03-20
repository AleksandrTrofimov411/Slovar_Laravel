<?php
//строгий мод
namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Words extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Filterable;
    //Тип данных
    protected $guarded = [];
}
