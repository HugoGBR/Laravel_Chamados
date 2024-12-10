<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use Notifiable;

    // Define a tabela usada pelo model
    protected $table = 'usuarios';

    // Permite atribuição em massa para estas colunas
    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'tipo',
        'senha',
    ];

    // Esconde esses atributos na serialização
    protected $hidden = [
        'senha', // Senha não deve ser exibida
        'remember_token', // Token de "lembrar de mim"
    ];

    /**
     * Mutator para criptografar a senha ao definir.
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['senha'] = bcrypt($value);
    }

    /**
     * Relacionamento com chamados.
     * Um usuário pode ter muitos chamados.
     */
    public function chamados()
    {
        return $this->hasMany(Chamado::class, 'usuario_id');
    }

    /**
     * Relacionamento com ações de chamados.
     * Um usuário pode realizar muitas ações em chamados.
     */
    public function acoes()
    {
        return $this->hasMany(AcaoChamado::class, 'usuario_id');
    }
}
