<?php

namespace App\Facade\FacadeBD;

use App\Reuniao;

class ReuniaoFacadeBD
{

    public function adicionar($data) {

        $reuniao = Reuniao::create($data);

        return $reuniao;
    }
}