<?php

namespace App\Facade\FacadeBD;

use App\Reuniao;

class ReuniaoFacadeBD
{

    public function adicionar($data) {

        Reuniao::create($data);
    }
}