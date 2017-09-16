<?php

namespace App\Business;


use App\Facade\FacadeBD\UsuarioFacadeBD;

class UsuarioBusiness
{
    public function buscar($nome) {
        $usuarioFacadeBD = new UsuarioFacadeBD();

        return $usuarioFacadeBD->buscar($nome);
    }
}