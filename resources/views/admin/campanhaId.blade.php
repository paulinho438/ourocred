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
                            <div class="no-gutters row">
                                <div class="col-md-2 col-xl-3">
                                    <div class="widget-content">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading" style="display: flex; justify-content: center; align-items: center;"><i class="pe-7s-user" style="size: 10px; font-size: 27px; margin-right: 10px;"></i>ISOLDINO DAMIAO DE SOUZA</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-xl-2">
                                    <div class="widget-content">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading" style="display: flex; justify-content: center; align-items: center;"><i class="pe-7s-date" style="size: 10px; font-size: 27px; margin-right: 10px;"></i>69 Anos
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
                                                <div class="widget-subheading" style="position: absolute; left: 33px;">R$ 1.100,00</div>
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
                                                <div class="widget-subheading" style="position: absolute; left: 33px;">21</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-xl-2">
                                    <div class="widget-content" style="margin-bottom: 15px;">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading" style="display: flex; justify-content: center; align-items: center;"><i class="pe-7s-piggy" style="size: 10px; font-size: 27px; margin-right: 10px;"></i>Margem
                                                </div>
                                                <div class="widget-subheading" style="position: absolute; left: 33px;">R$ 85,60</div>
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
                                                            <span>Dados Bancários</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a role="tab" class="nav-link" id="tab-c-2"
                                                           data-toggle="tab" href="#tab-animated-2">
                                                            <span>Dados Cadastrais</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab-animated-0"
                                                         role="tabpanel">
                                                         <div class="card-body">
                                                            <table style="width: 100%;" id="example2"
                                                                   class="table table-hover table-striped table-bordered">
                                                                <thead>
                                                                <tr>
                                                                    <th>Banco</th>
                                                                    <th>Averbação</th>
                                                                    <th>Inicio</th>
                                                                    <th>Fim</th>
                                                                    <th>Vlr Financ.</th>
                                                                    <th>Vlr Quitação</th>
                                                                    <th>Vlr Parcela</th>
                                                                    <th>Taxa</th>
                                                                    <th>Pcl Pagas</th>
                                                                    <th>Prazo</th>
                                                                    <th>Restam</th>
                                                                    <th>N° Contrato</th>
                                                                    <th>Refin. Disponivel</th>
                                                                    <th>Port. Disponivel</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td>341 - ITAU</td>
                                                                    <td>05/10/2017</td>
                                                                    <td>11/2017</td>
                                                                    <td>10/2023</td>
                                                                    <td>R$ 589,33</td>
                                                                    <td>R$ 314,39</td>
                                                                    <td>R$ 17,03</td>
                                                                    <td>2,35%</td>
                                                                    <td>48</td>
                                                                    <td>72</td>
                                                                    <td>24</td>
                                                                    <td>0076518432020171005</td>
                                                                    <td>R$ 391,37</td>
                                                                    <td>R$ 270,09</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>341 - ITAU</td>
                                                                    <td>05/10/2017</td>
                                                                    <td>11/2017</td>
                                                                    <td>10/2023</td>
                                                                    <td>R$ 589,33</td>
                                                                    <td>R$ 314,39</td>
                                                                    <td>R$ 17,03</td>
                                                                    <td>2,35%</td>
                                                                    <td>48</td>
                                                                    <td>72</td>
                                                                    <td>24</td>
                                                                    <td>0076518432020171005</td>
                                                                    <td>R$ 391,37</td>
                                                                    <td>R$ 270,09</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>341 - ITAU</td>
                                                                    <td>05/10/2017</td>
                                                                    <td>11/2017</td>
                                                                    <td>10/2023</td>
                                                                    <td>R$ 589,33</td>
                                                                    <td>R$ 314,39</td>
                                                                    <td>R$ 17,03</td>
                                                                    <td>2,35%</td>
                                                                    <td>48</td>
                                                                    <td>72</td>
                                                                    <td>24</td>
                                                                    <td>0076518432020171005</td>
                                                                    <td>R$ 391,37</td>
                                                                    <td>R$ 270,09</td>
                                                                </tr>
                                                                
                                                                </tbody>
                                                                <tfoot>
                                                                <tr>
                                                                    <th>Banco</th>
                                                                    <th>Averbação</th>
                                                                    <th>Inicio</th>
                                                                    <th>Fim</th>
                                                                    <th>Vlr Financ.</th>
                                                                    <th>Vlr Quitação</th>
                                                                    <th>Vlr Parcela</th>
                                                                    <th>Taxa</th>
                                                                    <th>Pcl Pagas</th>
                                                                    <th>Prazo</th>
                                                                    <th>Restam</th>
                                                                    <th>N° Contrato</th>
                                                                    <th>Refin. Disponivel</th>
                                                                    <th>Port. Disponivel</th>
                                                                </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="tab-animated-1"
                                                         role="tabpanel">
                                                        <p class="mb-0">Lorem Ipsum is simply dummy text
                                                            of the
                                                            printing and typesetting industry. Lorem
                                                            Ipsum has been
                                                            the industry's standard dummy text ever
                                                            since the 1500s,
                                                            when an
                                                            unknown
                                                            printer took a galley of type and scrambled
                                                            it to make a
                                                            type specimen book. It has survived not only
                                                            five
                                                            centuries, but also the leap into electronic
                                                            typesetting, remaining essentially
                                                            unchanged. </p>
                                                    </div>
                                                    <div class="tab-pane" id="tab-animated-2"
                                                         role="tabpanel">
                                                        <p class="mb-0">It was popularised in the 1960s
                                                            with the
                                                            release of Letraset sheets containing Lorem
                                                            Ipsum
                                                            passages, and more recently with desktop
                                                            publishing
                                                            software like Aldus
                                                            PageMaker including versions of Lorem
                                                            Ipsum.</p>
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


@endsection