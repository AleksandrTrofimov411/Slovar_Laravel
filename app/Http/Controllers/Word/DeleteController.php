<?php

declare(strict_types=1);
namespace App\Http\Controllers\Word;

use App\Http\Controllers\Controller;
use App\Models\Words;

class DeleteController extends Controller
{
    public function __invoke(Words $word)
    {
        $word->delete();
        return redirect()->route('word.index');
    }
}
