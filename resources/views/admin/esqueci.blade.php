<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Vacina Val | Esqueci Minha Senha</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/painel/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('assets/painel/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/painel/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="{{ asset('assets/painel/dist/css/adminlte.min.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <img src="{{ asset('assets/img/val-p.png') }}" style="width:100%; margin-bottom:50px;" class="elevation-3" style="opacity: .8">
      
      @if ($error != '')
      <p class="login-box-msg">{{$error}}</p>
      @else()
      <p class="login-box-msg">Digite sua nova senha!</p>
      <p class="login-box-msg">Ela só pode ser número e no máximo 6 digitos!</p>
     
      @if ($errors->any())
        @foreach ($errors->all() as $error)
        <p style="color:red" class="login-box-msg">{{$error}}</p>
        @endforeach            
      @endif
       
      <form action="{{ url('/esqueciminhasenha') }}" method="post">
        @csrf
        
        <input type="hidden" name="token" value="{{$token}}" />
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Digite a nova senha">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password_confirmation" class="form-control" placeholder="Confirme sua senha">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Alterar senha</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      @endif
      

     

    
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('assets/painel/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/painel/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script href="{{ asset('assets/painel/plugins/dist/js/adminlte.min.js') }}"></script>

</body>
</html>
