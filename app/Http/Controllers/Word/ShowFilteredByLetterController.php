<?php

declare(strict_types=1);
namespace App\Http\Controllers\Word;

class ShowFilteredByLetterController extends BaseController
{
    public function __invoke(string $letter)
    {
        $words = $this->service->getWordsByLetter($letter);
        return view('word.show_filtered_word_by_letter', compact('words'));
    }
}
