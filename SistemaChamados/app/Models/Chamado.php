<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chamado extends Model
{
    public function usuario()
{
    return $this->belongsTo(Usuario::class);
}

public function subcategoria()
{
    return $this->belongsTo(Subcategoria::class);
}

public function tecnico()
{
    return $this->belongsTo(Usuario::class, 'tecnico_id');
}

public function acoes()
{
    return $this->hasMany(AcaoChamado::class);
}

}
