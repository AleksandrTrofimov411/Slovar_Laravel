<?php

namespace App\Http\Controllers\Word;

use App\Http\Requests\Word\StoreRequest;

class StoreController extends BaseController
{
    //тут тоже самое все
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);
        return redirect()->route('word.index');
    }

}
