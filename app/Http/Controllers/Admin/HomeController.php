<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use DateTime;


use App\Models\User;
use App\Models\UsersToken;

use App\Exports\AgendamentosExport;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    public function __construct(Request $request){
        
    }

    public function esqueci(Request $request){
        $array = ['error'=>'', 'erro' => ''];
        
        if($request->input('token')){
            $userToken = UsersToken::where('hash', $request->input('token'))
                                    ->where('used', 0)
                                    ->whereDate('expirado_em', '>', NOW())->first();
            if(!$userToken){
                $array['error'] = 'Token inválido ou usado!';
            }
            $array['token'] = $request->input('token');
        }
        return view('admin.esqueci', $array);
    }

    public function esqueciAction(Request $request){
        $array = ['error'=>''];
        $array['token'] = $request->input('token');
        $validator = Validator::make($request->all(), [
            'token' => 'required',
            'password' => 'required|digits_between:5,6|numeric',
            'password_confirmation' => 'required'
        ]);
        
        if(!$validator->fails()) {
            $userToken = UsersToken::where('hash', $request->input('token'))
                                    ->where('used', 0)
                                    ->whereDate('expirado_em', '>', NOW())->first();
            if(!$userToken){
                $array['error'] = 'Token inválido ou usado!';
                return view('admin.esqueci', $array);
            }
           
                $userToken->used = 1;
                $userToken->save();
    
                $user = User::find($userToken->id_user);
                $user->password = password_hash($request->input('password'), PASSWORD_DEFAULT);
                $user->save();
    
                $array['error'] = 'Senha alterada com sucesso !';
           
        }else{
            return redirect('/esqueciminhasenha?token='.$request->input('token'))->withErrors($validator);
        }
        
        
        return view('admin.esqueci', $array);
    }

    public function index(){
        if (!session()->exists('token')) {
            return redirect()->route('login');
        }
        $data = [
            'user' => session()->get('user'),
            'menu_principal' => 'Dashboards',
            'menu_secundario' => 'Home',
            'title' => 'Home'
        ];
       
        
      
        
      
        return view('admin.home', $data);
    }

    public function planilha2020(){
        if (!session()->exists('token')) {
            return redirect()->route('login');
        }
        $data = [
            'user' => session()->get('user'),
            'menu_principal' => 'Planilhas',
            'menu_secundario' => 'Planilhas-2020',
            'title' => 'Planilha 2020'
        ];
        return view('admin.planilha2020', $data);
    }

    public function planilha2020Novo(){
        if (!session()->exists('token')) {
            return redirect()->route('login');
        }
        $data = [
            'user' => session()->get('user'),
            'menu_principal' => 'Planilhas',
            'menu_secundario' => 'Planilhas-2020',
            'title' => 'Planilha 2020'
        ];
        return view('admin.planilha2020novo', $data);
    }

    public function local($id){
        $array = array();
        $locality = Locality::find($id);
        $ap = [];
        if($locality){
            $locality['avatar'] = url('storage/localitys/'.$locality['avatar']);
            $appointments = UserAppointment::where('id_locality', $locality->id)->get();
            foreach($appointments as $key => $item) {
                $user = User::find($item->id_user);
                $ap[$key] = $user;
                $ap[$key]['ap_datetime'] = $item->ap_datetime;
                $ap[$key]['id_ap'] = $item->id;
                $ap[$key]['status'] = $item->status;
                $ap[$key]['grupo_prioritario'] = $item->grupo_prioritario;
                $ap[$key]['lote'] = $item->lote;
                $ap[$key]['responsavel_aplicacao'] = $item->responsavel_aplicacao;
            }
            $locality['appointments'] = $ap;
            $array['data'] = $locality;
            // echo "<pre>";
            // print_r($array);
            // echo "</pre>";
            // exit;
            return view('admin.local', $array);
        }else{
            return redirect('/painel');
        }
    }

    public function checkY(Request $request) {
        $appointments = UserAppointment::find($request->input('agendamento_id'));
        $appointments->status = intval($request->input('compareceu'));
        $appointments->grupo_prioritario = $request->input('grupo');
        $appointments->lote = $request->input('lote');
        $appointments->responsavel_aplicacao = $request->input('responsavel');
        $appointments->save();
        return redirect()->route('local', ['id' => $request->input('local_id')]);
    }

    public function checkN(Request $request) {
        
        $appointments = UserAppointment::find($request->input('agendamento_id'));
        $appointments->status = 2;
        $appointments->save();
        return redirect()->route('local', ['id' => $request->input('local_id')]);
        
    }

    public function addContrato() {
        return view('admin.addcontrato');
    }

    public function addContratoAction(Request $request) {
        $array = ['error' => ''];
        
        $validator = Validator::make($request->all(), [
            'nome' => 'required',
            'telefone' => 'required',
            'rg' => 'required',
            'cpf' => 'required',
            'matricula' => 'required',
            'email' => 'required',
            'nascimento' => 'required',
            'dtContrato' => 'required',
            'valor' => 'required',
            'ssp' => 'required',
            'banco' => 'required',
            'agencia' => 'required',
            'tipodeconta' => 'required',
            'conta'
           
        ]);

        if(!$validator->fails()) {

            Contratos::create($request->all());

            return redirect('/painel');
            
        } else {
            $array['error'] = $validator->errors();
            return $array;
        }

        return $array;
    }

    public function editLocal($id){
        $array = array();
        $locality = Locality::find($id);
        $array['data'] = $locality;
        
        $days = array();
        $req = LocalityAvailability::where('id_locality', $locality->id)->get();
        foreach($req as $item){
            $days[$item['weekday']] = [
                'id' => $item['id'],
                'weekday' => $item['weekday'],
                'hours' => $item['hours']
            ];
        }
        $array['days'] = $days;
        $array['days_c'] = [
            0 => ['slug' => 'cdomingo', 'slug2' => 'tdomingo', 'name' => 'Domingo', 'custom' => 'customSwitch1', 'text' => 'textarea1'],
            1 => ['slug' => 'csegunda', 'slug2' => 'tsegunda', 'name' => 'Segunda Feira', 'custom' => 'customSwitch2', 'text' => 'textarea2'],
            2 => ['slug' => 'cterca', 'slug2' => 'tterca', 'name' => 'Terça Feira', 'custom' => 'customSwitch3', 'text' => 'textarea3'],
            3 => ['slug' => 'cquarta', 'slug2' => 'tquarta', 'name' => 'Quarta Feira', 'custom' => 'customSwitch4', 'text' => 'textarea4'],
            4 => ['slug' => 'cquinta', 'slug2' => 'tquinta', 'name' => 'Quinta Feira', 'custom' => 'customSwitch5', 'text' => 'textarea5'],
            5 => ['slug' => 'csexta', 'slug2' => 'tsexta', 'name' => 'Sexta Feira', 'custom' => 'customSwitch6', 'text' => 'textarea6'],
            6 => ['slug' => 'csabado', 'slug2' => 'tsabado', 'name' => 'Sabado', 'custom' => 'customSwitch7', 'text' => 'textarea7']
        ];
        // print_r($days);
        // // $array['availabilitys'] =  
        // echo $locality->name;
        // echo "<pre>";
        // print_r($array);
        // echo "</pre>";
        // exit;

        return view('admin.editlocal', $array);
    }

    public function editLocalAction($id, Request $request){
        $array = ['error' => ''];

        
       
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'cep' => 'required',
            'address' => 'required',
            'dataInicio' => 'required',
            'dataFinal' => 'required'
           
        ]);

        if(!$validator->fails()) {
            $locality = Locality::find($id);
            if($request->image){
                $extenstion = $request->image->extension();
                $nameFile = md5(rand(0, 999).time()).".".$extenstion;
                $upload = $request->image->move(public_path('/storage/localitys'), $nameFile);
                $locality->avatar = $nameFile;
            }
            
          
            $dataInicio = str_replace("/", "-", $request->input('dataInicio'));
            $dataFinal = str_replace("/", "-", $request->input('dataFinal'));
            
            

            $locality->name = $request->input('name');
            $locality->address = $request->input('address');
            $locality->cep = $request->input('cep');
            
            $locality->dataInicio = date('Y-m-d', strtotime($dataInicio));
            $locality->dataFinal = date('Y-m-d', strtotime($dataFinal));
            $locality->save();

            
            if($request->input('cdomingo')){
                if($request->input('cdomingo') == 'on'){
                    $create0 = new LocalityAvailability();
                    $create0->id_locality = $locality->id;
                    $create0->weekday = 0;
                    $create0->hours = $request->input('tdomingo');
                    $create0->save();
                }else{
                    $create0 = LocalityAvailability::find($request->input('cdomingo'));
                    $create0->id_locality = $locality->id;
                    $create0->weekday = 0;
                    $create0->hours = $request->input('tdomingo');
                    $create0->save();
                }
            }
            if($request->input('csegunda')){
                if($request->input('csegunda') == 'on'){
                    $create1 = new LocalityAvailability();
                    $create1->id_locality = $locality->id;
                    $create1->weekday = 1;
                    $create1->hours = $request->input('tsegunda');
                    $create1->save();
                }else{
                    $create1 = LocalityAvailability::find($request->input('csegunda'));
                    $create1->id_locality = $locality->id;
                    $create1->weekday = 1;
                    $create1->hours = $request->input('tsegunda');
                    $create1->save();
                }
            }
            if($request->input('cterca')){
                if($request->input('cterca') == 'on'){
                    $create2 = new LocalityAvailability();
                    $create2->id_locality = $locality->id;
                    $create2->weekday = 2;
                    $create2->hours = $request->input('tterca');
                    $create2->save();
                }else{
                    $create2 = LocalityAvailability::find($request->input('cterca'));
                    $create2->id_locality = $locality->id;
                    $create2->weekday = 2;
                    $create2->hours = $request->input('tterca');
                    $create2->save();
                }
            }

            if($request->input('cquarta')){
                if($request->input('cquarta') == 'on'){
                    $create3 = new LocalityAvailability();
                    $create3->id_locality = $locality->id;
                    $create3->weekday = 3;
                    $create3->hours = $request->input('tquarta');
                    $create3->save();
                }else{
                    $create3 = LocalityAvailability::find($request->input('cquarta'));
                    $create3->id_locality = $locality->id;
                    $create3->weekday = 3;
                    $create3->hours = $request->input('tquarta');
                    $create3->save();
                }
            }

            if($request->input('cquinta')){
                if($request->input('cquinta') == 'on'){
                    $create4 = new LocalityAvailability();
                    $create4->id_locality = $locality->id;
                    $create4->weekday = 4;
                    $create4->hours = $request->input('tquinta');
                    $create4->save();
                }else{
                    $create4 = LocalityAvailability::find($request->input('cquinta'));
                    $create4->id_locality = $locality->id;
                    $create4->weekday = 4;
                    $create4->hours = $request->input('tquinta');
                    $create4->save();
                }
            }

            if($request->input('csexta')){
                if($request->input('csexta') == 'on'){
                    $create5 = new LocalityAvailability();
                    $create5->id_locality = $locality->id;
                    $create5->weekday = 5;
                    $create5->hours = $request->input('tsexta');
                    $create5->save();
                }else{
                    $create5 = LocalityAvailability::find($request->input('csexta'));
                    $create5->id_locality = $locality->id;
                    $create5->weekday = 5;
                    $create5->hours = $request->input('tsexta');
                    $create5->save();
                }
            }

            if($request->input('csabado')){
                if($request->input('csabado') == 'on'){
                    $create6 = new LocalityAvailability();
                    $create6->id_locality = $locality->id;
                    $create6->weekday = 6;
                    $create6->hours = $request->input('tsabado');
                    $create6->save();
                }else{
                    $create6 = LocalityAvailability::find($request->input('csabado'));
                    $create6->id_locality = $locality->id;
                    $create6->weekday = 6;
                    $create6->hours = $request->input('tsabado');
                    $create6->save();
                }
            }
            return redirect('/painel');
            
        } else {
            $array['error'] = $validator->errors();
            return $array;
        }

        return $array;
    }

    public function delLocal($id){
        $locality = Locality::find($id);
        $locality->delete();
        LocalityAvailability::where('id_locality', $locality->id)->delete();
        return redirect('/painel');
    }

    public function relatorio(){
        $array = array();
        $array['data'] = Locality::all();
        return view('admin.relatorio', $array);
    }

    public function relatorioAction(Request $request){
        $array = array();
        if(!empty($request->input('dataInicio')) && !empty($request->input('dataFinal'))){

        
            $dataInicio = date('Y-m-d', strtotime(str_replace("/", "-", $request->input('dataInicio'))));
            $dataFinal = date('Y-m-d', strtotime(str_replace("/", "-", $request->input('dataFinal'))));
            $locality = [];
            if(!empty($request->input('comorbidade'))){

                $array['vacina'] = Vacina::
                whereBetween('criacao', [
                    date($dataInicio).' 00:00:00',
                    date($dataFinal).' 23:59:59'
                ])
                ->where('comorbidade', $request->input('comorbidade'))
                ->get(); 

                    if($request->input('excel') == 'on'){
                        $export = new AgendamentosExport([
                            ['ID', 'Nome', 'CPF', 'Nascimento', 'Telefone', 'CEP', 'Cidade', 'Endereço', 'Bairro', 'Altura', 'Peso', 'E-Mail', 'Comorbidade'],$array['vacina']
                            
                        ]);
                    
                        return Excel::download($export, date('d-m-Y').'.xlsx');
                    }else{
                        return view('admin.print', $array);
                    }

            } else {
                $array['vacina'] = Vacina::
                        whereBetween('criacao', [
                            date($dataInicio).' 00:00:00',
                            date($dataFinal).' 23:59:59'
                        ])
                        ->get(); 

                if($request->input('excel') == 'on'){
                    $export = new AgendamentosExport([
                        ['ID', 'Nome', 'CPF', 'Nascimento', 'Telefone', 'CEP', 'Cidade', 'Endereço', 'Bairro', 'Altura', 'Peso', 'E-Mail', 'Comorbidade'],$array['vacina']
                        
                    ]);
                
                    return Excel::download($export, date('d-m-Y').'.xlsx');
                }else{
                    return view('admin.print', $array);
                }

            }
        }else{

            $locality = [];
            if(!empty($request->input('comorbidade'))){

                $array['vacina'] = Vacina::where('comorbidade', $request->input('comorbidade'))
                ->get(); 

                    if($request->input('excel') == 'on'){
                        $export = new AgendamentosExport([
                            ['ID', 'Nome', 'CPF', 'Nascimento', 'Telefone', 'CEP', 'Cidade', 'Endereço', 'Bairro', 'Altura', 'Peso', 'E-Mail', 'Comorbidade'],$array['vacina']
                            
                        ]);
                    
                        return Excel::download($export, date('d-m-Y').'.xlsx');
                    }else{
                        return view('admin.print', $array);
                    }

            } else {
                $array['vacina'] = Vacina::all(); 

                if($request->input('excel') == 'on'){
                    $export = new AgendamentosExport([
                        ['ID', 'Nome', 'CPF', 'Nascimento', 'Telefone', 'CEP', 'Cidade', 'Endereço', 'Bairro', 'Altura', 'Peso', 'E-Mail', 'Comorbidade'],$array['vacina']
                        
                    ]);
                
                    return Excel::download($export, date('d-m-Y').'.xlsx');
                }else{
                    return view('admin.print', $array);
                }

            }

        }
        

    }

}
