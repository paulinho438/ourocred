@extends('admin.layout')

    
@section('name', $user->name)
    
@section('content')
<div class="app-inner-layout__wrapper">
                            <div class="app-inner-layout__content pt-1">
                                <div class="tab-content">
                                    <div class="container-fluid">
                                        
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
                                                                    <td>{{$item->dataCriacao}}</td>
                                                                    <td>{{$item->dataFinalizacao}}</td>
                                                                    <td>{{$item->entregues}}</td>
                                                                    <td>{{$item->atendidos}}</td>
                                                                    <td>
                                                                        <div class="d-flex bd-highlight">
                                                                            <button onclick="location.href='{{ url('painel/campanha') }}/{{$item->id}}'" class="mb-2 mr-2 btn btn-gradient-success">GERENCIAR
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