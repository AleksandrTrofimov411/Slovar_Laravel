<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;
use function Laravel\Prompts\search;

class WordFilter extends AbstractFilter
{
    public const WORD = 'word';
    public const CONTEXT = 'context';
    public const TRANSLATE = 'translate';

    protected function getCallbacks(): array
    {
        return [
            self::WORD => [$this, 'word'],
            self::CONTEXT => [$this, 'context'],
            self::TRANSLATE => [$this, 'translate']
        ];
    }

    public function word(Builder $builder, $value): void
    {
        $builder->where('word', 'like', "%{$value}%");
    }

    public function context(Builder $builder, $value): void
    {
        $builder->where('context', 'like', "%{$value}%");
    }

    public function translate(Builder $builder, $value): void
    {
        $builder->where('translate', 'like', "%{$value}%");
    }
}
