<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{url('assets/css/style.css')}}" rel="stylesheet" media="print" />
    
</head>
<body>
    <div class="print_content">
        <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>Cpf</th>
                  <th>Data de nascimento</th>
                  <th>Telefone</th>
                  <th>Cep</th>
                  <th>Cidade</th>
                  <th>Bairro</th>
                  <th>Endereco</th>
                  <th>Altura</th>
                  <th>Peso</th>
                  <th>E-Mail</th>
                  <th>Comorbidade</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($vacina as $item)
                  <tr style="color:black;">
                    <td>{{$item->nome}}</td>
                    <td>{{$item->cpf}}</td>
                    <td>{{$item->nascimento}}</td>
                    <td>{{$item->telefone}}</td>
                    <td>{{$item->cep}}</td>
                    <td>{{$item->cidade}}</td>
                    <td>{{$item->bairro}}</td>
                    <td>{{$item->endereco}}</td>
                    <td>{{$item->altura}}</td>
                    <td>{{$item->peso}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->comorbidade}}</td>
                  </tr>  
                @endforeach
                        
                    
              </tbody>
              
            </table>
           
            
          </div>
    </div>

    <script type="text/javascript">
        window.addEventListener("load", window.print());
    </script>
</body>
</html>