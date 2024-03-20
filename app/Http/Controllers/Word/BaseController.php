<?php

declare(strict_types=1);
namespace App\Http\Controllers\Word;

use App\Http\Controllers\Controller;
use App\Services\Word\WordService;

class BaseController extends Controller
{
    public WordService $service;

    public function __construct(WordService $service)
    {
        $this->service = $service;
    }
}
