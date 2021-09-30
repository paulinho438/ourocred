@extends('admin.layout')

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          {{-- <h1 class="m-0 text-dark">Dashboard v2</h1> --}}
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            {{-- <li class="breadcrumb-item"><a href="#">Home</a></li> --}}
            {{-- <li class="breadcrumb-item active">Dashboard v2</li> --}}
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
         

          <div class="card">
            <div class="card-header">
              <div class="row">
                <div class="col"><h3 class="card-title">Novo Local </h3></div>
                <div class="col-md-auto"><a href="{{url('painel')}}"class="btn btn-block btn-primary btn-sm" style="color: #FFFFFF;">Voltar</a></div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form action="{{url('painel/contrato/add')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nome Completo</label>
                      <input required type="text" name="nome" class="form-control" id="exampleInputEmail1" placeholder="Digite o seu nome completo">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Telefone</label>
                    <input required  type="text" name="telefone" class="form-control" id="exampleInputEmail1" data-mask="(00) 0 0000-0000" placeholder="Digite o telefone">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">RG</label>
                    <input required  type="text" name="rg" class="form-control" id="exampleInputEmail1" data-mask="0.000.000" placeholder="Digite o RG">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">SSP</label>
                    <input required  type="text"  name="ssp" class="form-control" id="exampleInputEmail1" placeholder="Digite só o estado">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">CPF</label>
                    <input required  type="text" name="cpf" class="form-control  cpf" id="cpf" aria-describedby="emailHelp" data-mask="000.000.000-00"  placeholder="Digite o CPF">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Matricula</label>
                    <input required  type="text" name="matricula" class="form-control" id="exampleInputEmail1" placeholder="Digite a Matricula">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">E-mail</label>
                    <input required  type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o E-mail">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Data de nascimento</label>
                    <input required  type="date" name="nascimento" class="form-control" id="exampleInputEmail1" placeholder="Digite a data de nascimento">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Data do contrato</label>
                    <input required  type="date" name="dtContrato" class="form-control" id="exampleInputEmail1" placeholder="Digite a data do contrato">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Valor</label>
                    <input required  type="text"  name="valor" class="form-control" id="exampleInputEmail1" placeholder="Digite o valor">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Parcelas</label>
                    <input required  type="text"  name="parcelas" class="form-control" id="exampleInputEmail1" placeholder="Digite o numero de parcelas">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Banco</label>
                    <input required  type="text"  name="banco" class="form-control" id="exampleInputEmail1" placeholder="Digite o banco">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Agencia</label>
                    <input required  type="text"  name="parcelas" class="form-control" id="exampleInputEmail1" placeholder="Digite a agencia">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Conta</label>
                    <input required  type="text"  name="parcelas" class="form-control" id="exampleInputEmail1" placeholder="Digite o numero da conta">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Tipo de conta</label>
                    <input required  type="text"  name="parcelas" class="form-control" id="exampleInputEmail1" placeholder="Poupança ou Conta corrente">
                    </div>
                   
                    <button type="submit" class="btn btn-sm btn-success ">Salvar</button>

                  </div>
            
            
            
            
            
                </div>
              </form>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="http://code.jquery.com/qunit/qunit-1.11.0.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
<script src="{{ asset('assets/js/jquery.mask.js') }}"></script>
<script src="{{ asset('assets/js/jquery.mask.test.js') }}" ></script>
    
@endsection
@section('js')
<script src="{{url('assets/painel/plugins/select2/js/select2.full.min.js')}}"></script>
<script src="{{url('assets/painel/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<script src="{{url('assets/painel/plugins/inputmask/min/jquery.inputmask.bundle.min.js')}}"></script>

<script>
  
    $(function () {
      bsCustomFileInput.init();
      $('#customSwitch1').on('click', function(){
        if(!$('#customSwitch1').is(":checked")){
          $("#textarea1").attr("disabled", true);
        }else{
          $("#textarea1").attr("disabled", false);
        }
      });
      $('#customSwitch2').on('click', function(){
        if(!$('#customSwitch2').is(":checked")){
          $("#textarea2").attr("disabled", true);
        }else{
          $("#textarea2").attr("disabled", false);
        }
      });
      $('#customSwitch3').on('click', function(){
        if(!$('#customSwitch3').is(":checked")){
          $("#textarea3").attr("disabled", true);
        }else{
          $("#textarea3").attr("disabled", false);
        }
      });
      $('#customSwitch4').on('click', function(){
        if(!$('#customSwitch4').is(":checked")){
          $("#textarea4").attr("disabled", true);
        }else{
          $("#textarea4").attr("disabled", false);
        }
      });
      $('#customSwitch5').on('click', function(){
        if(!$('#customSwitch5').is(":checked")){
          $("#textarea5").attr("disabled", true);
        }else{
          $("#textarea5").attr("disabled", false);
        }
      });
      $('#customSwitch6').on('click', function(){
        if(!$('#customSwitch6').is(":checked")){
          $("#textarea6").attr("disabled", true);
        }else{
          $("#textarea6").attr("disabled", false);
        }
      });
      $('#customSwitch7').on('click', function(){
        if(!$('#customSwitch7').is(":checked")){
          $("#textarea7").attr("disabled", true);
        }else{
          $("#textarea7").attr("disabled", false);
        }
      });
     
      //Initialize Select2 Elements
      $('.select2').select2()
  
      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      })
  
      //Datemask dd/mm/yyyy
      $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
      //Datemask2 mm/dd/yyyy
      $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
      //Money Euro
      $('[data-mask]').inputmask()
  
      //Date range picker
      $('#reservationdate').datetimepicker({
          format: 'L'
      });
      //Date range picker
      $('#reservation').daterangepicker()
      //Date range picker with time picker
      $('#reservationtime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
          format: 'MM/DD/YYYY hh:mm A'
        }
      })
      //Date range as a button
      $('#daterange-btn').daterangepicker(
        {
          ranges   : {
            'Today'       : [moment(), moment()],
            'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month'  : [moment().startOf('month'), moment().endOf('month')],
            'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate  : moment()
        },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        }
      )
  
      //Timepicker
      $('#timepicker').datetimepicker({
        format: 'LT'
      })
      
      //Bootstrap Duallistbox
      $('.duallistbox').bootstrapDualListbox()
  
      //Colorpicker
      $('.my-colorpicker1').colorpicker()
      //color picker with addon
      $('.my-colorpicker2').colorpicker()
  
      $('.my-colorpicker2').on('colorpickerChange', function(event) {
        $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
      });
  
      $("input[data-bootstrap-switch]").each(function(){
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
      });

      
  
    })
  </script>
    
@endsection