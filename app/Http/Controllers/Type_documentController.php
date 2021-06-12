<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Type_documentController extends Controller
{
    public function index(){
        return view('app.user.type_document.index');
    }
    public function create(){
        return view('app.user.type_document.create');
    }
}
