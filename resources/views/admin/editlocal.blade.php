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
                <div class="col"><h3 class="card-title">Editar Local </h3></div>
                <div class="col-md-auto"><a href="{{url('painel')}}"class="btn btn-block btn-primary btn-sm" style="color: #FFFFFF;">Voltar</a></div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form action="{{url('painel/local/edit')}}/{{$data['id']}}" method="post" enctype="multipart/form-data">
                @csrf
                
                <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nome</label>
                      <input type="text" name="name" value="{{$data['name']}}" class="form-control" id="exampleInputEmail1" placeholder="Digite o nome do local">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Endereço</label>
                    <input type="text" name="address" value="{{$data['address']}}" class="form-control" id="exampleInputEmail1" placeholder="Digite o endereço">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Cep</label>
                    <input type="text"  name="cep" value="{{$data['cep']}}" class="form-control" id="exampleInputEmail1" placeholder="Digite o cep">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputFile">Imagem do local</label>
                    <div class="input-group">
                        <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">{{$data['avatar']}}</label>
                        </div>
                        <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                        <label>Período de vacinação Início :</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                          </div>
                          <input type="text" name="dataInicio" value="{{date('d/m/Y', strtotime($data['dataInicio']))}}" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Período de vacinação Final :</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                          </div>
                          <input type="text" name="dataFinal" value="{{date('d/m/Y', strtotime($data['dataFinal']))}}" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false">
                        </div>
                    </div>   
                   @for ($i = 0; $i <= 6; $i++)
                      @if (isset($days[$i]))
                      <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                        <input type="checkbox" name="{{$days_c[$i]['slug']}}" value="{{$days[$i]['id']}}" checked="checked"class="custom-control-input" id="{{$days_c[$i]['custom']}}">
                        <label class="custom-control-label" for="{{$days_c[$i]['custom']}}">{{$days_c[$i]['name']}}</label>
                      </div>
                      @else
                      <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                        <input type="checkbox" name="{{$days_c[$i]['slug']}}" value="on" class="custom-control-input" id="{{$days_c[$i]['custom']}}">
                        <label class="custom-control-label" for="{{$days_c[$i]['custom']}}">{{$days_c[$i]['name']}}</label>
                      </div>
                      @endif    

                   @endfor
                    
                    <div class="col-sm-6">
                      <!-- textarea -->
                      @for ($i = 0; $i <= 6; $i++)
                          @if (isset($days[$i]))
                          <div class="form-group">
                            <label>{{$days_c[$i]['name']}}</label>
                            <textarea class="form-control" name="{{$days_c[$i]['slug2']}}" rows="3" id="{{$days_c[$i]['text']}}">{{$days[$i]['hours']}}</textarea>
                          </div>
                          @else
                          <div class="form-group">
                            <label>{{$days_c[$i]['name']}}</label>
                            <textarea class="form-control" name="{{$days_c[$i]['slug2']}}" rows="3" id="{{$days_c[$i]['text']}}" disabled></textarea>
                          </div>
                          @endif
                      @endfor
                      
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