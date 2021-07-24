<?php

namespace App\Http\Controllers;

use App\Models\Type_document;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class SignupController extends Controller
{
    public function create(){
        $type_documents = Type_document::all();
        $roles = Role::all();

        return view('app.login.signup', compact('type_documents','roles'));

    }
}
