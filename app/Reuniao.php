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
}
