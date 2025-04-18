<?php

namespace App\Controllers;

class page_admin extends BaseController
{
    public function index(): string
    {
        return view('admin');
    }
}
