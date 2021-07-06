<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UsuarioRequestCreate;

class UsuarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $usuarios=User::paginate(5);
        return view('usuarios.index',compact('usuarios'));
 
    }
    public function create(UsuarioRequestCreate $request){
        User::create($request->validated());
        return back()->with('success','Usuario  Registrado!');
    }

    public function delete(User $usuario)
    {
        $usuario->delete();
        return back()->with('info','El usuario fue eliminado!');
    }
}
