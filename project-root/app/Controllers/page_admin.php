<?php

namespace App\Controllers;

class page_admin extends BaseController
{
    private function index(): string
    {
        return view('admin');
    }
}
