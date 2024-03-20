<?php

declare(strict_types=1);
namespace App\Http\Controllers\Word;

use App\Http\Controllers\Controller;
use App\Models\Words;

class CreateController extends Controller
{
    public function __invoke(Words $word)
    {
        return view('word.create', compact('word'));
    }
}
