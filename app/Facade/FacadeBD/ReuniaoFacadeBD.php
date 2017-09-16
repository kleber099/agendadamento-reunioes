<?php

namespace App\Facade\FacadeBD;

use App\Reuniao;

class ReuniaoFacadeBD
{

    public function adicionar($data) {

        $reuniao = Reuniao::create($data);

        foreach($data["users"] as $user) {
            $reuniao->users()->attach($user["id"]);
        }
        $reuniao->save();

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

        return $reuniao;
    }

    public function eventos() {
        $reuniao = new Reuniao();

        return $reuniao->eventos();
    }
}