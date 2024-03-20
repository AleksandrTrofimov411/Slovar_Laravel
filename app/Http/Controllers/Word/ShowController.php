<?php
//мод
namespace App\Http\Controllers\Word;

use App\Models\Words;

class ShowController extends BaseController
{
    //лишняя строка
    public function __invoke(Words $word)
    {
        return view('word.show_word', compact('word'));
    }
    //лишняя строка
}
