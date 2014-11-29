@extends('layouts.index')

@section('content')
      <!-- End Navigation -->
      <div class="container-fluid main-content">
        <div class="page-title">
          <h1>
             Editar Empleado
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
			              <input class="form-control" placeholder="Escriba el nombre" name="first_name" type="text" required value="{{ $employee->first_name }}">
			            </div>

			            <label class="control-label col-md-1">Apellido</label>
			            <div class="col-md-2">
			              <input class="form-control" placeholder="Escriba el apellido" name="last_name" type="text" required value="{{ $employee->last_name }}">
			            </div>

			            <label class="control-label col-md-1">Cédula</label>
			            <div class="col-md-2">
			              <input class="form-control" placeholder="E.j: V12345678" name="identification_number" type="text" required value="{{ $employee->identification_number }}">
			            </div>

			            <label class="control-label col-md-1">Habilidad</label>
			            <div class="col-md-2">
	                    	<select class="select2able select2-offscreen" tabindex="-1" name="ability" id="ability" required>
	                    		<option value="DERECHA" {{ $employee->ability == 'DERECHA' ? 'selected' : '' }}>DERECHA</option>
	                    		<option value="IZQUIERDA" {{ $employee->ability == 'IZQUIERDA' ? 'selected' : '' }}>IZQUIERDA</option>
	                    	</select>
			            </div>

			        </div>

		         	<div class="form-group">

	                  	<label class="control-label col-md-1">Sexo</label>
	                  	<div class="col-md-2">
	                    	<select class="select2able select2-offscreen" tabindex="-1" name="sex" id="sex" required>
	                    		<option value="MASCULINO" {{ $employee->sex == 'MASCULINO' ? 'selected' : '' }}>MASCULINO</option>
	                    		<option value="FEMENINO" {{ $employee->sex == 'FEMENINO' ? 'selected' : '' }}>FEMENINO</option>
	                    	</select>
	                  	</div>	

			            <label class="control-label col-md-1">Fecha de Nacimiento</label>
			            <div class="col-md-2">
				            <div class="input-group date datepicker" data-date-autoclose="true" data-date-format="dd-mm-yyyy">
				                <input class="form-control" type="text" name="born_date" placeholder="Indique la fecha de Nacimiento" value="{{ $employee->born_date }}"><span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				            </div>
			            </div>

			            <label class="control-label col-md-1">Lugar de Nacimiento</label>
			            <div class="col-md-2">
			              <input class="form-control" placeholder="Indique el Lugar de Nacimiento" name="born_place" type="text" required value="{{ $employee->born_place }}">
			            </div>

			            <label class="control-label col-md-1">Talla</label>
			            <div class="col-md-2">
	                    	<select class="select2able select2-offscreen" tabindex="-1" name="size" id="size" required>
	                    		<option value="SS" {{ $employee->size == 'SS' ? 'selected' : '' }}>SS</option>
	                    		<option value="S" {{ $employee->size == 'S' ? 'selected' : '' }}>S</option>
	                    		<option value="M" {{ $employee->size == 'M' ? 'selected' : '' }}>M</option>
	                    		<option value="L" {{ $employee->size == 'L' ? 'selected' : '' }}>L</option>
	                    		<option value="XL" {{ $employee->size == 'XL' ? 'selected' : '' }}>XL</option>
	                    		<option value="XXL" {{ $employee->size == 'XXL' ? 'selected' : '' }}>XXL</option>
	                    	</select>
			            </div>

			        </div>

		         	<div class="form-group">

			            <label class="control-label col-md-1">Estado Civil</label>
			            <div class="col-md-2">
	                    	<select class="select2able select2-offscreen" tabindex="-1" name="marital_status" id="marital_status" required>
	                    		<option value="SOLTERO" {{ $employee->marital_status == 'SOLTERO' ? 'selected' : '' }}>SOLTERO</option>
	                    		<option value="CASADO" {{ $employee->marital_status == 'CASADO' ? 'selected' : '' }}>CASADO</option>
	                    		<option value="DIVORCIADO" {{ $employee->marital_status == 'DIVORCIADO' ? 'selected' : '' }}>DIVORCIADO</option>
	                    		<option value="VIUDO" {{ $employee->marital_status == 'VIUDO' ? 'selected' : '' }}>VIUDO</option>
	                    	</select>
			            </div>

			            <label class="control-label col-md-1">Carga Familiar</label>
			            <div class="col-md-2">
			              <input class="form-control" placeholder="Indique la Carga Familiar" name="familiar_burden" type="number" min="0" step="1" required value="{{ $employee->familiar_burden }}">
			            </div>

			            <label class="control-label col-md-1">Número de Hijos</label>
			            <div class="col-md-2">
			              <input class="form-control" placeholder="Indique el Número de Hijos" name="children_number" type="number" min="0" step="1" required value="{{ $employee->children_number }}">
			            </div>

			        </div>

		         	<div class="form-group">

			            <label class="control-label col-md-1">Grado de Instrucción</label>
			            <div class="col-md-2">
			              <input class="form-control" placeholder="Describa el Grado de Instrucción" name="training_degree" type="text" required value="{{ $employee->training_degree }}">
			            </div>

			            <label class="control-label col-md-1">Fecha de Ingreso</label>
			            <div class="col-md-2">
				            <div class="input-group date datepicker" data-date-autoclose="true" data-date-format="dd-mm-yyyy">
				                <input class="form-control" type="text" name="admission_date" placeholder="Indique la Fecha de Ingreso" value="{{ $employee->admission_date }}"><span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				            </div>
			            </div>

			            <label class="control-label col-md-1">Teléfono</label>
			            <div class="col-md-2">
			              <input class="form-control" placeholder="E.j: 02431234567" name="phone" type="text" required value="{{ $employee->phone }}">
			            </div>

			        </div>
			 
					<div class="form-group">

			            <label class="control-label col-md-1">Dirección</label>
			            <div class="col-md-5">
			              <input class="form-control" placeholder="Escriba la dirección del empleado" name="address" type="text" required value="{{ $employee->address }}">
			            </div>

			            <label class="control-label col-md-1">Celular</label>
			            <div class="col-md-2">
			              <input class="form-control" placeholder="Escriba el teléfono celular" name="movil" type="text" value="{{ $employee->movil }}">
			            </div>

			            <div class="col-md-1">
			          	</div> 			        
			       
			        </div>
			 
					<div class="form-group">

	                  	<label class="control-label col-md-1">División</label>
	                  	<div class="col-md-2">
	                    	<select class="select2able select2-offscreen" tabindex="-1" name="id_division" id="id_division" required>
	                      		@foreach( $divisions as $division )
	                      			@if( $employee->division->id == $division->id )
	                          			<option value="{{ $division->id }}" selected>{{ $division->name }}</option>
	                      			@else
	                          			<option value="{{ $division->id }}">{{ $division->name }}</option>
	                          		@endif
	                      		@endforeach
	                    	</select>
	                  	</div>	

	                  	<label class="control-label col-md-1">Cargo</label>
	                  	<div class="col-md-2">
	                    	<select class="select2able select2-offscreen" tabindex="-1" name="id_office" id="id_division" required>
	                      		@foreach( $offices as $office )
	                      			@if( $employee->office->id == $office->id )
	                          			<option value="{{ $office->id }}" selected>{{ $office->title }}</option>
	                      			@else
	                          			<option value="{{ $office->id }}">{{ $office->title }}</option>
	                          		@endif
	                      		@endforeach
	                    	</select>
	                  	</div>	

	                  	<label class="control-label col-md-1">Contrato</label>
	                  	<div class="col-md-2">
	                    	<select class="select2able select2-offscreen" tabindex="-1" name="contract" id="id_division" required>
	                    		<option value="CONTRATADO" {{ $employee->contract == 'CONTRATADO' ? 'selected' : '' }}>CONTRATADO</option>
	                    		<option value="FIJO" {{ $employee->contract == 'FIJO' ? 'selected' : '' }}>FIJO</option>
	                    	</select>
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