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
                                                    <button onclick="location.href='{{ url('painel/funcionarios/add') }}'" class="mb-2 mr-2 btn btn-gradient-success">NOVO FUNCIONARIO
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
                                                                <th>NOME</th>
                                                                <th style="width:200px;">OPÇÕES</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($usuarios as $item)
                                                                <tr>
                                                                    <td>{{$item->name}}</td>
                                                                    <td>
                                                                        <div class="d-flex bd-highlight">
                                                                            @if ($item->cpf != 'admin')
                                                                            <button onclick="location.href='{{ url('painel/funcionarios/edit') }}/{{$item->id}}'" class="mb-2 mr-2 btn btn-gradient-success">EDITAR
                                                                            </button>
                                                                            <button onclick="location.href='{{ url('painel/funcionarios/delete') }}/{{$item->id}}'" class="mb-2 mr-2 btn btn-gradient-danger">EXCLUIR
                                                                            </button>
                                                                            @endif
                                                                           
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                    
                                                                @endforeach
                                                           
                                                            </tbody>
                                                            <tfoot>
                                                            <tr>
                                                                <th>NOME</th>
                                                                <th style="width:200px;">OPÇÕES</th>
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