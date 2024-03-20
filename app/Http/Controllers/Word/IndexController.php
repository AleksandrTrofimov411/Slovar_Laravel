<?php
//мод
namespace App\Http\Controllers\Word;

use App\Http\Filters\WordFilter;
use App\Http\Requests\Word\FilterRequest;
use App\Models\Words;

class IndexController extends BaseController
{
    //строка лишняя
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();
        $filter = app()->make(WordFilter::class, ['queryParams' => array_filter($data)]);
        $words = Words::orderBy('word')->filter($filter)->paginate(15); //пробел перед ретурн
        return view('word.index', compact('words'));
    }
    //лишняя строка
}
