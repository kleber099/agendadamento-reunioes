<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reuniao extends Model
{
    protected $table = 'reunioes';

    protected $fillable = ['titulo', 'local', 'inicio', 'fim'];

    public function users() {
        return $this->belongsToMany('App\User');
    }

    public function eventos() {
        $reunioes = $this->all();
        $eventos = $this->tratarEventos($reunioes);

        return $eventos;
    }

    private function tratarEventos($reunioes) {
        foreach ($reunioes as $reuniao) {
            $reuniao['title'] = $reuniao['titulo'];
            $reuniao['start'] = $reuniao['inicio'];
            $reuniao['end'] = $reuniao['fim'];
            $reuniao['url'] = "/reunioes/{$reuniao['id']}/edit";

            unset($reuniao['titulo']);
            unset($reuniao['inicio']);
            unset($reuniao['fim']);
        }

        return $reunioes;
    }


}
