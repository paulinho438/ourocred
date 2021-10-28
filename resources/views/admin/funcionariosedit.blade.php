@extends('admin.layout')

    
@section('name', $user->name)
    
@section('content')


                
                <div class="app-inner-layout__wrapper">
                    <div class="app-inner-layout__content">
                        <div class="tab-content">
                        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="d-flex bd-highlight">
                                            <button onclick="location.href='{{ url('painel/funcionarios') }}'" class="mb-2 mr-2 btn btn-gradient-success">VOLTAR
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body">
                                                <form action="{{url('painel/funcionarios/edit')}}/{{$funcionario->id}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="position-relative form-group"><label
                                                        for="exampleEmail" class="">Usuario</label><input
                                                        name="cpf" id="exampleEmail"
                                                        placeholder="Digite o usuario" type="text" value="{{$funcionario->cpf}}"
                                                        class="form-control"></div>
                                                    <div class="position-relative form-group"><label
                                                            for="exampleEmail" class="">Nome Completo</label><input
                                                            name="name" id="exampleEmail"
                                                            placeholder="Digite o nome do funcionario" type="text" value="{{$funcionario->name}}"
                                                            class="form-control"></div>
                                                    <div class="position-relative form-group"><label
                                                        for="exampleEmail" class="">E-mail</label><input
                                                        name="email" id="exampleEmail"
                                                        placeholder="Digite o e-mail" type="email" value="{{$funcionario->email}}"
                                                        class="form-control"></div>
                                                    
                                                    <div class="position-relative form-group">
                                                                <div>
                                                                    
                                                                    @foreach ($permissoes_funcionario as $item)
                                                                    <div class="custom-checkbox custom-control"><input name="{{$item->slug}}"
                                                                        type="checkbox" id="check-{{$item->id}}" {{(in_array($item->id, $permissoes_funcionario_ativo))?'checked':''}}
                                                                        class="custom-control-input"><label
                                                                        class="custom-control-label"
                                                                        for="check-{{$item->id}}">{{$item->nome}}</label></div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                    
                                                    
                                                    
                                                    <button class="mt-1 btn btn-primary">Editar</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
             
            



@endsection