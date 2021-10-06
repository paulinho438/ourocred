@extends('admin.layout')

    
@section('name', $user->name)
    
@section('content')
<div class="app-inner-layout__wrapper">
                            <div class="app-inner-layout__content pt-1">
                                <div class="tab-content">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="d-flex flex-row-reverse bd-highlight">
                                                    <button onclick="location.href='{{ url('painel/planilha/2021/novas_vendas_2021/novo') }}'" class="mb-2 mr-2 btn btn-gradient-success">NOVO REGISTRO
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="main-card mb-3 card">
                                                    <div class="card-body">
                                                        <table style="width: 100%;" id="example"
                                                               class="table table-hover table-striped table-bordered">
                                                            <thead>
                                                            <tr>
                                                                <th>USUARIO</th>
                                                                <th>N° CONTRATO</th>
                                                                <th>DT/CONTRATO</th>
                                                                <th>CPF</th>
                                                                <th>NOME</th>
                                                                <th>TELEFONES</th>
                                                                <th>VALOR PARCELA</th>
                                                                <th>PRAZO</th>
                                                                <th>VALOR LIBERADO</th>
                                                                <th>PRODUTO</th>
                                                                <th>OBSERVAÇÃO</th>
                                                                <th>OPÇÕES</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($planilha as $item)
                                                                <tr>
                                                                    <td>{{$item->usuario}}</td>
                                                                    <td>{{$item->contrato}}</td>
                                                                    <td>{{$item->dataContrato}}</td>
                                                                    <td>{{$item->cpf}}</td>
                                                                    <td>{{$item->nome}}</td>
                                                                    <td>{{$item->telefones}}</td>
                                                                    <td>R$ {{$item->valorParcela}}</td>
                                                                    <td>{{$item->prazo}}</td>
                                                                    <td>R$ {{$item->valorLiberado}}</td>
                                                                    <td>{{$item->produto}}</td>
                                                                    <td>{{$item->observacao}}</td>
                                                                    <td>
                                                                        <div class="d-flex bd-highlight">
                                                                            <button onclick="location.href='{{ url('painel/planilha/2020/delete') }}/{{$item->id}}'" class="mb-2 mr-2 btn btn-gradient-danger">EXCLUIR
                                                                            </button>
                                                                            {{-- <button onclick="location.href='{{ url('painel/planilha/2020/novo') }}'" class="mb-2 mr-2 btn btn-gradient-success">EDITAR
                                                                            </button> --}}
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                    
                                                                @endforeach
                                                           
                                                            </tbody>
                                                            <tfoot>
                                                            <tr>
                                                                <th>USUARIO</th>
                                                                <th>N° CONTRATO</th>
                                                                <th>DT/CONTRATO</th>
                                                                <th>CPF</th>
                                                                <th>NOME</th>
                                                                <th>TELEFONES</th>
                                                                <th>VALOR PARCELA</th>
                                                                <th>PRAZO</th>
                                                                <th>VALOR LIBERADO</th>
                                                                <th>PRODUTO</th>
                                                                <th>OBSERVAÇÃO</th>
                                                                <th>OPÇÕES</th>
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