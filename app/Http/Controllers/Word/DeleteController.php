<?php
//мод
namespace App\Http\Controllers\Word;

use App\Http\Controllers\Controller;
use App\Models\Words;

class DeleteController extends Controller
{
    //лишняя строка
    public function __invoke(Words $word)
    {
        $word->delete();
        return redirect()->route('word.index');
    }
    //лишняя строка
}
