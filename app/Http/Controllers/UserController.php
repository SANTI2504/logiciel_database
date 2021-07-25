<?php

namespace App\Http\Controllers;

use App\Models\Type_document;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users = User::orderBy('id', 'desc')->paginate(8);
        return view('app.user.index', compact('users'));
    }

    public function create(){
        $type_documents = Type_document::all();
        $roles_id = Role::all();
        return view('app.user.create', compact('type_documents', 'roles_id'));
    }

    public function store(Request $request){
        $user = User::create($request -> all());

        $user->assignRole($request['roles_id']);
        return redirect('usuarios');

    }
}
