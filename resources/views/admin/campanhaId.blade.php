@extends('admin.layout')

    
@section('name', $user->name)
    
@section('content')
<?php
function calcularIdade($data){
 $idade = 0;
    $data_nascimento = date('Y-m-d', strtotime($data));
	list($diaNasc, $mesNasc, $anoNasc) = explode('/', $data);
 
    $idade      = date("Y") - $anoNasc;
    if (date("m") < $mesNasc){
        $idade -= 1;
    } elseif ((date("m") == $mesNasc) && (date("d") > $diaNasc) ){
        $idade -= 1;
		
    }
    return $idade;
}

function calcularMeses($Inicio, $Fim){
    try {
        $qtMeses = 0;
	
        list($mesInicio, $anoInicio) = explode('/', $Inicio);
        list($diaFim, $mesFim, $anoFim) = explode('/', $Fim);
        
        $dataInicio = "{$anoInicio}-{$mesInicio}-01";
        $dataFim = "{$anoFim}-{$mesFim}-{$diaFim}";
        
        $data1 = new DateTime( $dataInicio );
        $data2 = new DateTime( $dataFim );
        
        $intervalo = $data1->diff( $data2 );
        $qtMeses = ($intervalo->y * 12);
        
        $qtMeses = $qtMeses + $intervalo->m;
        //return "Intervalo é de {$intervalo->y} anos, {$intervalo->m} meses e {$intervalo->d} dias";
        return $qtMeses;
    } catch (\Throwable $th) {
        return 'Undefined';
    }
	
}

