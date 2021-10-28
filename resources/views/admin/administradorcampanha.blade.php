@extends('admin.layout')

    
@section('name', $user->name)
    
@section('content')
<?php


?>
<div class="app-inner-layout__wrapper">
                            <div class="app-inner-layout__content pt-1">
                                <div class="tab-content">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="d-flex flex-row-reverse bd-highlight">
                                                    <button onclick="location.href='{{ url('painel/administrador/campanha/add') }}'" class="mb-2 mr-2 btn btn-gradient-success">NOVA CAMPANHA
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
                                                                <th>OPERADOR</th>
                                                                <th>CRIAÇÃO</th>
                                                                <th>FINALIZAÇÃO</th>
                                                                <th>ENTREGUES</th>
                                                                <th>ATENDIDOS</th>
                                                                <th>OPÇÕES</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($campanha as $item)
                                                                <tr>
                                                                    <td>{{$item->nome_operador}}</td>
                                                                    <td>{{date("d/m/Y h:i", strtotime($item->dataCriacao))}}</td>
                                                                    <td>{{($item->dataFinalizacao != '0000-00-00 00:00:00')?date("d/m/Y h:i", strtotime($item->dataFinalizacao)):'00/00/0000 00:00'}}</td>
                                                                    <td>{{$item->entregues}}</td>
                                                                    <td>{{$item->atendidos}}</td>
                                                                    <td>
                                                                        <div class="d-flex bd-highlight">
                                                                            <button onclick="location.href='{{ url('painel/campanha') }}/{{$item->id}}/atendimento/1'" class="mb-2 mr-2 btn btn-gradient-success">EDITAR
                                                                            </button>
                                                                            <button onclick="location.href='{{ url('painel/planilha/2020/novo') }}'" class="mb-2 mr-2 btn btn-gradient-danger">EXCLUIR
                                                                            </button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                    
                                                                @endforeach
                                                           
                                                            </tbody>
                                                            <tfoot>
                                                            <tr>
                                                                <th>OPERADOR</th>
                                                                <th>CRIAÇÃO</th>
                                                                <th>FINALIZAÇÃO</th>
                                                                <th>ENTREGUES</th>
                                                                <th>ATENDIDOS</th>
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