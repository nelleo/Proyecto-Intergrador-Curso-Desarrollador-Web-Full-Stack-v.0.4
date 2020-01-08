<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/inicio';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data )
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'telefono' => ['required', 'string', 'max:255'],
            'fechanac' => ['required', 'date'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'img'=>['required','mimes:jpg,bmp,png'],
        ]);
    }

    

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */

    protected function create(array $data) 
    {   
        $path=$data->file("img")->store("public/fotosPerfil");
        $nameArch=basename($path);

        User::create([ 
            "name" => $data["name"],
            "pais" => $data["pais"],
            "telefono" => $data["telefono"],
            "fechanac" => $data["fechanac"],
            "email" => $data["email"],
            "password" => Hash::make($data["password"]),
            "foto_perfil"=>$nameArch
        ]);
    }
    public function mostrarRegistro(){
        $paises=User::getPaises();      
        return view("auth/register",(["paises"=>$paises]));
    }
}
