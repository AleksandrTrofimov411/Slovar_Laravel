<?php
//мод
namespace App\Http\Controllers\Word;

use App\Http\Controllers\Controller;
use App\Models\Words;

class CreateController extends Controller
{
    //лишняя строка
    public function __invoke(Words $word)
    {
        return view('word.create', compact('word'));
    }
    //лишняя строка
}
