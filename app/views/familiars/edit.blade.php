@extends('layouts.index')

@section('content')
      <!-- End Navigation -->
      <div class="container-fluid main-content">
        <div class="page-title">
          <h1>
             Edición de Familiares
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

			            <label class="control-label col-md-1">Nombre</label>
			            <div class="col-md-2">
			              <input class="form-control" placeholder="Escriba el nombre" name="name" type="text" required value="{{ $familiar->name }}">
			            </div>

			            <label class="control-label col-md-1">Parentesco</label>
			            <div class="col-md-2">
			              <input class="form-control" placeholder="Escriba el apellido" name="relationship" type="text" required value="{{ $familiar->relationship }}">
			            </div>

			            <label class="control-label col-md-1">Cédula</label>
			            <div class="col-md-2">
			              <input class="form-control" placeholder="E.j: V12345678" name="identification_number" type="text" required value="{{ $familiar->identification_number }}">
			            </div>

			        </div>

		         	<div class="form-group">

	                  	<label class="control-label col-md-1">Sexo</label>
	                  	<div class="col-md-2">
	                    	<select class="select2able select2-offscreen" tabindex="-1" name="sex" id="sex" required>
	                    		<option value="MASCULINO" {{ $familiar->sex == 'MASCULINO' ? 'selected' : '' }}>MASCULINO</option>
	                    		<option value="FEMENINO" {{ $familiar->sex == 'FEMENINO' ? 'selected' : '' }}>FEMENINO</option>
	                    	</select>
	                  	</div>

			            <label class="control-label col-md-1">Fecha de Nacimiento</label>
			            <div class="col-md-2">
				            <div class="input-group date datepicker" data-date-autoclose="true" data-date-format="dd-mm-yyyy">
				                <input class="form-control" type="text" name="born_date" placeholder="Indique la fecha de Nacimiento" value="{{ date('d-m-Y', strtotime($familiar->born_date)) }}"><span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				            </div>
			            </div>

			            <label class="control-label col-md-1">Lugar de Nacimiento</label>
			            <div class="col-md-2">
			              <input class="form-control" placeholder="Indique el Lugar de Nacimiento" name="born_place" type="text" required value="{{ $familiar->born_place }}">
			            </div>

			            <div class="col-md-1">
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

        $(document).on('ready', function(){
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
				maxWidth	: 800,
				maxHeight	: 600,
				fitToView	: false,
				width		: '70%',
				height		: '70%',
				autoSize	: false,
				closeClick	: false,
				openEffect	: 'none',
				closeEffect	: 'none'
			});
        });

        </script>
        <!-- end DataTables Example -->
        @stop