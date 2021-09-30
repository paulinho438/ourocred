@extends('admin.layout')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/painel/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/painel/plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/painel/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/painel/dist/css/adminlte.min.css') }}">
@endsection
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
                <div class="col"><h3 class="card-title">Relatório</h3></div>
                <div class="col-md-auto"><a href="{{url('painel')}}"class="btn btn-block btn-primary btn-sm" style="color: #FFFFFF;">Voltar</a></div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form action="{{url('painel/relatorio')}}" method="post" enctype="multipart/form-data">
                @csrf
                
                <div class="card-body">
                    <div class="row">
                        
                      <div class="col-12">
                        <div class="form-group">
                            <label>Início do relatório:</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                              </div>
                              <input type="text" name="dataInicio" value="" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label>Final do relatório :</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                              </div>
                              <input type="text" name="dataFinal" value="" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false">
                            </div>
                        </div>   
                        <div class="form-group">
                          <label>Comorbidade</label>
                          <select class="form-control select2" name="comorbidade" style="width: 100%;">
                            <option selected value="">Selecione um item</option>
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
                          <div>
                          <div class="card-body">
                            <div class="row">
                              <div class="col-sm-6">
                                <!-- checkbox -->
                                <div class="form-group clearfix">
                                  <div class="icheck-primary d-inline">
                                    <input type="checkbox" id="checkboxPrimary1" name="excel">
                                    <label for="checkboxPrimary1">
                                    </label>
                                  </div>
                                  <label for="checkboxPrimary3">
                                    Relatório em excel
                                  </label>
                                  
                                </div>
                              </div>
                              
                            </div>
                          </div>
                          {{-- <div class="card-body">
                            <!-- Minimal style -->
                            <div class="row">
                              <div class="col-sm-6">
                                <!-- checkbox -->
                                <div class="form-group clearfix">
                                  <div class="icheck-primary d-inline">
                                    <input type="checkbox" id="checkboxPrimary1" name="fs" checked="">
                                    <label for="checkboxPrimary1">
                                    </label>
                                  </div>
                                  <label for="checkboxPrimary3">
                                    Quantidade de Funcionários da Saúde
                                  </label>
                                  
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <!-- radio -->
                               
                              </div>
                            </div>
                            <!-- Minimal red style -->
                            <div class="row">
                              <div class="col-sm-6">
                                <!-- checkbox -->
                                <div class="form-group clearfix">
                                  <div class="icheck-danger d-inline">
                                    <input type="checkbox" checked="" name="pf" id="checkboxDanger1">
                                    <label for="checkboxDanger1">
                                    </label>
                                  </div>
                                  <label for="checkboxDanger3">
                                    Quantidade de pessoas que faltaram
                                  </label>
                                  
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <!-- radio -->
                               
                              </div>
                            </div>
                            <!-- Minimal red style -->
                            <div class="row">
                              <div class="col-sm-6">
                                <!-- checkbox -->
                                <div class="form-group clearfix">
                                  <div class="icheck-success d-inline">
                                    <input type="checkbox" name="pt" checked="" id="checkboxSuccess1">
                                    <label for="checkboxSuccess1">
                                    </label>
                                  </div>
                                  <label for="checkboxSuccess3">
                                    Quantidade de Pessoas que tomaram a vacina  
                                  </label>
                                  
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <!-- radio -->
                                
                              </div>
                            </div>
                          </div> --}}
                        </div>
                        <!-- /.form-group -->
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->
                  </div>
                  <button type="submit" target="_blank" class="btn btn-sm btn-success ">Gerar relatório</button>
                
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
    
@endsection
@section('js')
<script src="{{url('assets/painel/plugins/select2/js/select2.full.min.js')}}"></script>
<script src="{{url('assets/painel/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<script src="{{url('assets/painel/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')}}"></script>
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
      $('.duallistbox').bootstrapDualListbox();
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
            'Hoje'       : [moment(), moment()],
            'Ontem'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Últimos 7 dias' : [moment().subtract(6, 'days'), moment()],
            'Últimos 30 dias': [moment().subtract(29, 'days'), moment()],
            'Este mês'  : [moment().startOf('month'), moment().endOf('month')],
            'Mês passado'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
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