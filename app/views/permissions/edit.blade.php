@extends('layouts.index')

@section('content')
      <!-- End Navigation -->
      <div class="container-fluid main-content">
        <div class="page-title">
          <h1>
             Edición de Permiso
          </h1>
        </div>
        <!-- DataTables Example -->
        <div class="row">
          <div class="col-lg-12">
            <div class="widget-container fluid-height clearfix">
              <div class="heading">
                <a href="{{ $route }}"><i class="icon-chevron-left"></i>Ir Atrás</a>
              </div>

              <div class="widget-content padded">
            <form action="" method="post" class="form-horizontal">

              <div class="form-group">

                  <label class="control-label col-md-1">Empleado</label>
                  <div class="col-md-3">
                    <select class="select2able select2-offscreen" tabindex="-1" name="id_employee" id="id_division" required>
                        @foreach( $employees as $employee )
                          @if( $permission->employee->id == $employee->id )
                            <option value="{{ $employee->id }}" selected>{{ $employee->identification_number }} - {{ $employee->last_name }}, {{ $employee->first_name }}</option>
                          @else
                            <option value="{{ $employee->id }}">{{ $employee->identification_number }} - {{ $employee->last_name }}, {{ $employee->first_name }}</option>
                          @endif
                        @endforeach
                    </select>
                  </div> 

                  @if( $date_error != null )

                    <div class="form-group has-error">
                      <label class="control-label col-md-1">Intervalo</label>
                      <div class="col-sm-2">
                        <input class="form-control" data-date-autoclose="true" data-date-format="dd-mm-yyyy" id="dpd1" name="from" placeholder="Desde" type="text" required value="{{ date('d-m-Y', strtotime($permission->from)) }}">
                      </div>
                      <div class="col-sm-2">
                        <input class="form-control" data-date-autoclose="true" data-date-format="dd-mm-yyyy" id="dpd2" name="to" placeholder="Hasta" type="text" required value="{{ date('d-m-Y', strtotime($permission->to)) }}">
                      </div>
                      <label class="control-label col-md-1">Debe seleccionar un intervalo válido</label>
                    </div>

                  @else

                    <div class="form-group">
                      <label class="control-label col-md-1">Intervalo</label>
                      <div class="col-sm-2">
                        <input class="form-control" data-date-autoclose="true" data-date-format="dd-mm-yyyy" id="dpd1" name="from" placeholder="Desde" type="text" required value="{{ date('d-m-Y', strtotime($permission->from)) }}">
                      </div>
                      <div class="col-sm-2">
                        <input class="form-control" data-date-autoclose="true" data-date-format="dd-mm-yyyy" id="dpd2" name="to" placeholder="Hasta" type="text" required value="{{ date('d-m-Y', strtotime($permission->to)) }}">
                      </div>
                    </div>

                  @endif

              </div>

              <div class="form-group">

                  <label class="control-label col-md-2">MOTIVOS DEL PERMISO</label>

              </div>

              <div class="form-group">

                  <label class="control-label col-md-1">DOC</label>
                  <div class="col-md-1">
                    <input class="form-control" name="doc" type="text" value="{{ $permission->doc }}">
                  </div>

                  <label class="control-label col-md-1">P1/P2</label>
                  <div class="col-md-1">
                    <input class="form-control" name="p1p2" type="text" value="{{ $permission->p1p2 }}">
                  </div>

                  <label class="control-label col-md-1">NAC</label>
                  <div class="col-md-1">
                    <input class="form-control" name="nac" type="text" value="{{ $permission->nac }}">
                  </div>

                  <label class="control-label col-md-1">E/A</label>
                  <div class="col-md-1">
                    <input class="form-control" name="ea" type="text" value="{{ $permission->ea }}">
                  </div>

              </div>

              <div class="form-group">

                  <label class="control-label col-md-1">FALL</label>
                  <div class="col-md-1">
                    <input class="form-control" name="fall" type="text" value="{{ $permission->fall }}">
                  </div>

                  <label class="control-label col-md-1">EST</label>
                  <div class="col-md-1">
                    <input class="form-control" name="est" type="text" value="{{ $permission->est }}">
                  </div>

                  <label class="control-label col-md-1">Otro</label>
                  <div class="col-md-3">
                    <input class="form-control" placeholder="" name="another" type="text" value="{{ $permission->another }}">
                  </div>    

                  <div class="col-md-2">
                  </div>      

                  <div class="col-md-1">
                    <input class="form-control" placeholder="" style="padding:0px" value="Enviar" type="submit">
                  </div>            
             
              </div>
             
            </form>
          </div>
            </div>
          </div>
        </div>

        <script type="text/javascript">

       /* $(document).on('ready', function(){
          $("#delete-representante").click(function(e){
          $('input[name=id_persona]').val('');
        $('#form-display-representante').css({
          'display':'none'
        });
        $('#add-representante').css({
          'display':'block'
        });
          });
          $('.fancybox').fancybox({
        maxWidth  : 800,
        maxHeight : 600,
        fitToView : false,
        width   : '70%',
        height    : '70%',
        autoSize  : false,
        closeClick  : false,
        openEffect  : 'none',
        closeEffect : 'none'
      });

          $('#id_tipo_employee').change(function(e){
            var elem = $(this);
            console.log("Cambio a: " + elem.val());
            var data = {
              'id' : elem.val(),
            };
            $.post('/ajax/codigoemployees', data, function(data){
              $('#id_codigo').val(data);
              console.log(data);
            });
          });
        });
*/
        </script>
        <!-- end DataTables Example -->
        @stop