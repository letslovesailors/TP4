<?php
use App\Controllers\BaseController;

class LoginController extends BaseController{
    public function indexe(): string
    {
        return view('login');
    }
}
?>

