<?php

declare(strict_types=1);
namespace App\Http\Controllers\Word;

use App\Models\Words;

class EditController extends BaseController
{
    public function __invoke(Words $word)
    {
        return view('word.edit', compact('word'));
    }
}
