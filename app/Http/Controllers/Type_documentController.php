<?php

namespace App\Http\Controllers;

use App\Models\Type_document;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class Type_documentController extends Controller
{
    public function index(){
        $type_documents = type_document::all();
        return view('app.user.type_document.index', compact('type_documents'));
    }
    public function create(){
        return view('app.user.type_document.create');
    }

    public function store(Request $request){
        //validaciones
        $campos = [
            'name' => ['required','string','max:45',Rule::unique('type_documents')],
        ];
        $mensaje = [
            // aca puede generar mensajes unicos
        ];
        $this->validate($request, $campos, $mensaje);

        //sentencia
        $type_document = Type_document::create($request -> all());
        return redirect('usuarios/tipo-documento')->with('crear', 'ok');
    }

    public function destroy($tipo_documento){
        // sql: DELETE FROM users WHERE id =?
        // consulta para eliminar todos los datos segun el parametro id
        $type_document = Type_document::find($tipo_documento)->delete();

        return redirect('usuarios/tipo-documento')->with('eliminar', 'ok');

    }

    public function edit($tipo_documento){
        $type_document=Type_document::find($tipo_documento);

        return view('app.user.type_document.edit', compact('type_document'));
    }

    public function update(Request $request, $tipo_documento){
        //validaciones
        $campos = [
            'name' => ['required','string','max:45',Rule::unique('type_document')->ignore($tipo_documento)],
        ];
        $mensaje = [
            // aca puede generar mensajes unicos
        ];
        $this->validate($request, $campos, $mensaje);

        //sentencia
        $type_document=Type_document::find($tipo_documento)->update($request->all());
        return redirect('usuarios/tipo-documento')->with('actualizar', 'ok');

    }
}