?>
<div class="app-inner-layout__wrapper">
    <div class="app-inner-layout__content pt-1">
        <div class="tab-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-card mb-3 card">
                            <div class="no-gutters row">
                                
                                <div class="col-md-2 col-xl-3">
                                    <div class="widget-content">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading" style="display: flex; justify-content: center; align-items: center;"><i class="pe-7s-user" style="size: 10px; font-size: 27px; margin-right: 10px;"></i>{{$campanha_Cliente['clientes']['nome']}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-xl-2">
                                    <div class="widget-content">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading" style="display: flex; justify-content: center; align-items: center;"><i class="pe-7s-date" style="size: 10px; font-size: 27px; margin-right: 10px;"></i>{{calcularIdade($campanha_Cliente['clientes']['dataNascimento'])}} Anos
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-xl-2">
                                    <div class="widget-content" style="margin-bottom: 15px;">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading" style="display: flex; justify-content: center; align-items: center;"><i class="pe-7s-cash" style="size: 10px; font-size: 27px; margin-right: 10px;"></i>Benefício
                                                </div>
                                                <div class="widget-subheading" style="position: absolute; left: 33px;">{{$campanha_Cliente['clientes_beneficio'][0]['valorBeneficio']}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-xl-2">
                                    <div class="widget-content" style="margin-bottom: 15px;">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading" style="display: flex; justify-content: center; align-items: center;"><i class="pe-7s-id" style="size: 10px; font-size: 27px; margin-right: 10px;"></i>Espécie
                                                </div>
                                                <div class="widget-subheading" style="position: absolute; left: 33px;">{{$campanha_Cliente['clientes']['especieBeneficio']}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-xl-1">
                                    <div class="widget-content" style="margin-bottom: 15px;">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading" style="display: flex; justify-content: center; align-items: center;"><i class="pe-7s-piggy" style="size: 10px; font-size: 27px; margin-right: 10px;"></i>Margem
                                                </div>
                                                <div class="widget-subheading" style="position: absolute; left: 33px;">{{$campanha_Cliente['clientes_beneficio'][0]['valorDisponivel']}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-xl-2" style="display: flex; justify-content: center; align-itens:center;">
                                    <div class="widget-content">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <nav class="pagination-rounded"
                                                         aria-label="Page navigation example">
                                                        <ul class="pagination">
                                                            @if ($n_atendimento > 1)
                                                            <li class="page-item"><a href="{{ url('/painel/campanha') }}/{{$campanha_id}}/atendimento/{{$n_atendimento - 1}}"
                                                                class="page-link"
                                                                aria-label="Previous"><span
                                                                    aria-hidden="true">«</span><span class="sr-only">Previous</span></a>
                                                            </li>
                                                            @endif
                                                            <li style="display: flex; justify-content: center; align-items: center; margin-left: 10px; margin-right: 10px;">( {{$n_atendimento}} de {{$quantidade_clientes}} )</li>
                                                            @if ($n_atendimento != $quantidade_clientes)
                                                            <li class="page-item"><a href="{{ url('/painel/campanha') }}/{{$campanha_id}}/atendimento/{{$n_atendimento + 1}}"
                                                                class="page-link"
                                                                aria-label="Next"><span
                                                                    aria-hidden="true">»</span><span class="sr-only">Next</span></a>
                                                            </li>
                                                            @endif
                                                            
                                                        </ul>
                                                    </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-xl-3">
                                    <div class="widget-content">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading" style="display: flex; justify-content: center; align-items: center; font-size: 28px;"><i class="pe-7s-timer" style="size: 10px; font-size: 27px; margin-right: 10px;"></i><div id="time">00:00:00</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-pane tabs-animation" id="tab-content-1" role="tabpanel">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3 card">
                                            <div class="card-body">
                                                <ul class="tabs-animated-shadow tabs-animated nav">
                                                    <li class="nav-item">
                                                        <a role="tab" class="nav-link active"
                                                           id="tab-c-0"
                                                           data-toggle="tab" href="#tab-animated-0">
                                                            <span>Contratos</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a role="tab" class="nav-link" id="tab-c-1"
                                                           data-toggle="tab" href="#tab-animated-1">
                                                            <span>Financeiro</span>
                                                        </a>
                                                    </li>
                                                    
                                                    <li class="nav-item">
                                                        <a role="tab" class="nav-link" id="tab-c-2"
                                                           data-toggle="tab" href="#tab-animated-2">
                                                            <span>Dados Cadastrais</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a role="tab" class="nav-link" id="tab-c-3"
                                                           data-toggle="tab" href="#tab-animated-3">
                                                            <span>Telefones</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a role="tab" class="nav-link" id="tab-c-4"
                                                           data-toggle="tab" href="#tab-animated-4">
                                                            <span>Observações</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab-animated-0"
                                                         role="tabpanel">
                                                         <div class="card-body">
                                                            <table id="example2"
                                                                   class="table table-hover table-striped table-bordered">
                                                                <thead>
                                                                <tr>
                                                                    <th>Banco</th>
                                                                    <th>Inicio</th>
                                                                    <th>Fim</th>
                                                                    <th>Vlr Parcela</th>
                                                                    <th>Pcl Pagas</th>
                                                                    <th>Prazo</th>
                                                                    <th>N° Contrato</th>
                                                                    <th>Refin. Disponivel</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($campanha_Cliente['clientes_contrato'] as $item)
                                                                        <tr>
                                                                            <td>{{$item['banco']}}</td>
                                                                            <td>{{$item['inicio']}}</td>
                                                                            <td>{{$item['fim']}}</td>
                                                                            <td>{{$item['valorParcela']}}</td>
                                                                            <td><div class="{{calcularMeses($item['inicio'], date('d/m/Y')) >= 12 ? 'parcelasPagas' : ''}}">{{calcularMeses($item['inicio'], date('d/m/Y'))}}</div></td>
                                                                            <td>{{$item['prazo']}}</td>
                                                                            <td>{{$item['contrato']}}</td>
                                                                            <td>{{$item['refinDisponivel']}}</td>
                                                                        </tr>
                                                                    @endforeach
                                                                </tbody>
                                                                <tfoot>
                                                                <tr>
                                                                    <th>Banco</th>
                                                                    <th>Inicio</th>
                                                                    <th>Fim</th>
                                                                    <th>Vlr Parcela</th>
                                                                    <th>Pcl Pagas</th>
                                                                    <th>Prazo</th>
                                                                    <th>N° Contrato</th>
                                                                    <th>Refin. Disponivel</th>
                                                                </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="tab-animated-1" role="tabpanel">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="row" >
                                                                    <div class="col-md-2 col-xl-6" style="border: 1px solid #ccc; border-radius:5px; margin:20px; padding:10px;">
                                                                        <div class="row" style="display: flex; justify-content: space-between; padding-left: 20px; padding-right: 20px;">
                                                                            <div style="margin-bottom: 10px;margin-top: 10px;">
                                                                                <div class="col-md-2 col-xl-12">
                                                                                    <strong>Valor do benefício</strong>
                                                                                </div>
                                                                                <div class="col-md-2 col-xl-12">
                                                                                    {{$campanha_Cliente['clientes_beneficio'][0]['valorBeneficio']}}
                                                                                </div>
                                                                            </div>
                                                                            <div style="margin-bottom: 10px;margin-top: 10px;">
                                                                                <div class="col-md-2 col-xl-12">
                                                                                    <strong>Valor líquido</strong>
                                                                                </div>
                                                                                <div class="col-md-2 col-xl-12">
                                                                                    {{$campanha_Cliente['clientes_beneficio'][0]['valorLiquido']}}
                                                                                </div>
                                                                            </div>
                                                                            <div style="margin-bottom: 10px;margin-top: 10px;">
                                                                                <div class="col-md-2 col-xl-12">
                                                                                    <strong>Desconto</strong>
                                                                                </div>
                                                                                <div class="col-md-2 col-xl-12">
                                                                                    {{$campanha_Cliente['clientes_beneficio'][0]['desconto']}}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row" style="display: flex; justify-content: space-between; padding-left: 20px; padding-right: 20px;">
                                                                            <div style="margin-bottom: 10px;margin-top: 10px;">
                                                                                <div class="col-md-2 col-xl-12">
                                                                                    <strong>Margem consignável</strong>
                                                                                </div>
                                                                                <div class="col-md-2 col-xl-12">
                                                                                    {{$campanha_Cliente['clientes_beneficio'][0]['margemConsignavel']}}
                                                                                </div>
                                                                            </div>
                                                                            <div style="margin-bottom: 10px;margin-top: 10px;">
                                                                                <div class="col-md-2 col-xl-12">
                                                                                    <strong>Valor consignado</strong>
                                                                                </div>
                                                                                <div class="col-md-2 col-xl-12">
                                                                                    {{$campanha_Cliente['clientes_beneficio'][0]['valorConsignado']}}
                                                                                </div>
                                                                            </div>
                                                                            <div style="margin-bottom: 10px;margin-top: 10px;">
                                                                                <div class="col-md-2 col-xl-12">
                                                                                    <strong>Margem disponível</strong>
                                                                                </div>
                                                                                <div class="col-md-2 col-xl-12">
                                                                                    {{$campanha_Cliente['clientes_beneficio'][0]['valorDisponivel']}}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2 col-xl-5" style="border: 1px solid #ccc; border-radius:5px; margin:20px; padding:10px;">
                                                                        <div class="row" style="display: flex; justify-content: space-between; padding-left: 20px; padding-right: 20px;">
                                                                            <div style="margin-bottom: 10px;margin-top: 10px;">
                                                                                <div class="col-md-2 col-xl-12">
                                                                                    <strong>Cartão RMC</strong>
                                                                                </div>
                                                                                <div class="col-md-2 col-xl-12">
                                                                                    {{$campanha_Cliente['clientes_cartao'][0]['cartao']}}
                                                                                </div>
                                                                            </div>
                                                                            <div style="margin-bottom: 10px;margin-top: 10px;">
                                                                                <div class="col-md-2 col-xl-12">
                                                                                    <strong>Banco</strong>
                                                                                </div>
                                                                                <div class="col-md-2 col-xl-12">
                                                                                    {{$campanha_Cliente['clientes_cartao'][0]['banco']}}
                                                                                </div>
                                                                            </div>
                                                                            <div style="margin-bottom: 10px;margin-top: 10px;">
                                                                                <div class="col-md-2 col-xl-12">
                                                                                    <strong>Saque disponível</strong>
                                                                                </div>
                                                                                <div class="col-md-2 col-xl-12">
                                                                                    {{$campanha_Cliente['clientes_cartao'][0]['saqueDisponivel']}}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row" style="display: flex; justify-content: space-between; padding-left: 20px; padding-right: 20px;">
                                                                            <div style="margin-bottom: 10px;margin-top: 10px;">
                                                                                <div class="col-md-2 col-xl-12">
                                                                                    <strong>Margem consignável</strong>
                                                                                </div>
                                                                                <div class="col-md-2 col-xl-12">
                                                                                    {{$campanha_Cliente['clientes_cartao'][0]['margemConsignavel']}}
                                                                                </div>
                                                                            </div>
                                                                            <div style="margin-bottom: 10px;margin-top: 10px;">
                                                                                <div class="col-md-2 col-xl-12">
                                                                                    <strong>Valor consignado</strong>
                                                                                </div>
                                                                                <div class="col-md-2 col-xl-12">
                                                                                    {{$campanha_Cliente['clientes_cartao'][0]['margemConsignado']}}
                                                                                </div>
                                                                            </div>
                                                                            <div style="margin-bottom: 10px;margin-top: 10px;">
                                                                                <div class="col-md-2 col-xl-12">
                                                                                    <strong>Margem disponível</strong>
                                                                                </div>
                                                                                <div class="col-md-2 col-xl-12">
                                                                                    {{$campanha_Cliente['clientes_cartao'][0]['saqueDisponivel']}}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="tab-animated-2"
                                                         role="tabpanel">
                                                         <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="row" >
                                                                    <div class="col-md-2 col-xl-6" style="border: 1px solid #ccc; border-radius:5px; margin:20px; padding:10px;">
                                                                        <div class="row" style="display: flex; justify-content: space-between; padding-left: 20px; padding-right: 20px;">
                                                                            <div style="margin-bottom: 10px;margin-top: 10px;">
                                                                                <div class="col-md-2 col-xl-12">
                                                                                    <strong>Nome</strong>
                                                                                </div>
                                                                                <div class="col-md-2 col-xl-12">
                                                                                    {{$campanha_Cliente['clientes']['nome']}}
                                                                                </div>
                                                                            </div>
                                                                            <div style="margin-bottom: 10px;margin-top: 10px;">
                                                                                <div class="col-md-2 col-xl-12">
                                                                                    <strong>CPF</strong>
                                                                                </div>
                                                                                <div class="col-md-2 col-xl-12">
                                                                                    {{$campanha_Cliente['clientes']['cpf']}}
                                                                                </div>
                                                                            </div>
                                                                            <div style="margin-bottom: 10px;margin-top: 10px;">
                                                                                <div class="col-md-2 col-xl-12">
                                                                                    <strong>RG</strong>
                                                                                </div>
                                                                                <div class="col-md-2 col-xl-12">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row" style="display: flex; justify-content: space-between; padding-left: 20px; padding-right: 20px;">
                                                                            <div style="margin-bottom: 10px;margin-top: 10px;">
                                                                                <div class="col-md-2 col-xl-12">
                                                                                    <strong>Data Nascimento</strong>
                                                                                </div>
                                                                                <div class="col-md-2 col-xl-12">
                                                                                    {{$campanha_Cliente['clientes']['dataNascimento']}}
                                                                                </div>
                                                                            </div>
                                                                            <div style="margin-bottom: 10px;margin-top: 10px;">
                                                                                <div class="col-md-2 col-xl-12">
                                                                                    <strong>Benefício</strong>
                                                                                </div>
                                                                                <div class="col-md-2 col-xl-12">
                                                                                    {{$campanha_Cliente['clientes_beneficio'][0]['valorBeneficio']}}
                                                                                </div>
                                                                            </div>
                                                                            <div style="margin-bottom: 10px;margin-top: 10px;">
                                                                                <div class="col-md-2 col-xl-12">
                                                                                    <strong>Espécie de Benefício</strong>
                                                                                </div>
                                                                                <div class="col-md-2 col-xl-12">
                                                                                    {{$campanha_Cliente['clientes']['beneficio']}}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2 col-xl-5" style="border: 1px solid #ccc; border-radius:5px; margin:20px; padding:10px;">
                                                                        <div class="row" style="display: flex; justify-content: space-between; padding-left: 20px; padding-right: 20px;">
                                                                            <div style="margin-bottom: 10px;margin-top: 10px;">
                                                                                <div class="col-md-2 col-xl-12">
                                                                                    <strong>Endereço</strong>
                                                                                </div>
                                                                                <div class="col-md-2 col-xl-12">
                                                                                    {{$campanha_Cliente['clientes_endereco'][0]['endereco']}}
                                                                                </div>
                                                                            </div>
                                                                            <div style="margin-bottom: 10px;margin-top: 10px;">
                                                                                <div class="col-md-2 col-xl-12">
                                                                                    <strong>Cidade</strong>
                                                                                </div>
                                                                                <div class="col-md-2 col-xl-12">
                                                                                    {{$campanha_Cliente['clientes_endereco'][0]['cidade']}}
                                                                                </div>
                                                                            </div>
                                                                            <div style="margin-bottom: 10px;margin-top: 10px;">
                                                                                <div class="col-md-2 col-xl-12">
                                                                                    <strong>UF</strong>
                                                                                </div>
                                                                                <div class="col-md-2 col-xl-12">
                                                                                    {{$campanha_Cliente['clientes_endereco'][0]['uf']}}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row" style="display: flex; justify-content: space-between; padding-left: 20px; padding-right: 20px;">
                                                                            <div style="margin-bottom: 10px;margin-top: 10px;">
                                                                                <div class="col-md-2 col-xl-12">
                                                                                    <strong>CEP</strong>
                                                                                </div>
                                                                                <div class="col-md-2 col-xl-12">
                                                                                    {{$campanha_Cliente['clientes_endereco'][0]['cep']}}
                                                                                </div>
                                                                            </div>
                                                                            <div style="margin-bottom: 10px;margin-top: 10px;">
                                                                                <div class="col-md-2 col-xl-12">
                                                                                    <strong>Bairro</strong>
                                                                                </div>
                                                                                <div class="col-md-2 col-xl-12">
                                                                                    {{$campanha_Cliente['clientes_endereco'][0]['bairro']}}
                                                                                </div>
                                                                            </div>
                                                                            <div style="margin-bottom: 10px;margin-top: 10px;">
                                                                                <div class="col-md-2 col-xl-12">
                                                                                    <strong>Telefone</strong>
                                                                                </div>
                                                                                <div class="col-md-2 col-xl-12">
                                                                                    {{$campanha_Cliente['clientes_endereco'][0]['telefone']}}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="tab-animated-3"
                                                         role="tabpanel">
                                                         <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="row" >
                                                                    <div class="" style="border: 1px solid #ccc; border-radius:5px; margin:20px; padding:10px; width: 386px;">
                                                                        @foreach ($campanha_Cliente['clientes_telefone'] as $item)
                                                                        <div class="row" style="display: flex; justify-content: space-between; padding-left: 20px; padding-right: 20px;">
                                                                            <div style="    
                                                                                margin-bottom: 10px;
                                                                                margin-top: 10px;
                                                                                display: flex;
                                                                                border: 1px solid #ccc;
                                                                                padding: 10px;
                                                                                justify-content: center;
                                                                                align-items: center;
                                                                                border-radius: 10px;
                                                                            ">
                                                                                <div class="col-md-2 col-xl-8" style="display: flex">
                                                                                    {{$item['telefone']}}
                                                                                </div>
                                                                                <div class="col-md-2 col-xl-2" style="display: flex; width: 88px;">
                                                                                    @if ($item['zap'] == 1)
                                                                                            <img style="width: 65px;" src="https://promobank.com.br//img/whatsapp.svg?12.233" alt="">
                                                                                    @endif
                                                                                </div>
                                                                                <div class="col-md-2 col-xl-2" style="display: flex; width: 59px;">
                                                                                    @if ($item['tipo'] == 1)
                                                                                        <img style="width: 28px;" src="{{ url('/assets/img/fonehot.png') }}" alt="">
                                                                                    @endif
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="tab-animated-4"
                                                         role="tabpanel">
                                                         <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="row" >
                                                                    <div class="col-md-2 col-xl-10" >
                                                                        <div class="col-md-12">
                                                                            <div class="position-relative form-group">
                                                                                <div class="position-relative form-group" style="margin-bottom:20px;">
                                                                                    <label for="examplePassword22">DATA RETORNO</label>
                                                                                    <input autocomplete="off" placeholder="Digite a data de retorno" name="dataRetorno" class="form-control input-mask-trigger" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" im-insert="false">
                                                                                </div>

                                                                                <label for="examplePassword22">DIGITE AS OBSERVAÇÕES</label>
                                                                                <textarea name="observacao" id="observacao" rows="1" class="form-control autosize-input" style="max-height: 200px; min-height: 46px;"></textarea>
                                                                                
                                                                                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                                                                <input type="hidden" name="idCampanha" id="idCampanha" value="{{ $campanha_cliente_id }}">
                                                                                <input type="hidden" name="campanha_pai" id="campanha_pai" value="{{ $campanha_id }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="position-relative form-group">
                                                                                <button id="enviar_consultor" class="mb-2 mr-2 btn btn-success" onclick='finalizarAtendimento("0")'>Enviar para o consultor</button>
                                                                                <button id="marcar_atendido" class="mb-2 mr-2 btn btn-info" onclick='finalizarAtendimento("1")'>Marcar como atendido</button>
                                                                                <button id="proximo_cliente" class="mb-2 mr-2 btn btn-danger" onclick="location.href='{{ url('/painel/campanha') }}/{{$campanha_id}}/atendimento/{{$n_atendimento + 1}}'">Passar para o próximo cliente</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <table id="example2"
                                       class="table table-hover table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Funcionário</th>
                                        <th>Últimas observações</th>
                                        <th style="width: 150px;">Data atendimento</th>
                                        <th style="width: 150px;">Duração</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($mensagens as $item)
                                            <tr>
                                                <td>{{$item->nome_marketing}}</td>
                                                <td>{{$item->observacao}}</td>
                                                <td>{{date("d/m/Y", strtotime($item->dataCriacao))}}</td>
                                                <td>{{$item->duracao}}</td>
                                            </tr>
                                        @endforeach
                                       
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Funcionário</th>
                                        <th>Últimas observações</th>
                                        <th style="width: 150px;">Data atendimento</th>
                                        <th style="width: 150px;">Duração</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection

@section('js')
<script>
    $( document ).ready(function() {
        let hh = 0;
        let mm = 0;
        let ss = 0;
        
        var tempo = 1000;//Quantos milésimos valem 1 segundo?
        var cron;

        const functeste = () => {
            ss++; //Incrementa +1 na variável ss

            if (ss == 59) { //Verifica se deu 59 segundos
                ss = 0; //Volta os segundos para 0
                mm++; //Adiciona +1 na variável mm

                if (mm == 59) { //Verifica se deu 59 minutos
                    mm = 0;//Volta os minutos para 0
                    hh++;//Adiciona +1 na variável hora
                }
            }

            //Cria uma variável com o valor tratado HH:MM:SS
            var format = (hh < 10 ? '0' + hh : hh) + ':' + (mm < 10 ? '0' + mm : mm) + ':' + (ss < 10 ? '0' + ss : ss);
            
            //Insere o valor tratado no elemento counter
            $('#time').html(format);
            //Retorna o valor tratado
            return format;
        }

        setInterval(functeste, 1000);

    });
</script>
@endsection