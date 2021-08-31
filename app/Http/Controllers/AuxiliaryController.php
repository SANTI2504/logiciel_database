<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\PasswordValidationRules;
use App\Models\Civil_status;
use App\Models\Eps;
use App\Models\Auxiliary;
use App\Models\Gender;
use App\Models\Type_document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Spatie\Permission\Models\Role;


class AuxiliaryController extends Controller
{
    use PasswordValidationRules;

    public function index(){
        $auxiliaries = Auxiliary::all();
        return view('app.user.type_users.auxiliary.index', compact('auxiliaries'));
    }

    public function create(){
        $genders = Gender::all();
        $civil_statuses = Civil_status::all();
        $type_documents = Type_document::all();
        $roles = Role::all();
        $eps = Eps::all();
        return view('app.user.type_users.auxiliary.create', compact('genders', 'civil_statuses', 'type_documents', 'roles', 'eps'));
    }

    public function store(Request $request){
        //validaciones
        $campos = [
            'name' => 'required|string|max:125',
            'lastnames' => 'required|string|max:45',
            'number_document' => 'required|int|unique:auxiliaries',
            'email' => 'required|email|max:145|unique:auxiliaries',
            'date_of_bird' => 'required|date',
            'number_cell' => 'required|int',
            'address'=>'required|string|max:150',
            'city'=>'required|string|max:75',
            'location'=>'required|string|max:75',
            'neighborhood'=>'required|string|max:75',
            'gender-id'=>'required',
            'password' =>  [$this->passwordRules(),
                Password::min(8)
                    //->letters()//al menos una letra
                    //->mixedCase()//al menos 1 minuscula y 1 mayucula
                    //->numbers()//al menos un numero
                    //->symbols()//al menos un simbolo
                    //->uncompromised()//no ha sido comprometida en una fuga de datos
            ],

        ];
        $mensaje = [
            // aca puede generar mensajes unicos
        ];
        $this->validate($request, $campos, $mensaje);


        //incriptar la contraseña eviada por usuario
        $request['password'] = Hash::make($request['password']);

        //sentencia
        $auxiliary = Auxiliary::create($request -> all());
        return redirect('usuarios/auxiliares')->with('crear', 'ok');
    }
    public function edit($auxiliare){
        $genders = Gender::all();
        $civil_statuses = Civil_status::all();
        $type_documents = Type_document::all();
        $roles = Role::all();
        $eps = Eps::all();

        $auxiliary = Auxiliary::find($auxiliare);
        return view('app.user.type_users.auxiliary.edit', compact('genders', 'civil_statuses', 'auxiliary', 'type_documents', 'roles','eps'));
    }

    public function update(Request $request, $auxiliare){
        //validaciones
        $campos = [
            'name' => 'required|string|max:125',
            'lastnames' => 'required|string|max:45',
            'number_document' => [ 'required', 'int', Rule::unique('auxiliaries')->ignore($auxiliare)],
            'email' => ['required','email','max:145',Rule::unique('auxiliaries')->ignore($auxiliare)],
            'date_of_bird' => 'required|date',
            'password' =>  $this->passwordRules(),
            'number_cell' => 'required|int',
            'address'=>'required|string|max:150',
            'city'=>'required|string|max:75',
            'location'=>'required|string|max:75',
            'neighborhood'=>'required|string|max:75',
            'gender-id'=>'required',
        ];
        $mensaje = [
            // aca puede generar mensajes unicos
        ];
        $this->validate($request, $campos, $mensaje);

        //incriptar la contraseña eviada por usuario
        $request['password'] = Hash::make($request['password']);

        //sentencia
        $auxiliary = Auxiliary::find($auxiliare)->update($request->all());
        return redirect('usuarios/auxiliares')->with('actualizar', 'ok');
    }
    public function show($auxiliare){
        $auxiliary = Auxiliary::find($auxiliare);
        return view('app.user.type_users.auxiliary.show', compact('auxiliary'));
    }

    public function destroy($auxiliare){
        $auxiliary = Auxiliary::find($auxiliare)->delete();
        return redirect('usuarios/auxiliares')->with('eliminar', 'ok');
    }
}
