<?php
//строгий мод
namespace App\Http\Controllers\Word;

//пустая стрка, лишняя
use App\Http\Controllers\Controller;
use App\Services\Word\Service;
//пустая строка, лишняя

class BaseController extends Controller
{
    public Service $service;

    public function __construct(Service $service)
    {
        $this->service = new Service();
    }
}
