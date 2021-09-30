<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use DateTime;

use App\Models\User;
use App\Models\Locality;
use App\Models\LocalityPhotos;
use App\Models\LocalityAvailability;
use App\Models\UserAppointment;

class LocalityController extends Controller
{

    private $loggedUser;

    public function __construct() {
        $this->middleware('auth:api', ['except' => [
            'create',
            'fcheckuseryes'
        ]]);
        $this->loggedUser = auth()->user();
    }

    public function create(Request $request, Locality $locality) {
        $array = ['error' => ''];

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'cep' => 'required',
            'image' => 'mimes:jpeg,jpg,png|required|max:10000',
            'address' => 'required'
           
        ]);

        if(!$validator->fails()) {

            $extenstion = $request->image->extension();
            $nameFile = md5(rand(0, 999).time()).".".$extenstion;
            $upload = $request->image->move(public_path('/storage/localitys'), $nameFile);
            
            

            $locality->name = $request->input('name');
            $locality->address = $request->input('address');
            $locality->cep = $request->input('cep');
            $locality->avatar = $nameFile;
            $locality->save();
            
        } else {
            $array['error'] = $validator->errors();
            return $array;
        }

        return $array;

    }

    public function setAppointment($id, Request $request) {
        $array['error'] = 'Vacinação temporariamente suspensa até o recebimento de novas doses pelo Ministério da Saúde/Estado de Goiás.';
        return $array;
        // service, year, month, day, hour
        $array = ['error'=>''];

        $dataNascimento = $this->loggedUser->birthday;
        $dataNascimento = str_replace("/", "-", $dataNascimento);
        $date = new DateTime($dataNascimento);
        $interval = $date->diff( new DateTime( date('Y-m-d') ) );
        $idade = intval($interval->format( '%Y' ));

        $dataHoje = new DateTime();
        $dataHoje = $dataHoje->format('d-m-Y');
        
        $agendamento = false;
       
        
        switch ($dataHoje){
            case (strtotime($dataHoje) >= strtotime('15-02-2021') && strtotime($dataHoje) <= strtotime('21-02-2021')):
                if($idade >= 90){
                    $agendamento = true;
                }
                break;
            case (strtotime($dataHoje) >= strtotime('21-02-2021') && strtotime($dataHoje) <= strtotime('28-02-2021')):
                if($idade >= 85 && $idade <= 89){
                    $agendamento = true;
                }
                break;
            case (strtotime($dataHoje) >= strtotime('01-03-2021') && strtotime($dataHoje) <= strtotime('07-03-2021')):        
                if($idade >= 80 && $idade <= 84){
                    $agendamento = true;
                }
                break;
            case (strtotime($dataHoje) >= strtotime('08-03-2021') && strtotime($dataHoje) <= strtotime('14-03-2021')):
                if($idade >= 75 && $idade <= 79){
                    $agendamento = true;
                }
                break;
            case (strtotime($dataHoje) >= strtotime('15-03-2021') && strtotime($dataHoje) <= strtotime('21-03-2021')):
                if($idade >= 70 && $idade <= 74){
                    $agendamento = true;
                }
                break;
            case (strtotime($dataHoje) >= strtotime('22-03-2021') && strtotime($dataHoje) <= strtotime('28-03-2021')):
                if($idade >= 65 && $idade <= 69){
                    $agendamento = true;
                }
                break;
            case (strtotime($dataHoje) >= strtotime('29-03-2021') && strtotime($dataHoje) <= strtotime('04-04-2021')):
                if($idade >= 60 && $idade <= 64){
                    $agendamento = true;
                }
                break;
            default:
                if($this->loggedUser->profissional == '1'){
                    $array['error'] = 'Profissional de saúde contacte a Secretaria Municipal de Saúde pelo telefone 3627-1351.';
                    return $array;
                }else{
                    $array['error'] = 'Você não está contemplado no Cronograma de Vacinação! ';
                    return $array;
                }
                break;
        }
        

        if(!$agendamento){
            if($this->loggedUser->profissional == '1'){
                $array['error'] = 'Profissional de saúde contacte a Secretaria Municipal de Saúde pelo telefone 3627-1351.';
                return $array;
            }else{
                $array['error'] = 'Você não está contemplado no Cronograma de Vacinação! ';
                return $array;
            }
        }

        $year = intval($request->input('year'));
        $month = intval($request->input('month'));
        $day = intval($request->input('day'));
        $hour = $request->input('hour');
        
        $month++;
        $month = ($month < 10) ? '0'.$month : $month;
        $day = ($day < 10) ? '0'.$day : $day;
        

        if(strlen($hour) == '4'){
            $hour = '0'.$hour;
         } 

       

       
            // 2. verificar se a data é real
            $apDate = $year.'-'.$month.'-'.$day.' '.$hour.':00';
            if(strtotime($apDate) > 0) {
                // 3. verificar se o local já possui agendamento neste dia/hora
                $apps = UserAppointment::select()
                    ->where('id_locality', $id)
                    ->where('ap_datetime', $apDate)
                ->count();
                if($apps === 0) {
                    $consulta = $apps = UserAppointment::select()
                    ->where('id_user', $this->loggedUser->id)
                    ->whereDate('ap_datetime', '<=', date('Y-m-d').' 23:59:59')
                    ->count();
                    

                    
                    if($consulta === 0) {
                        $newApp = new UserAppointment();
                        $newApp->id_user = $this->loggedUser->id;
                        $newApp->id_locality = $id;
                        $newApp->ap_datetime = $apDate;
                        $newApp->save();
                    } else {
                        $array['error'] = 'Você já tem um agendamento!';
                    }
                } else {
                    
                    $array['error'] = 'Local já possui agendamento neste dia/hora';
                }
            } else {
                $array['error'] = 'Data inválida';
            }
           
        return $array;
    }

    public function list(Locality $locality) {
        $array = ['error' => ''];
        $loc = $locality->all();

        foreach($loc as $bkey => $bvalue) {
            $loc[$bkey]['avatar'] = url('storage/localitys/'.$loc[$bkey]['avatar']);
        }

        $array['list'] = $loc;
        return $array;
    }

    public function one($id) {
        $array = ['error' => ''];
        $locality = Locality::find($id);
        if($locality){

            $locality['avatar'] = url('storage/localitys/'.$locality['avatar']);
            $locality['available'] = [];


            $availability = [];

            $avails = LocalityAvailability::where('id_locality', $locality->id)->get();
            $availWeekdays = [];
            foreach($avails as $item) {
                $availWeekdays[$item['weekday']] = explode(',', $item['hours']);
            }

             // Pegando disponibilidade do Barbeiro
             $availability = [];

             // - Pegando a disponibilidade crua
             $avails = LocalityAvailability::where('id_locality', $locality->id)->get();
             $availWeekdays = [];
             foreach($avails as $item) {
                 $availWeekdays[$item['weekday']] = explode(',', $item['hours']);
             }
 
             // - Pegar os agendamentos dos próximos 20 dias
             $appointments = [];
             $appQuery = UserAppointment::where('id_locality', $locality->id)
                 ->whereBetween('ap_datetime', [
                     date($locality->dataInicio).' 00:00:00',
                     date($locality->dataFinal).' 23:59:59'
                 ])
                 ->get();
             foreach($appQuery as $appItem) {
                 $appointments[] = $appItem['ap_datetime'];
             }
             
             $definitivo = [];
             // - Gerar disponibilidade real
             for($q=0;$q<20;$q++) {
                 $timeItem = strtotime('+'.$q.' days');
                 $weekday = date('w', $timeItem);
 
                 if(in_array($weekday, array_keys($availWeekdays))) {
                     $hours = [];
 
                     $dayItem = date('Y-m-d', $timeItem);
 
                     foreach($availWeekdays[$weekday] as $hourItem) {
                         if(strlen($hourItem) == '4'){
                            $dayFormated = $dayItem.' 0'.$hourItem.':00';
                         } else {
                            
                            $dayFormated = $dayItem.' '.$hourItem.':00';
                         }
                         
                       
                         
                         if(!in_array($dayFormated, $appointments)) {
                             $hours[] = $hourItem;
                         }
                     }
 
                     if(count($hours) > 0) {
                         $availability[] = [
                             'date' => $dayItem,
                             'hours' => $hours
                         ];
                     }
 
                 }
             }
            
             $locality['available'] = $availability;
             
             $array['data'] = $locality;
        }else{
            $array['error'] = 'Local não existe ';
            return $array;
        }
        
        return $array;
    }

  

    public function locality(Request $request, $id) {
        $array = ['error' => ''];
        $locality = Locality::find($id);
        $ap = [];
        if($locality){
            $locality['avatar'] = url('storage/localitys/'.$locality['avatar']);
            $appointments = UserAppointment::where('id_locality', $locality->id)
                 ->whereBetween('ap_datetime', [
                     date($request->input('date')).' 00:00:00',
                     date($request->input('date')).' 23:59:59'
                 ])
                 ->where('status', 0)
                 ->get();
            
            
            
            foreach($appointments as $key => $item) {
                $user = User::find($item->id_user);
                $ap[$key] = $user;
                $ap[$key]['ap_datetime'] = $item->ap_datetime;
                $ap[$key]['id_ap'] = $item->id;
                $ap[$key]['status'] = $item->status;
            }
            $locality['appointments'] = $ap;
            $array['data'] = $locality;
        }else{
            $array['error'] = 'Local não existe ';
            return $array;
        }
        
        return $array;
    }
    
    public function fcheckuseryes($id) {
        $array = ['error' => ''];
        $appointments = UserAppointment::find($id);
        $appointments->status = 1;
        $appointments->save();
        return $array;
    }

    public function fcheckuserno($id) {
        $array = ['error' => ''];
        $appointments = UserAppointment::find($id);
        $appointments->status = 2;
        $appointments->save();
        return $array;
    }

    

}
