<?php

namespace App\Http\Controllers;

use App\Models\Lab_manufacturer;
use Illuminate\Http\Request;

class Lab_manufacturerController extends Controller
{
    public function index(){
        $lab_manufacturers= lab_manufacturer::all();
        return view('app.inventory.lab_manufacturer.index', compact('lab_manufacturers'));
    }

    public function create(){

        return view('app.inventory.lab_manufacturer.create');
    }

    public function store(Request $request){
        //validaciones
        $campos = [
            'name' => 'required|string|max:45',
        ];
        $mensaje = [
            // aca puede generar mensajes unicos
        ];
        $this->validate($request, $campos, $mensaje);

        //sentencia
        $lab_manufacturer = lab_manufacturer::create($request -> all());
        return redirect('fabricantes')->with('crear', 'ok');
    }

    public function edit($lab_manufacturer){

        $lab_manufacturer = lab_manufacturer::find($lab_manufacturer);
        return view('app.inventory.lab_manufacturer.edit', compact('lab_manufacturer'));
    }

    public function update(Request $request, $lab_manufacturer){
        //validaciones
        $campos = [
            'name' => 'required|string|max:45',
        ];
        $mensaje = [
            // aca puede generar mensajes unicos
        ];
        $this->validate($request, $campos, $mensaje);


        //sentencia
        $lab_manufacturer = lab_manufacturer::find($lab_manufacturer)->update($request->all());
        return redirect('fabricantes')->with('actualizar', 'ok');
    }

    public function destroy($lab_manufacturer){
        $lab_manufacturer = lab_manufacturer::find($lab_manufacturer)->delete();
        return redirect('fabricantes')->with('eliminar', 'ok');
    }
}
