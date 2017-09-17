<?php

namespace App\Facade\FacadeBD;

use App\Reuniao;

class ReuniaoFacadeBD
{

    public function adicionar($data) {

        $reuniao = Reuniao::create($data);

        if(isset($data["users"]) ) {
            foreach ($data["users"] as $user) {
                $reuniao->users()->attach($user["id"]);
            }
            $reuniao->save();
        }

        $reuniao->users;

        return $reuniao;
    }

    public function encontrar($id) {
        $reuniao = Reuniao::find($id);
        $reuniao->users;

        return $reuniao;
    }

    public function editar($id, $data) {
        $reuniao = $this->encontrar($id);

        $reuniao->update($data);

        if(isset($data["users"]) ) {

            foreach ($data["users"] as $user) {
                $usuarioEncontrado = $this->encontrarUsuarioReuniao($reuniao, $user['id']);

                if ($usuarioEncontrado == null) {

                    $reuniao->users()->attach($user['id']);
                }
            }
            $reuniao->save();
        }

        return $reuniao = $this->encontrar($id);;
    }

    public function eventos() {
        $reuniao = new Reuniao();

        return $reuniao->eventos();
    }

    private function encontrarUsuarioReuniao(Reuniao $reuniao, $idUsuario){
        return $reuniao->users->find($idUsuario);
    }


}