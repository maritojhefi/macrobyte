<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;
use App\Http\Requests\RolRequestCreate;

class RolController extends Controller
{
    public function index(){
        $roles=Rol::paginate(5);
        return view('roles.index',compact('roles'));
    }
    public function create(RolRequestCreate $request){
        Rol::create($request->validated());
        return back()->with('success','Rol  Registrado!');
    }

    public function delete(Rol $rol)
    {
        $rol->delete();
        return back()->with('info','El rol fue eliminado!');
    }
}
