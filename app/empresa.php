<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empresa extends Model
{
    protected $table="empresa";
    protected $primaryKey="id_empresa";
    protected $fillable=["nombre_empresa"];
    public $timestamps=false;
}
