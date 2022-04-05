<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Lab_manufacturer;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class InventoryController extends Controller
{
    public function index(){
        $inventories = Inventory::all();
        //return view('app.inventory.index', compact('inventories'));
        return response()->json(['productos' => $inventories]);
    }

    public function create(){
        $inventory=Inventory::all();
        $lab_manufacturers=Lab_manufacturer::all();
        $products=Product::all();

        return view('app.inventory.create', compact('inventory', 'lab_manufacturers', 'products'));
    }

    public function store(Request $request){

        //validaciones
        $campos = [
            'description' => 'required|string|max:255',
            'product_code' => [ 'required', 'string', Rule::unique('inventories')]
        ];
        $mensaje = [
            // aca puede generar mensajes unicos
        ];
        $this->validate($request, $campos, $mensaje);

        //sentencia

        $inventory = Inventory::create($request -> all());

        return redirect('inventario')->with('crear', 'ok');
    }
    public function edit($inventory){
        $inventory = Inventory::find($inventory);
        $lab_manufacturers=Lab_manufacturer::all();
        $products=Product::all();
        return view('app.inventory.edit', compact('inventory', 'lab_manufacturers', 'products'));

    }

    public function update(Request $request, $inventory){

        //validaciones
        $campos = [
            'description' => 'required|string|max:255',
            'product_code' => [ 'required', 'string', Rule::unique('inventories')->ignore($inventory)],

        ];
        $mensaje = [
            // aca puede generar mensajes unicos
        ];
        $this->validate($request, $campos, $mensaje);

        //sentencia
        $inventory = Inventory::find($inventory)->update($request -> all());

        return redirect('inventario')->with('actualizar', 'ok');
    }
    public function show($inventory){
        $inventory = Inventory::find($inventory);
        return view('app.inventory.show', compact('inventory'));
    }

    public function destroy($inventory){
        $inventory = Inventory::find($inventory)->delete();
        return redirect('inventario')->with('eliminar', 'ok');
    }

    public function amount($amount){
        $inventory = Inventory::find($amount);
        return view('app.inventory.amount', compact('inventory'));
    }

    public function amountSave (Request $request, $inventory){
        //validaciones

        $amount= $request -> amount + $request->add - $request->subtract;
        $campos = [
            'add' => 'required|int',
            'subtract' => 'required|int',
        ];
        $mensaje = [
            // aca puede generar mensajes unicos
        ];
        $this->validate($request, $campos, $mensaje);

        //sentencia
        $inventory = Inventory::find($inventory)->update([
            'amount' => $amount,
        ]);

        //$inventory = Inventory::find($inventory)->update($request -> all());

        return redirect('inventario')->with('actualizar', 'ok');
    }
}
