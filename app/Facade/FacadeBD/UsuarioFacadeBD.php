<?php


namespace App\Facade\FacadeBD;


use App\User;

class UsuarioFacadeBD
{
    public function buscar($nome){
        $usuarios = User::where('name', 'like', "%$nome%")->get();

        return $usuarios;
    }
}