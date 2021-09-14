<?php

namespace App\Http\Controllers;

use App\empresa;
use App\departamentos;
use Illuminate\Http\Request;
use DB;

class EmpresaController extends Controller
{

    public function index()
    {
        
        $empresa=Empresa::all();
        return view("empresa.consulta")
        ->with("empresa",$empresa);
    }

    public function create()
    {
        return view("empresa.crear");
    }

    public function store(Request $request)
    {
        $id_empresa3=DB::Select('Select id_empresa from empresa ORDER BY id_empresa DESC LIMIT 1');
      $id_empresa2=$id_empresa3[0]->id_empresa;
      $id_empresa=$id_empresa2+1;

      $empresa=New empresa();
      $empresa->id_empresa=$id_empresa;
      $empresa->nombre_empresa=$request["nombre_empresa"];
      $empresa->Save();
      return redirect("empresa");
    }

    public function show(empresa $empresa)
    {
        //
    }

    public function edit($id_empresa)
    {
       $empresa=DB::SELECT("SELECT * from empresa where id_empresa=$id_empresa");
       return view('empresa.editar')
       ->with('empresa',$empresa[0]);
    }

    public function update(Request $request, empresa $empresa)
    {
        $id_empresa=$request["id_empresa"];
        $empresa=Empresa::find($id_empresa);
        $empresa->nombre_empresa=$request["nombre_empresa"];
        $empresa->Save();
        return redirect("empresa");
    }

    public function destroy($id_empresa)
    {
        Empresa::find($id_empresa)->delete();
        return redirect('empresa');
    }

    public function departamentos($id_empresa)
    {
        $empresa=DB::SELECT("SELECT * from departamentos where id_empresa=$id_empresa");
        return view("departamentos")
        ->with("empresa",$empresa);
    }
}
