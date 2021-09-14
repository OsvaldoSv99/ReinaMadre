<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class departamentos extends Model
{
    protected $table="departamentos";
    protected $primaryKey="id_departamento";
    protected $fillable=["nombre_departamento","id_empresa"];
    public $timestamps=false;
}
