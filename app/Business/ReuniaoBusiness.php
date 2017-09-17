<?php

namespace App\Business;

use App\Facade\FacadeBD\ReuniaoFacadeBD;

class ReuniaoBusiness
{

    public function adicionar($data) {
        $reuniaoFacadeBD = new ReuniaoFacadeBD();

        $reuniao = $reuniaoFacadeBD->adicionar($data);

        return $reuniao;
    }

    public function encontrar($id) {
        $reuniaoFacadeBD = new ReuniaoFacadeBD();

        return $reuniaoFacadeBD->encontrar($id);
    }

    public function editar($id, $data) {
        $reuniaoFacadeBD = new ReuniaoFacadeBD();

        $reuniao = $reuniaoFacadeBD->editar($id, $data);

        return $reuniao;
    }

    public function eventos() {
        $reuniaoFacadeBD = new ReuniaoFacadeBD();

        $eventos = $reuniaoFacadeBD->eventos();

        return $eventos;
    }
}