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
                                            <button onclick="location.href='{{ url('painel/planilha/2021/novas_vendas_2021') }}'" class="mb-2 mr-2 btn btn-gradient-success">VOLTAR
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body">
                                            <form action="{{url('painel/planilha/2021/novas_vendas_2021/novo')}}" method="post" enctype="multipart/form-data">
                                                @csrf
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
                                                                        <input autocomplete="off" class="form-control input-mask-trigger" name="cpf" data-inputmask="'mask': '999.999.999-99'" im-insert="true" placeholder="Digite o CPF do cliente">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <div class="position-relative form-group">
                                                                        <label for="examplePassword22">NOME</label>
                                                                        <input autocomplete="off" class="form-control" name="nome" placeholder="Digite o nome do cliente">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="position-relative form-group">
                                                                        <label for="examplePassword22">TELEFONES</label>
                                                                        <input autocomplete="off" class="form-control" name="telefones" placeholder="Digite os telefones do cliente separando-os por ( , )">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                
                                                                <div class="col-md-3">
                                                                    <div class="position-relative form-group">
                                                                        <label for="examplePassword22">DT NASCIMENTO</label>
                                                                        <input autocomplete="off" placeholder="Digite a data de nascimento" name="dtNascimento" class="form-control input-mask-trigger" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" im-insert="false">
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
                                                                                <div class="col-md-4">
                                                                                    <div class="position-relative form-group">
                                                                                        <label for="examplePassword22">SELECIONE O USUARIO</label>
                                                                                        <select name="usuario" class="multiselect-dropdown form-control">
                                                                                            <option value="Indefinido">Selecione o usuário</option>
                                                                                            <option value="FABIO.BA">FABIO.BA</option>
                                                                                            <option value="FONTES13600T ">FONTES13600T </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                
                                                                            </div>
                                                                            <div class="form-row">
                                                                                <div class="col-md-2">
                                                                                    <div class="position-relative form-group">
                                                                                        <label for="exampleEmail55">CONTRATO</label>
                                                                                        <input autocomplete="off" style="text-align: none !important;" class="form-control input-mask-trigger" name="contrato" placeholder="Digite o N° do contrato"  data-inputmask="'alias': 'decimal'" >
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <div class="position-relative form-group">
                                                                                        <label for="examplePassword22">DT CONTRATO</label>
                                                                                        <input autocomplete="off" placeholder="dd/mm/yyyy" name="dataContrato" class="form-control input-mask-trigger" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" im-insert="false">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-7">
                                                                                    <div class="position-relative form-group">
                                                                                        <label for="examplePassword22">SELECIONE O BANCO</label>
                                                                                        <select name="banco" class="multiselect-dropdown form-control">
                                                                                            <option value="Indefinido">Selecione um banco</option>
                                                                                            <option value="394 - BCO BRADESCO FINANC. S.A.">394 - BCO BRADESCO FINANC. S.A.</option>
                                                                                            <option value="BCO BRADESCO S.A.">BCO BRADESCO S.A.</option>
                                                                                            <option value="ITAU UNIBANCO S.A.">ITAU UNIBANCO S.A.</option>
                                                                                            <option value="CAIXA ECONOMICA FEDERAL">CAIXA ECONOMICA FEDERAL</option>
                                                                                            <option value="237 - BCO BRADESCO S.A.">237 - BCO BRADESCO S.A.</option>
                                                                                            <option value="BCO DO NORDESTE DO BRASIL S.A.">BCO DO NORDESTE DO BRASIL S.A.</option>
                                                                                            <option value="422 - BCO SAFRA S.A">422 - BCO SAFRA S.A</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                
                                                                            </div>
                                                                            <div class="form-row">
                                                                                <div class="col-md-3">
                                                                                    <div class="position-relative form-group">
                                                                                        <label for="examplePassword22">VALOR PARCELA</label>
                                                                                        <input autocomplete="off" class="form-control" name="valorParcela" placeholder="Digite o valor da parcela">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <div class="position-relative form-group">
                                                                                        <label for="examplePassword22">Qt PARCELA</label>
                                                                                        <input class="form-control" name="prazo" placeholder="Digite a quantidade de parcelas">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <div class="position-relative form-group">
                                                                                        <label for="examplePassword22">VALOR LIBERADO</label>
                                                                                        <input autocomplete="off" class="form-control" name="valorLiberado" placeholder="Digite o valor liberado">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-row">
                                                                                <div class="col-md-12">
                                                                                    <div class="position-relative form-group">
                                                                                        <label for="examplePassword22">SELECIONE O PRODUTO</label>
                                                                                        <select name="produto" class="multiselect-dropdown form-control">
                                                                                            <option value="Indefinido">Selecione um produto</option>
                                                                                            <option value="006007 - VD_INSS">006007 - VD_INSS</option>
                                                                                            <option value="011596 - VD_INSS - 120 DIAS">011596 - VD_INSS - 120 DIAS</option>
                                                                                            <option value="006859 - VD_ REFIN INSS ESP">006859 - VD_ REFIN INSS ESP</option>
                                                                                            <option value="006858 - VD_REFIN INSS">006858 - VD_REFIN INSS</option>
                                                                                            <option value="009411 - VD_PORTABILIDADE INSS ÚNICO">009411 - VD_PORTABILIDADE INSS ÚNICO</option>
                                                                                            <option value="012248 - VD_COMP PORTAB INSS RISCO ÚNICO">012248 - VD_COMP PORTAB INSS RISCO ÚNICO</option>
                                                                                            <option value="EMPRÉSTIMO">EMPRÉSTIMO</option>
                                                                                            <option value="REFINANCIAMENTO">REFINANCIAMENTO</option>
                                                                                            <option value="Indefinido">MARGEM COMPLEMENTAR</option>
                                                                                            <option value="SAQUE COMPLEMENTAR">SAQUE COMPLEMENTAR</option>
                                                                                            <option value="VENDA PRÉ - ADESÃO">VENDA PRÉ - ADESÃO</option>
                                                                                            <option value="INSS - REFIN">INSS - REFIN</option>
                                                                                            <option value="INSS - MARGEM">INSS - MARGEM</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-row">
                                                                                <div class="col-md-12">
                                                                                    <div class="position-relative form-group">
                                                                                        <label for="examplePassword22">DIGITE AS OBSERVAÇÕES</label>
                                                                                        <textarea name="observacao" rows="1" class="form-control autosize-input" style="max-height: 200px; height: 38px;"></textarea>
                                                                                    </div>
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
                                                                <div class="results-subtitle mt-4">Finalizada!</div>
                                                                <div class="results-title">Você chegou à última etapa do assistente de formulário!
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
                                            </form>
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