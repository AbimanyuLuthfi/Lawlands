<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ContentsController extends BaseController
{
    public function tentang_kami()
    {
        $data = [
            'title' => 'Tentang Kami | Lawlands'
        ];

        return view('pages/tentang-kami', $data);
    }
}
