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
                                            <button onclick="location.href='{{ url('paineladministrador/campanha') }}'" class="mb-2 mr-2 btn btn-gradient-success">VOLTAR
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body">
                                                <form id="administradorCampanhaAdd" action="{{url('painel/administrador/campanha/add')}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                                    <div class="col-md-7">
                                                        <div class="position-relative form-group">
                                                            <label for="examplePassword22">SELECIONE O MARKETING</label>
                                                            <select id="funcionario" name="funcionario" class="multiselect-dropdown form-control">
                                                                <option value="Indefinido">Selecione um funcionário</option>
                                                                @foreach ($funcionarios as $item)
                                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="main-card col-md-5" style="margin-bottom: 15px;">
                                                        <div class="card-body card">
                                                            <h5 class="card-title" style="margin-bottom: 49px;">Clientes disponíveis: {{count($clientes)}}</h5>
                                                            <div class="range-slider-info">
                                                                <div id="rangeslider-campanha" class="noUi-target noUi-ltr noUi-horizontal"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button class="mt-1 btn btn-primary" id="botaoAdministradorCampanhaCriar">Criar</button>
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

@section('js')

<script>
    $( document ).ready(function() {
        var rangeslidercampanha = document.getElementById('rangeslider-campanha');

        noUiSlider.create(rangeslidercampanha, {
            start: [1, {{(count($clientes) / 2)}}],
            connect: true,
            tooltips: [false, wNumb({decimals:0})],
            range: {
                'min': 1,
                'max': {{count($clientes)}}
            }
        });

        // noUiSlider.create(sliderRange31, {
        //     start: [20, 80],
        //     step: 10,
        //     connect: true,
        //     range: {
        //         'min': 0,
        //         'max': 100
        //     }
        // });
    });
</script>
    
@endsection