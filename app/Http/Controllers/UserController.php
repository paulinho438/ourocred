<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


use App\Models\User;
use App\Models\UsersToken;
use App\Models\UserAppointment;

use App\Models\Locality;

class UserController extends Controller
{
    private $loggedUser;

    public function __construct() {
        $this->middleware('auth:api', ['except' => [
            'esqueci'
        ]]);
        $this->loggedUser = auth()->user();
    }

    public function delappointments($id) {
        $array = ['error' => ''];
        $del = UserAppointment::find($id);
        $del->delete();
        return $array;
    }

    public function esqueci(Request $request){
        $array = ['error' => ''];

        $user = User::where('email', $request->input('email'))->first();
        if($user){
            $token = md5(time().rand(0, 99999).rand(0, 999999));
            $newUsersToken = new UsersToken;
            $newUsersToken->id_user = $user->id;
            $newUsersToken->hash = $token;
            $newUsersToken->expirado_em = date('Y-m-d H:i', strtotime('+2 months'));
            $newUsersToken->save();

            $link = url('esqueciminhasenha?token='.$token);
            $mensagem = "Clique no link para redefinir sua senha:".$link;
            $assunto = "Redefinição de senha do app Vacina Val";
            $headers = 'From: suporte@vacinaval.org'."\r\n" .
                        'X-Mailer: PHP/'.phpversion();
            
            mail($request->input('email'), $assunto, $mensagem, $headers);

            $array['result'] = 'Foi enviado um link para recuperar a senha no e-mail informado!';
        }else{
            $array['error'] = 'Não existe nenhum usuário cadastrado com este e-mail!';
        }

        return $array;
    }

    public function getAppointments() {
        $array = ['error'=>'', 'list'=>[]];

        $apps = UserAppointment::select()
            ->where('id_user', $this->loggedUser->id)
            ->orderBy('ap_datetime', 'DESC')
        ->get();

        if($apps) {

            foreach($apps as $app) {

                $locality = Locality::find($app['id_locality']);
                $locality['avatar'] = url('storage/localitys/'.$locality['avatar']);

             

                $array['list'][] = [
                    'id' => $app['id'],
                    'datetime' => $app['ap_datetime'],
                    'locality' => $locality
                ];

            }

        }

        return $array;
    }

}
