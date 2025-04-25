<?php
namespace App\Models;

class UserModel extends \CodeIgniter\Model
{
    public $table = 'abonne ';
    public $primaryKey = 'matricule_abonne';
    public $allowedFields = ['matricule_abonne','CSP_abonne'];
    public $returnType = 'array';
}
?>