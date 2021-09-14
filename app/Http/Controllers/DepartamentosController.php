<?php

namespace App\Http\Controllers;

use App\departamentos;
use App\empresa;
use Illuminate\Http\Request;
use DB;

class DepartamentosController extends Controller
{

    public function index()
    {
        $departamentos=DB::SELECT("SELECT d.id_departamento, d.nombre_departamento,d.id_empresa, emp.nombre_empresa
        FROM departamentos AS d
        INNER JOIN empresa AS emp ON d.id_empresa=emp.id_empresa");
        return view("departamentos.consulta")
        ->with("departamentos",$departamentos);
    }

    public function create()
    {
        $departamentos=Departamentos::all();
        $empresa=Empresa::all();
        return view ('departamentos.crear')
        ->with("departamentos",$departamentos)
        ->with("empresa",$empresa);

    }

    public function store(Request $request)
    {
        $id_departamento3=DB::Select('Select id_departamento from departamentos ORDER BY id_departamento DESC LIMIT 1');
      $id_departamento2=$id_departamento3[0]->id_departamento;
      $id_departamento=$id_departamento2+1;

      $departamentos=New Departamentos;
      $departamentos->id_departamento=$id_departamento;
      $departamentos->nombre_departamento=$request["nombre_departamento"];
      $departamentos->id_empresa=$request["id_empresa"];
      $departamentos->Save();

      return redirect("departamentos");
    }

    public function show(departamentos $departamentos)
    {
        //
    }

    public function edit($id_departamento)
    {
        $empresa=Empresa::all();
        $departamentos=DB::SELECT("Select * from departamentos where id_departamento=$id_departamento");
        return view("departamentos.editar")
        ->with("departamentos",$departamentos[0])
        ->with("empresa",$empresa);
    }

    public function update(Request $request, departamentos $departamentos)
    {
        $id_departamento=$request["id_departamento"];
        $departamentos=Departamentos::find($id_departamento);
        $departamentos->nombre_departamento=$request["nombre_departamento"];
        $departamentos->id_empresa=$request["id_empresa"];
        $departamentos->Save();

        return redirect("departamentos");
    }

    public function destroy($id_departamento)
    {
        Departamentos::find($id_departamento)->delete();
        return redirect('departamentos');
    }
}
