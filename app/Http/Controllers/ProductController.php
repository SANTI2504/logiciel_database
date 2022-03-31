<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index(){
        $products= Product::all();
        return view('app.inventory.product.index', compact('products'));
    }

    public function create(){

        return view('app.inventory.product.create');
    }

    public function store(Request $request){
        //validaciones
        $campos = [
            'name' => 'required|string|max:45',
            'description' => 'required|string|max:200',
        ];
        $mensaje = [
            // aca puede generar mensajes unicos
        ];
        $this->validate($request, $campos, $mensaje);

        //sentencia
        $product = Product::create($request -> all());
        return redirect('inventario/productos')->with('crear', 'ok');
    }

    public function edit($product){

        $product = Product::find($product);
        return view('app.inventory.product.edit', compact('product'));
    }

    public function update(Request $request, $product){
        //validaciones
        $campos = [
            'name' => 'required|string|max:45',
            'description' => 'required|string|max:200',
        ];
        $mensaje = [
            // aca puede generar mensajes unicos
        ];
        $this->validate($request, $campos, $mensaje);


        //sentencia
        $product = Product::find($product)->update($request->all());
        return redirect('inventario/productos')->with('actualizar', 'ok');
    }

    public function destroy($product){
        $product = Product::find($product)->delete();
        return redirect('inventario/productos')->with('eliminar', 'ok');
    }
}
