<?php
namespace App\Controllers;
use CodeIgniter\Controller;
class Login extends BaseController{
    public function index(): string
    {
        return view('login');
    }
    public function attemptLogin()
    {
        $userModel = new \App\Models\userModel();
        $userFetched = $userModel ->where('matricule_abonne', $this->reques->getPost('login'))->first();
        if ($userFetched && $this->request->getPost('password') === $userFetched['nom_abonne']) {
            return "Login OK";
        }
        else {
            return "Login KO";
    }
    }    
}
?>

