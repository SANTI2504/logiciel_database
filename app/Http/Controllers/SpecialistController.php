<?php

namespace App\Http\Controllers;

use App\Models\Eps;
use App\Models\Specialist;
use App\Models\Type_document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class SpecialistController extends Controller
{
    public function index(){
        $specialists = Specialist::orderBy('id', 'desc')->paginate(8);
        return view('app.user.type_users.specialist.index', compact('specialists'));
    }

    public function create(){
        $type_documents = Type_document::all();
        $roles_id = Role::all();
        $eps_id = Eps::all();
        return view('app.user.type_users.specialist.create', compact('type_documents', 'roles_id','eps_id'));
    }

    public function store(Request $request){
        //incriptar la contraseña eviada por usuario
        $request['password'] = Hash::make($request['password']);

        $specialist = Specialist::create($request -> all());

        return redirect('usuarios/especialistas');
    }
    public function edit($especialista){
        $specialist = Specialist::find($especialista);
        $type_documents = Type_document::all();
        $roles_id = Role::all();
        $eps_id = Eps::all();
        return view('app.user.type_users.specialist.edit', compact('specialist', 'type_documents', 'roles_id','eps_id'));
    }

    public function update(Request $request, $especialista){
        //incriptar la contraseña eviada por usuario
        $request['password'] = Hash::make($request['password']);

        $specialist = Specialist::find($especialista)->update($request->all());
        return redirect('usuarios/especialistas');
    }
    public function show($especialista){
        $specialist = Specialist::find($especialista);
        return view('app.user.type_users.specialist.show', compact('specialist'));
    }

    public function destroy($especialista){
        $specialist = Specialist::find($especialista)->delete();
        return redirect('usuarios/especialistas ');
    }
}
