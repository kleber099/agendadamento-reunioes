<?php

namespace App\Http\Controllers;

use App\Business\UsuarioBusiness;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->usuarioBusiness = new  UsuarioBusiness();
    }

    public function buscar($nome) {
        $usuarios = $this->usuarioBusiness->buscar($nome);

        return $usuarios;
    }
}
