<?php

namespace App\Business;

use App\Facade\FacadeBD\ReuniaoFacadeBD;

class ReuniaoBusiness
{

    public function adicionar($data) {
        $reuniaoFacadeBD = new ReuniaoFacadeBD();
        $reuniaoFacadeBD->adicionar($data);
    }
}