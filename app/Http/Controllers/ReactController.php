<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class ReactController extends BaseController
{
    public function show () {
        return view('welcome');
    }
}
