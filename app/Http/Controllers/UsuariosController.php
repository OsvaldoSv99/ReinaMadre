<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use DB;

class UsuariosController extends Controller
{

    public function index()
    {
        $user=User::all();
        return view("usuarios.consulta")
        ->with("user",$user);
    }

    public function create()
    {
        return view("usuarios.crear");
    }

    public function store(Request $request)
    {
        $id3=DB::Select('Select id from users ORDER BY id DESC LIMIT 1');
        $id2=$id3[0]->id;
        $id=$id2+1;

        $user=New User();
        $user->id=$id;
        $user->name=$request["name"];
        $user->ap_pat=$request["ap_pat"];
        $user->ap_mat=$request["ap_mat"];
        $user->email=$request["email"];
        $user->password=$request["password"];
        $user->Save();

        return redirect("usuarios");
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user=DB::SELECT("SELECT * from users where id=$id");
        return view("usuarios.editar")
        ->with("user",$user[0]);
    }

    public function update(Request $request, User $user)
    {
        $id=$request["id"];
        $user=User::find($id);
        $user->name=$request["name"];
        $user->ap_pat=$request["ap_pat"];
        $user->ap_mat=$request["ap_mat"];
        $user->email=$request["email"];
        $user->Save();

        return redirect("usuarios");
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect("usuarios");
    }
}
