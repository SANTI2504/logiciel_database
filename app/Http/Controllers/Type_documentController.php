<?php

namespace App\Http\Controllers;

use App\Models\Type_document;
use Illuminate\Http\Request;

class Type_documentController extends Controller
{
    public function index(){
        $type_documents = type_document::orderBy('id', 'desc')->paginate(8);
        return view('app.user.type_document.index', compact('type_documents'));
    }
    public function create(){
        return view('app.user.type_document.create');
    }

    public function store(Request $request){
        $type_document = Type_document::create($request -> all());
        return redirect('usuarios/tipo-documento');
    }

    public function destroy($id){
        // sql: DELETE FROM users WHERE id =?
        // consulta para eliminar todos los datos segun el parametro id
        $type_document = Type_document::find($id)->delete();

        return redirect('usuarios/tipo-documento');

    }

    public function edit($id){
        $type_document=Type_document::find($id);

        return view('app.user.type_document.edit', compact('type_document'));
    }

    public function update(Request $request, $id){
        $type_document=Type_document::find($id)->update($request->all());

        return redirect('usuarios/tipo-documento');

    }
}
