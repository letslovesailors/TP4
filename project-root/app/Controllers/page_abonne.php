<?php

namespace App\Controllers;

class page_abonne extends BaseController
{
    public function index(): string
    {
        return view('abonne');
    }
}
