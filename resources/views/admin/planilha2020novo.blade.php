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
                                            <button onclick="location.href='{{ url('painel/planilha/2020') }}'" class="mb-2 mr-2 btn btn-gradient-success">VOLTAR
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body">
    
                                                <div id="smartwizard">
                                                    <ul class="forms-wizard">
                                                        <li>
                                                            <a href="#step-1">
                                                                <em>1</em><span>Informações do Cliente</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#step-2">
                                                                <em>2</em><span>Informações do Contrato</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#step-3">
                                                                <em>3</em><span>Finalização</span>
                                                            </a>
                                                        </li>
                                                    </ul>
    
                                                    <div class="form-wizard-content">
                                                        <div id="step-1">
                                                            <div class="form-row">
                                                                
                                                                <div class="col-md-3">
                                                                    <div class="position-relative form-group">
                                                                        <label for="examplePassword22">CPF</label>
                                                                        <input class="form-control input-mask-trigger" name="cpf" data-inputmask="'mask': '999.999.999-99'" im-insert="true">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <div class="position-relative form-group">
                                                                        <label for="examplePassword22">NOME</label>
                                                                        <input class="form-control" name="nome">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="position-relative form-group">
                                                                        <label for="examplePassword22">TELEFONE</label>
                                                                        <input class="form-control" name="nome">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="step-2">
                                                            <div id="accordion" class="accordion-wrapper mb-3">
                                                                <div class="card">
                                                                    <div data-parent="#accordion" id="collapseOne"
                                                                         aria-labelledby="headingOne" class="collapse show">
                                                                        <div class="card-body">
                                                                            <div class="form-row">
                                                                            <div class="col-md-2">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleEmail55">CONTRATO</label>
                                                                                    <input style="text-align: none !important;" class="form-control input-mask-trigger" name="contrato" placeholder="Digite o N° do contrato"  data-inputmask="'alias': 'decimal'" >
                                                                                </div>
                                                                            </div>
                                                                                <div class="col-md-10">
                                                                                    <div class="position-relative form-group">
                                                                                        <label for="examplePassword">BANCO</label>
                                                                                        <input class="form-control" name="banco" placeholder="Digite o Banco">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="position-relative form-group">
                                                                                <label for="exampleAddress">Address</label><input
                                                                                    name="address" id="exampleAddress"
                                                                                    placeholder="1234 Main St" type="text"
                                                                                    class="form-control"></div>
                                                                            <div class="position-relative form-group"><label
                                                                                    for="exampleAddress2">Address
                                                                                2</label><input name="address2"
                                                                                                id="exampleAddress2"
                                                                                                placeholder="Apartment, studio, or floor"
                                                                                                type="text"
                                                                                                class="form-control"></div>
                                                                            <div class="form-row">
                                                                                <div class="col-md-6">
                                                                                    <div class="position-relative form-group">
                                                                                        <label for="exampleCity">City</label><input
                                                                                            name="city" id="exampleCity"
                                                                                            type="text"
                                                                                            class="form-control"></div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="position-relative form-group">
                                                                                        <label for="exampleState">State</label><input
                                                                                            name="state" id="exampleState"
                                                                                            type="text"
                                                                                            class="form-control"></div>
                                                                                </div>
                                                                                <div class="col-md-2">
                                                                                    <div class="position-relative form-group">
                                                                                        <label for="exampleZip">Zip</label><input
                                                                                            name="zip" id="exampleZip"
                                                                                            type="text"
                                                                                            class="form-control"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="step-3">
                                                            <div class="no-results">
                                                                <div class="swal2-icon swal2-success swal2-animate-success-icon">
                                                                    <div class="swal2-success-circular-line-left"
                                                                         style="background-color: rgb(255, 255, 255);"></div>
                                                                    <span class="swal2-success-line-tip"></span>
                                                                    <span class="swal2-success-line-long"></span>
                                                                    <div class="swal2-success-ring"></div>
                                                                    <div class="swal2-success-fix"
                                                                         style="background-color: rgb(255, 255, 255);"></div>
                                                                    <div class="swal2-success-circular-line-right"
                                                                         style="background-color: rgb(255, 255, 255);"></div>
                                                                </div>
                                                                <div class="results-subtitle mt-4">Finished!</div>
                                                                <div class="results-title">You arrived at the last form
                                                                    wizard step!
                                                                </div>
                                                                <div class="mt-3 mb-3"></div>
                                                                <div class="text-center">
                                                                    <button class="btn-shadow btn-wide btn btn-success btn-lg">
                                                                        Salvar
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="divider"></div>
                                                <div class="clearfix">
                                                    <button type="button" id="reset-btn"
                                                            class="btn-shadow float-left btn btn-link">Reset
                                                    </button>
                                                    <button type="button" id="next-btn"
                                                            class="btn-shadow btn-wide float-right btn-pill btn-hover-shine btn btn-primary">
                                                        Próximo
                                                    </button>
                                                    <button type="button" id="prev-btn"
                                                            class="btn-shadow float-right btn-wide btn-pill mr-3 btn btn-outline-secondary">
                                                        Anterior
                                                    </button>
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