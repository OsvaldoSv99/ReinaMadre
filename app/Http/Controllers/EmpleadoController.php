<?php

namespace App\Http\Controllers;

use App\empleado;
use App\departamentos;
use App\empresa;
use Illuminate\Http\Request;
use DB;

class EmpleadoController extends Controller
{
   
    public function index()
    {
        $empleado=DB::SELECT("SELECT id_empleado, nombre_empleado, ap_pat, ap_mat, telefono, fecha_nacimiento, celular, email, genero, 
        fecha_ingreso, nombre_empresa, id_departamento
        FROM empleado,empresa
        WHERE empleado.id_empresa=empresa.id_empresa");
        return view("empleado.consulta")
        
        ->WITH("empleado",$empleado);
    }

    public function create()
    {
        $empresa=Empresa::All();
        $departamentos=Departamentos::all();
        return view("empleado.crear")
        ->with("empresa",$empresa)
        ->with("departamentos",$departamentos);
    }

    public function store(Request $request)
    {
      $id_empleado3=DB::Select('Select id_empleado from empleado ORDER BY id_empleado DESC LIMIT 1');
      $id_empleado2=$id_empleado3[0]->id_empleado;
      $id_empleado=$id_empleado2+1;

      $empleado=New Empleado();
      $empleado->id_empleado=$id_empleado;
      $empleado->nombre_empleado=$request["nombre_empleado"];
      $empleado->ap_pat=$request["ap_pat"];
      $empleado->ap_mat=$request["ap_mat"];
      $empleado->telefono=$request["telefono"];
      $empleado->celular=$request["celular"];
      $empleado->email=$request["email"];
      $empleado->genero=$request["genero"];
      $empleado->fecha_ingreso=$request["fecha_ingreso"];
      $empleado->fecha_nacimiento=$request["fecha_nacimiento"];
      $empleado->id_empresa=$request["id_empresa"];
      $empleado->id_departamento=$request["id_departamento"];
      $empleado->Save();

      return redirect("empleado");
    }

    public function show(empleado $empleado)
    {
        //
    }

    public function edit($id_empleado)
    {
        $empresa=Empresa::all();
        $departamentos=Departamentos::all();
        $empleado=DB::Select("SELECT * from empleado where id_empleado=$id_empleado");
        return view ("empleado.editar")
        ->with("empresa",$empresa)
        ->with("departamentos",$departamentos)
        ->with("empleado",$empleado[0]);

    }

    public function update(Request $request, empleado $empleado)
    {
        $id_empleado=$request["id_empleado"];
        $empleado=Empleado::find($id_empleado);
        $empleado->nombre_empleado=$request["nombre_empleado"];
      $empleado->ap_pat=$request["ap_pat"];
      $empleado->ap_mat=$request["ap_mat"];
      $empleado->telefono=$request["telefono"];
      $empleado->celular=$request["celular"];
      $empleado->email=$request["email"];
      $empleado->genero=$request["genero"];
      $empleado->fecha_ingreso=$request["fecha_ingreso"];
      $empleado->fecha_nacimiento=$request["fecha_nacimiento"];
      $empleado->id_empresa=$request["id_empresa"];
      $empleado->id_departamento=$request["id_departamento"];
      $empleado->Save();

      return redirect("empleado");
    }

    public function destroy($id_empleado)
    {
        Empleado::find($id_empleado)->delete();
        return redirect("empleado");
    }
}
