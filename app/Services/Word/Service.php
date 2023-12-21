<?php

namespace App\Services\Word;

use App\Models\Words;

class Service
{
    public function store($data): void
    {
        $data['category_id'] = $this->getCategoryId($data['word']);
        Words::create($data);

    }

    public function update($word, $data): void
    {
        $data['category_id'] = $this->getCategoryId($data['word']);
        $word->update($data);
    }

    public function getWordsByLetter($letter)
    {
        $categoryId = self::getCategoryId($letter);
        return Words::where('category_id', $categoryId)->paginate(15);
    }

    static public function getCategoryId(string|int $value): string|int
    {
        $categoryIdLetters = [
            'a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5, 'f' => 6, 'g' => 7, 'h' => 8, 'i' => 9, 'j' => 10, 'k' => 11, 'l' => 12, 'm' => 13, 'n' => 14, 'o' => 15, 'p' => 16, 'q' => 17, 'r' => 18, 's' => 19, 't' => 20, 'u' => 21, 'v' => 22, 'w' => 23, 'x' => 24, 'y' => 25, 'z' => 26
        ];
        if (is_string($value)) {
            return $categoryIdLetters[mb_strtolower($value[0])];
        } else {
            return array_search($value, $categoryIdLetters);
        }
    }

}
