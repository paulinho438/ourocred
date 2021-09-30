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
        

        <div class="body" style="flex:2;">
          <div class="bodyA">
              <div class="bodyATitle" style="font-size:19px;">Confirmação de cadastramento de paciente com comorbidade</div>
              <div class="bodyAConteudo">
                  <h6 >Seu código de confirmação</h6>
                  <p>{{$info['protocolo']}}</p>
                  <p>Cadastramento Realizado</p>
                  <a target="_blank" href="/pdf?nome={{$info['nome']}}&cpf={{$info['cpf']}}&nascimento={{$info['nascimento']}}&protocolo={{$info['protocolo']}}" class="btn btn-success btn-sm" style="width: 100px; height: 32px; margin-left: 10px;">DOWNLOAD</a>
                  
              
              </div>
          </div>
          <div class="bodyB">

              <img style="box-shadow: 0px 5px 7px rgb(0 0 0 / 22%); width:800px;" src="{{ asset('assets/img/documento.jpg') }}">

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
<!-- Option 1: Bootstrap Bundle with Popper -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
{{-- <script>
    $(window).on("load", function(){
        $('#exampleModalCenter').modal('show')
    });
    $('#sair').on('click', function(){
        $('#exampleModalCenter').modal('hide')
    });
</script> --}}
</body>
</html>