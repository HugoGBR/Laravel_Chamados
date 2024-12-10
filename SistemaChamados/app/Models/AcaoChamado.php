<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AcaoChamado extends Model
{
    public function chamado()
{
    return $this->belongsTo(Chamado::class);
}

public function usuario()
{
    return $this->belongsTo(Usuario::class);
}

}
