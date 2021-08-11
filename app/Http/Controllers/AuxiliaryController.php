<?php

namespace App\Http\Controllers;

use App\Models\Eps;
use App\Models\Auxiliary;
use App\Models\Type_document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AuxiliaryController extends Controller
{
    public function index(){
        $auxiliaries = Auxiliary::orderBy('id', 'desc')->paginate(8);
        return view('app.user.type_users.auxiliary.index', compact('auxiliaries'));
    }

    public function create(){
        $type_documents = Type_document::all();
        $roles_id = Role::all();
        $eps_id = Eps::all();
        return view('app.user.type_users.auxiliary.create', compact('type_documents', 'roles_id','eps_id'));
    }

    public function store(Request $request){
        //incriptar la contraseña eviada por usuario
        $request['password'] = Hash::make($request['password']);

        $auxiliary = Auxiliary::create($request -> all());

        return redirect('usuarios/auxiliares');
    }
    public function edit($auxiliare){
        $auxiliary = Auxiliary::find($auxiliare);
        $type_documents = Type_document::all();
        $roles_id = Role::all();
        $eps_id = Eps::all();
        return view('app.user.type_users.auxiliary.edit', compact('auxiliary', 'type_documents', 'roles_id','eps_id'));
    }

    public function update(Request $request, $auxiliare){
        //incriptar la contraseña eviada por usuario
        $request['password'] = Hash::make($request['password']);

        $auxiliary = Auxiliary::find($auxiliare)->update($request->all());
        return redirect('usuarios/auxiliares');
    }
    public function show($auxiliare){
        $auxiliary = Auxiliary::find($auxiliare);
        return view('app.user.type_users.auxiliary.show', compact('auxiliary'));
    }

    public function destroy($auxiliare){
        $auxiliary = Auxiliary::find($auxiliare)->delete();
        return redirect('usuarios/auxiliares ');
    }
}
