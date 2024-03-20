<?php

declare(strict_types=1);
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
    protected $guarded = [];
}
