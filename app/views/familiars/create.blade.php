@extends('layouts.index')

@section('content')
      <!-- End Navigation -->
      <div class="container-fluid main-content">
        <div class="page-title">
          <h1>
             Formulario Empleado
          </h1>
        </div>
        <!-- DataTables Example -->
        <div class="row">
          <div class="col-lg-12">
            <div class="widget-container fluid-height clearfix">
              <div class="heading">
                <a href="{{ $route }}"><i class="icon-user"></i>Ir Atrás</a>
              </div>

              <div class="widget-content padded">
		        <form action="" method="post" class="form-horizontal">

		         	<div class="form-group">

			            <label class="control-label col-md-1">Nombre</label>
			            <div class="col-md-2">
			              <input class="form-control" placeholder="Escriba el nombre" name="name" type="text" required>
			            </div>

			            <label class="control-label col-md-1">Parentesco</label>
			            <div class="col-md-2">
			              <input class="form-control" placeholder="Escriba el apellido" name="relationship" type="text" required>
			            </div>

			            <label class="control-label col-md-1">Cédula</label>
			            <div class="col-md-2">
			              <input class="form-control" placeholder="E.j: V12345678" name="identification_number" type="text" required>
			            </div>

			        </div>

		         	<div class="form-group">

	                  	<label class="control-label col-md-1">Sexo</label>
	                  	<div class="col-md-2">
	                    	<select class="select2able select2-offscreen" tabindex="-1" name="sex" id="sex" required>
	                    		<option value="MASCULINO">MASCULINO</option>
	                    		<option value="FEMENINO">FEMENINO</option>
	                    	</select>
	                  	</div>

			            <label class="control-label col-md-1">Fecha de Nacimiento</label>
			            <div class="col-md-2">
				            <div class="input-group date datepicker" data-date-autoclose="true" data-date-format="dd-mm-yyyy">
				                <input class="form-control" type="text" name="born_date" placeholder="Indique la fecha de Nacimiento"><span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				            </div>
			            </div>

			            <label class="control-label col-md-1">Lugar de Nacimiento</label>
			            <div class="col-md-2">
			              <input class="form-control" placeholder="Indique el Lugar de Nacimiento" name="born_place" type="text" required>
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