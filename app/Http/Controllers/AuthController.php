<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use App\Models\User;

class AuthController extends Controller
{
    public function __construct() {
        $this->middleware('auth:api', ['except' => [
            'create',
            'login',
            'unauthorized'
        ]]);
    }

    public function create(Request $request) {
        $array = ['error' => ''];

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'cpf' => 'required|unique:users,cpf',
            'password' => 'required',
            'zipcode' => 'required',
            'address' => 'required',
            'birthday' => 'required',
            'tell' => 'required'
        ]);

        if(!$validator->fails()) {
            $dados = $request->all();
            $dados['password'] = password_hash($dados['password'], PASSWORD_DEFAULT);
            
            $user = User::create($dados);

            $token = auth()->attempt([
                'cpf' => $request->input('cpf'),
                'password' => $request->input('password')
            ]);

            if(!$token) {
                $array['error'] = 'Ocorreu um erro!';
                return $array;
            }

            $info = auth()->user();
            $info['avatar'] = url('media/avatars/'.$info['avatar']);
            $array['data'] = $info;
            $array['token'] = $token;


        } else {
            $array['error'] = $validator->errors();
            return $array;
        }

        return $array;
    }

    public function login(Request $request) {
        $array = ['error' => ''];
        $token = auth()->attempt($request->all());
        if(!$token){
            $array['error'] = 'Cpf e/ou senha errados!';
            return $array;
        }

        $info = auth()->user();
        $info['avatar'] = url('media/avatars/'.$info['avatar']);
        $array['data'] = $info;
        $array['token'] = $token;



        return $array;
    }

    public function logout(Request $request) {
        auth()->logout();
        return ['error' => ''];
    }

    public function refresh() {
        $array = ['error' => ''];

        $token = auth()->refresh();

        $info = auth()->user();
        $info['avatar'] = url('media/avatars/'.$info['avatar']);
        $array['data'] = $info;
        $array['token'] = $token;

        return $array;
    }

    public function unauthorized() {
        return response()->json([
            'error' => 'Não autorizado'
        ], 401);
    }
    
    public function validateToken(){
        $array = ['error' => ''];
        $info = auth()->user();
        $info['avatar'] = url('media/avatars/'.$info['avatar']);
        $array['data'] = $info;
        return $array;
    }
}
