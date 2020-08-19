<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $fillable = ['name', 'date', 'vendedor', 'descricao', 'price'];
    protected $guarded = ['id', 'created_at', 'update_at'];
        
}
  