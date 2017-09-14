<?php

namespace App\Facade\FacadeBD;

use App\Reuniao;

class ReuniaoFacadeBD
{

    public function adicionar($data) {

        $reuniao = Reuniao::create($data);

        return $reuniao;
    }

    public function encontrar($id) {
        return Reuniao::find($id);
    }

    public function editar($id, $data) {
        $reuniao = $this->encontrar($id);

        $reuniao->update($data);

        return $reuniao;
    }
}