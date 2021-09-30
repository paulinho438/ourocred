<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plano de vacinação contra covid-19</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style2.css') }}">
</head>
<body>
    <div class="geral">
        <div class="header">
            <a href="/" ><img src="{{ asset('assets/img/valparaiso.png') }}"></a>
        </div>
        <div class="body">
            <a href="/" class="btn btn-success btn-sm" style="width: 60px; height: 32px; margin-left: 10px;">Voltar</a>

           
            <div class="bodyB">

                <div class="formulario">

                    <form method="POST" action="/cadastro">
                        @csrf
                        <div class="form-group">
                          <input required type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nome" placeholder="Nome Completo *">
                          <small id="" class="form-text text-muted"></small>
                        </div>
                        <br/>
                        <div class="form-group">
                            <input required type="text" class="form-control cpf" id="cpf" aria-describedby="emailHelp" data-mask="000.000.000-00" name="cpf" placeholder="CPF *">
                            <small id="" class="form-text text-muted"></small>
                          </div>
                          <br/>
                        <div class="form-group">
                            <input required type="text" class="form-control" id="birth-date" aria-describedby="emailHelp" data-mask="00/00/0000" name="nascimento" placeholder="Data de Nascimento *">
                          </div>
                        <br/>

                          <div class="form-group">
                            <input required type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" data-mask="(00) 0 0000-0000" name="telefone" placeholder="Telefone *">
                          </div>
                        <br/>

                          <div class="form-group">
                            <input required type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" data-mask="00000-000" name="cep" placeholder="CEP *">
                          </div>
                          <br/>

                          <div class="form-group">
                            <input required type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cidade" placeholder="Cidade *">
                          </div>
                          <br/>

                          <div class="form-group">
                            <input required type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="endereco" placeholder="Endereço *">
                          </div>
                          <br/>

                          <div class="form-group">
                            <input required type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="bairro" placeholder="Bairro *">
                          </div>
                          <br/>

                          <div class="form-group">
                            <input required type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="altura" placeholder="Altura *">
                          </div>
                          <br/>

                          <div class="form-group">
                            <input  required type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="peso" placeholder="Peso *">
                          </div>
                          <br/>

                          <div class="form-group">
                            <input required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="E-Mail *">
                          </div>
                          <br/>

                          

                          <div class="form-group">
                            <label for="exampleFormControlSelect1">Comorbidade *</label>
                            <select required class="form-control" style="background-color: #fff;" data-val="true" data-val-number="The field Comorbidade must be a number." data-val-required="O campo Comorbidade é obrigatório." id="cod_categoria_grupo_prioritario" name="comorbidade"><option value=""></option>
                                <option selected value="">Selecione uma opção</option>                                   
                                <option value="Anemia Falciforme">Anemia Falciforme</option>
                                <option value="Arritmias Cardíacas">Arritmias Cardíacas</option>
                                <option value="Cardiopatia Hipertensiva">Cardiopatia Hipertensiva</option>
                                <option value="Cardiopatias Congênita no Adulto">Cardiopatias Congênita no Adulto</option>
                                <option value="Cirrose Hepática">Cirrose Hepática</option>
                                <option value="Cor-pulmonale e Hipertensão Pulmonar">Cor-pulmonale e Hipertensão Pulmonar</option>
                                <option value="Diabetes Mellitus">Diabetes Mellitus</option>
                                <option value="Doença Cerebrovascular">Doença Cerebrovascular</option>
                                <option value="Doença Renal Crônica">Doença Renal Crônica</option>
                                <option value="Doenças da Aorta, dos Grandes Vasos e Fístulas Arteriovenosas">Doenças da Aorta, dos Grandes Vasos e Fístulas Arteriovenosas</option>
                                <option value="Gravidez ou Puerpério COM Comorbidade">Gravidez ou Puerpério COM Comorbidade</option>
                                <option value="Gravidez SEM Comorbidade">Gravidez SEM Comorbidade</option>
                                <option value="Hipertensão Arterial">Hipertensão Arterial</option>
                                <option value="Imunossuprimidos">Imunossuprimidos</option>
                                <option value="Insuficiência Cardíaca (IC)">Insuficiência Cardíaca (IC)</option>
                                <option value="Miocardiopatias e Pericardiopatias">Miocardiopatias e Pericardiopatias</option>
                                <option value="Obesidade Mórbida">Obesidade Mórbida</option>
                                <option value="Pessoas com Deficiência Inscritas no BPC">Pessoas com Deficiência Inscritas no BPC</option>
                                <option value="Pneumopatias Crônicas Graves">Pneumopatias Crônicas Graves</option>
                                <option value="Pós-parto até 2 meses após o Parto (Puerpério)">Pós-parto até 2 meses após o Parto (Puerpério)</option>
                                <option value="Próteses Valvares e Dispositivos Cardíacos Implantados">Próteses Valvares e Dispositivos Cardíacos Implantados</option>
                                <option value="Síndrome de Down">Síndrome de Down</option>
                                <option value="Síndromes Coronarianas">Síndromes Coronarianas</option>
                                <option value="Valvopatias">Valvopatias</option>
                            </select>
                          </div>


                        
                       
                        <button type="submit" style="margin-top: 20px;" class="btn btn-success">Cadastrar</button>
                      </form>

                </div>

            </div>
        </div>
        <footer class="" >

            
            <div class="dev">
                <div class="veloster">
                    <p>Desenvolvido por: Veloster Tecnologia (61) 9 8484-7154</p>
                </div>
            
            <div class="veloster">
                <img style="width: 146px;height: 50px;" src="{{ asset('assets/img/logo2.jpg') }}">
                <img style="width: 81px;" src="{{ asset('assets/img/logoveloster.jpg') }}">
            </div>
            
        </footer>

    </div>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Informativo</h5>
              </button>
            </div>
            <div class="modal-body">
                <p>Secretaria de Saúde de Valparaíso de Goiás alerta que, se a veracidade dos dados informados no momento do agendamento não for comprovada por meio de documentos comprobatórios e do formulário preenchido, carimbado e assinado pelo médico, o ato será passível de denúncia junto ao Ministério Público do Goiás (MP-GO), A aplicação da segunda dose está condicionada à apresentação do cartão de vacinas, com a comprovação da primeira dose.</p>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal" id="sair">Ciente</button>
            </div>
          </div>
        </div>
      </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="http://code.jquery.com/qunit/qunit-1.11.0.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
<script src="{{ asset('assets/js/jquery.mask.js') }}"></script>
<script src="{{ asset('assets/js/jquery.mask.test.js') }}" ></script>
<script>
    // $(window).on("load", function(){
    //     $('#exampleModalCenter').modal('show')
    // });
    // $('#sair').on('click', function(){
    //     $('#exampleModalCenter').modal('hide')
    // });
   
</script>
</body>
</html>
<link rel="stylesheet" href="{{ asset('assets/css/style2.css') }}">