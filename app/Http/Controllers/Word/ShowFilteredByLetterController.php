<?php
//мод
namespace App\Http\Controllers\Word;

class ShowFilteredByLetterController extends BaseController
{
    //строка
    public function __invoke(string $letter)
    {
        $words = $this->service->getWordsByLetter($letter); //пустая строка перед ретурн
        return view('word.show_filtered_word_by_letter', compact('words'));
    }
    //строка
}
