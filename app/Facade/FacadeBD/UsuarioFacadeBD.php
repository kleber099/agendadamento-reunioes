<?php


namespace App\Facade\FacadeBD;


use App\User;

class UsuarioFacadeBD
{
    public function buscar($nome){

        $usuarios = User::where('name', 'ilike', "%$nome%")->get();

        return $usuarios;
    }

    public function encontrar($id) {
        return User::find($id);
    }
}