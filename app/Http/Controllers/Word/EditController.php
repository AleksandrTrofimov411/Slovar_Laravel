<?php
//мод
namespace App\Http\Controllers\Word;
//лишняя строка

use App\Models\Words;

class EditController extends BaseController
{
    //лишняя стока
    public function __invoke(Words $word)
    {
        return view('word.edit', compact('word'));
    }
    //лишняя строка
}
