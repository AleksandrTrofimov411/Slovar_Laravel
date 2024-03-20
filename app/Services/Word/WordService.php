<?php

declare(strict_types=1);
namespace App\Services\Word;

use App\Models\Words;

class WordService
{
    private const CATEGORY_ID_LETTERS = [
        'a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5, 'f' => 6, 'g' => 7, 'h' => 8, 'i' => 9, 'j' => 10, 'k' => 11, 'l' => 12, 'm' => 13, 'n' => 14, 'o' => 15, 'p' => 16, 'q' => 17, 'r' => 18, 's' => 19, 't' => 20, 'u' => 21, 'v' => 22, 'w' => 23, 'x' => 24, 'y' => 25, 'z' => 26

    ];

    public function store(array $data): void
    {
        $data['category_id'] = self::getCategoryIdByWord($data['word']);
        Words::create($data);
    }

    public function update(Words $word, array $data): void
    {
        $data['category_id'] = self::getCategoryIdByWord($data['word']);
        $word->update($data);
    }

    public function getWordsByLetter(string $letter)
    {
        $categoryId = self::getCategoryIdByWord($letter);

        return Words::where('category_id', $categoryId)->paginate(15);
    }

    static public function getCategoryIdByWord(string $word): int
    {
        return self::CATEGORY_ID_LETTERS[mb_strtolower($word[0])];
    }

    static public function getLetterByCategoryId(int $id): string
    {
        return array_flip(self::CATEGORY_ID_LETTERS[$id]);
    }
}
