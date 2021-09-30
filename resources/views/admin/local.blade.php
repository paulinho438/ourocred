@extends('admin.layout')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/painel/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/painel/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">
@endsection
@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
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
                <div class="col"><h3 class="card-title">{{$data->name}}</h3></div>
                <div class="col-md-auto"><a href="{{url('painel')}}"class="btn btn-block btn-primary btn-sm" style="color: #FFFFFF;">Voltar</a></div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="example1_length"></div></div><div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter"></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row"><th class="sorting_desc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Nome</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Cpf</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Cep</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Endereço</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Data de nascimento</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Telefone</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Agendamento</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Profissional da saúde</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="" aria-label="Platform(s): activate to sort column ascending">Grupo Prioritário</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="" aria-label="Platform(s): activate to sort column ascending">Lote</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="" aria-label="Platform(s): activate to sort column ascending">Responsável Aplicação</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="" aria-label="Platform(s): activate to sort column ascending">Compareceu ?</th></tr>
                </thead>
                <tbody>
                
                
                @foreach ($data->appointments as $item)
                <tr role="row" class="odd">
                  <td tabindex="0" class="sorting_1" style="width: 100px;">{{$item->name}}</td>
                  <td>{{$item->cpf}}</td>
                  <td>{{$item->zipcode}}</td>
                  <td>{{$item->address}}</td>
                  <td>{{$item->birthday}}</td>
                  <td>{{$item->tell}}</td>
                  <td>{{date_format(date_create($item->ap_datetime), 'd/m/Y H:i')}}</td>
                  <td>{{($item->profissional == 1)?'Sim':'Não'}}</td>
                  <td>{{$item->grupo_prioritario}}</td>
                  <td>{{$item->lote}}</td>
                  <td>{{$item->responsavel_aplicacao}}</td>
                  
                  <td>
                    @if ($item->status == 0)
                    <div class="btn-group" style="width: 204px;">
                      <form method="POST" action="check-y">
                        @csrf
                        <select style="margin-bottom: 8px;" name="compareceu">
                          <option value="1">Sim</option>
                          <option value="2">Não</option>
                        </select>
                      <input style="margin-bottom: 5px;" type="hidden" name="local_id" value="{{$data->id}}" />
                      <input style="margin-bottom: 5px;"type="hidden" name="agendamento_id" value="{{$item->id_ap}}" />
                      <input style="margin-bottom: 5px;"type="text" name="grupo" placeholder="Grupo prioritário"/>
                      <input style="margin-bottom: 5px;"type="text" name="responsavel" placeholder="Responsavel pela Apli..."/>
                      <input style="margin-bottom: 5px;"type="text" name="lote" placeholder="Lote"/>

                      <button type="submit" class="btn btn-success">Justificar</i></button>
                      </form>
                      
                       
                    </div>    
                    @endif
                    @if ($item->status == 1)
                    <button type="button" class="btn btn-block btn-success disabled">Sim</button>
                    @endif
                    @if ($item->status == 2)
                    <button type="button" class="btn btn-block btn-danger disabled">Não</button>
                    @endif
                    
                  </td>
                 
                    
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr><th rowspan="1" colspan="1">Nome</th><th rowspan="1" colspan="1">Cpf</th><th rowspan="1" colspan="1">Cep</th><th rowspan="1" colspan="1">Endereço</th><th rowspan="1" colspan="1">Data de nascimento</th><th rowspan="1" colspan="1">Telefone</th><th rowspan="1" colspan="1">Agendamento</th><th rowspan="1" colspan="1">Profissional da saúde</th><th rowspan="1" colspan="1">Grupo Prioritário</th><th rowspan="1" colspan="1">Lote</th><th rowspan="1" colspan="1">Responsável Aplicação</th><th rowspan="1" colspan="1">Compareceu ?</th></tr>
                </tfoot>
              </table></div></div><div class="row"><div class="col-sm-12 col-md-5"></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"></ul></div></div></div></div>
            </div>
            <!-- /.card-body -->
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
<script src="{{url('assets/painel/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>

<script>
  $(function () {
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