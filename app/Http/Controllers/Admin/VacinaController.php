<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Vacina;
use App\Models\Contratos;
use DateTime;
use Illuminate\Support\Facades\Validator;

use PDF;

class VacinaController extends Controller
{
    public function index(){
        return redirect('/painel');
        
    }

    public function cadastro(){
        $array = array();
        return view('index.cadastro', $array);
    }

    public function planilha(){
        $array = array();
        return view('index.planilha', $array);
    }

    public function cadastroAction(Request $request) {
        $array = array();
        
        $validator = Validator::make($request->all(), [
            'nome' => 'required',
            'cpf' => 'required',
            'nascimento' => 'required',
            'telefone' => 'required',
            'cep' => 'required',
            'cidade' => 'required',
            'endereco' => 'required',
            'bairro' => 'required',
            'altura' => 'required',
            'peso' => 'required',
            'email' => 'required',
            'comorbidade' => 'required',

        ]);

        if(!$validator->fails()){
            $data = $request->all();
            $dt = new DateTime();
            $data['criacao'] = $dt->format('Y-m-d H:i:s');
            $data['protocolo'] = $dt->format('YmdHis');
            $vacina = Vacina::create($data);
            return redirect()->route('success', ['id' => $vacina]);

        }else{
            return redirect('/cadastrar')->withErrors($validator);
        }
        
    }

    public function success(Request $request){
        
        $array = array();
        $vacina = Vacina::find($request->input('id'));
        $array['info'] = $vacina;
        return view('index.success', $array);
    }

    public function gerarPdf(Request $request, $id) {
        // $contrato = Contratos::find($id);
        $contrato = '';
        // $dataNascimento = $request->input('nascimento');
        // $dataNascimento = str_replace("/", "-", $dataNascimento);
        // $date = new DateTime($dataNascimento);
        // $interval = $date->diff( new DateTime( date('Y-m-d') ) );
        // $idade = intval($interval->format( '%Y' ));

        $dados = [
            'contrato' => $contrato
        ];

        return view('index.pdf2', $dados);
        // $pdf = PDF::loadView('index.pdf2', compact('dados'));

        return $pdf->setPaper('a4')->stream('nome_arquivo.pdf'); // abre no proprio navegador
        //return $pdf->setPaper('a4')->download('nome_arquivo'); // faz o download
    }
}
