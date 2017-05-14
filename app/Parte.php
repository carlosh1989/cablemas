<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parte extends Model
{
    protected $table = 'partes';
    protected $fillable = [
        'user_id','marca_id', 'categoria_id','nombre','descripcion','imagen','categoria','marca','modelo','ano','codigo','cantidad','stock'];

}