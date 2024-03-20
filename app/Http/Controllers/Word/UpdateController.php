<?php

namespace App\Http\Controllers\Word;


use App\Http\Requests\Word\UpdateRequest;
use App\Models\Words;

class UpdateController extends BaseController
{
    //тоже самое
    public function __invoke(UpdateRequest $request, Words $word)
    {
        $data = $request->validated();
        $this->service->update($word, $data);
        return redirect()->route('word.show', $word);
    }

}
