<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

use App\Models\UsersPermissions;

class AuthController extends Controller
{
    public function login(){
        return view('admin.login');
    }

    public function authenticate(Request $request) {
        $data = $request->only(['cpf', 'password']);

        $validator = $this->validator($data);

        if($validator->fails()){
            return redirect()->route('login')
                ->withErrors($validator)
                ->withInput();
        }

        $token = auth()->attempt([
            'cpf' => $request->input('cpf'),
            'password' => $request->input('password')
        ]);

        if(!$token) {
            return redirect()->route('login');
            die();
        }
        session()->put('token', $token);
        session()->put('user', auth()->user());

        #pegar as permissões de usuario

        $permissoesArray = explode(',', auth()->user()->permissions);
        $permissoes = UsersPermissions::whereIn('id', $permissoesArray)->select('slug')->get();

        $newPermissoes = [];
        foreach($permissoes as $item){
            $newPermissoes[] = $item['slug'];
        }

        session()->put('permissoes', $newPermissoes);

        return redirect()->route('admin');
     

    }

    protected function validator(array $data){
        return Validator::make($data, [
            'cpf' => ['required'],
            'password' => ['required']
        ]);
    }

    public function logout(){
        session()->forget('token');
        return redirect()->route('login');
    }
}
