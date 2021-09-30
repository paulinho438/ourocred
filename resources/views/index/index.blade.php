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
            <a href="/cadastro" ><img src="{{ asset('assets/img/botao.png') }}"></a>
            <img style="width: 113px;height: 95px; " src="{{ asset('assets/img/corona.png') }}">
            <a href="/" ><img src="{{ asset('assets/img/valparaiso.png') }}"></a>

        </div>
        <div class="body">
            <div class="bodyA">
                <div class="bodyATitle"><img src="{{ asset('assets/img/img.jpg') }}"></div>
                <div class="bodyAConteudo">
                    <h6>Informações Importantes para Pacientes com Comorbidades</h6>
                    <p align="justify">Cadastramento de Pacientes Portadores de Comorbidades, em <strong>"Quero me cadastrar"</strong>
                        </p>
                    <br/>
                    <p align="justify">Ao final do cadastramento, o sistema vai gerar a ficha de Registro com o protocolo.
                    </p>
                    <br/>
                    <p align="justify">Os indivíduos pertencentes ao grupo de comorbidades deverão apresentar obrigatoriamente, os seguintes documentos no ato da vacinação:<br/> 
                        - CPF. <br/>
                        - Cópia e original de relatório/formulário médico descrevendo a comorbidade conforme descrito no quadro 1 do documento disponível abaixo para download ou prescrição médica da vacina com a indicação da comorbidade, conforme padronizado pela Secretaria de Estado da Saúde <a href="https://www.saude.go.gov.br">(https://www.saude.go.gov.br/)</a>.<br/>
                        OBS: Os documentos comprobatórios só serão aceitos com a data de até 12 meses após serem emitidos pelo médico.<br/>
                        <br/>
                        Na fase I - De acordo com o quantitativo de doses disponibilizadas: pessoas com Síndrome de Down com 18 anos ou mais; pessoas com doença renal crônica em terapia de substituição renal (diálise), com idade de 18 anos ou mais; gestantes e puérperas com comorbidades com 18 anos ou mais, pessoas com comorbidades de 18 a 59 anos e pessoas com deficiência permanente de 18 a 59 anos.</p>
                    
                </div>
                
            </div>
            <div style="margin-top: 100px;" class="bodyA"><img style="width: 555px; box-shadow: 0px 5px 7px rgb(0 0 0 / 22%);" src="{{ asset('assets/img/documento.jpg') }}"></div>
            
             
        </div>
        <a target="_blank" href="{{ asset('download/NOTA.pdf') }}" class="btn btn-success btn-sm" style="width: 623px; height: 32px;margin-bottom: 20px; margin-left: 10px;">Descrição das comorbidades incluídas como prioritárias para vacinação contra a Covid-19</a>
        <p style="margin-left: 20px;"><strong>IMPORTANTE:</strong> Para agilizar o atendimento no dia da vacinação, é obrigatório o paciente portar <strong>CÓPIA E ORIGINAL</strong> do Relatório ou Formulário ou Prescrição Médica da vacina indicando a comorbidade, carimbada e assinada pelo médico com validade de 12 meses. A unidade reterá a cópia.</p>
        
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
                <p>Secretaria de Saúde de Valparaíso de Goiás alerta que, se a veracidade dos dados informados no momento do cadastro não for comprovada por meio de documentos comprobatórios e do formulário preenchido, carimbado e assinado pelo médico, o ato será passível de denúncia junto ao Ministério Público do Goiás (MP-GO), A aplicação da segunda dose está condicionada à apresentação do cartão de vacinas, com a comprovação da primeira dose.</p>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal" id="sair">Ciente</button>
            </div>
          </div>
        </div>
      </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<!-- Option 1: Bootstrap Bundle with Popper -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
<script>
    $(window).on("load", function(){
        $('#exampleModalCenter').modal('show')
    });
    $('#sair').on('click', function(){
        $('#exampleModalCenter').modal('hide')
    });
</script>
</body>
</html>