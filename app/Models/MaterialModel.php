<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaterialModel extends Model
{
    protected $table = "material";
    protected $fillable = ['nome', 'descricao', 'autor', 'tipo', 'foto', 'extensao', 'fonte'];
}
