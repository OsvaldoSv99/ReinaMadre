<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
    protected $table="empleado";
    protected $primaryKey="id_empleado";
    protected $fillable=["nombre_empleado","ap_pat","ap_mat","telefono","celular","email",
    "genero","fecha_ingreso","id_empresa","fecha_nacimiento","id_departamento"];
    public $timestamps=false;
}
