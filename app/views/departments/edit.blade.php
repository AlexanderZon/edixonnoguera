@extends('layouts.index')

@section('content')
      <!-- End Navigation -->
      <div class="container-fluid main-content">
        <div class="page-title">
          <h1>
            Edición de Actividad
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
                  <label class="control-label col-md-2">Nombre</label>
                  <div class="col-md-7">
                    <input class="form-control" placeholder="Escriba el nombre del departamento" name="name" type="text" value="{{ $department->name }}"/>
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-md-2">Jefe</label>
                  <div class="col-md-7">
                    <input class="form-control" placeholder="Escriba el nombre del Jefe del Departamento" name="name" type="text" value="{{ $department->chief_name }}"/>
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-md-2">Dirección</label>
                  <div class="col-md-7">
                    <select class="select2able select2-offscreen" tabindex="-1" name="id_directorate" id="id_directorate" required>
                      @foreach( $directorates as $directorate )
                        @if( $department->id_directorate == $directorate->id )
                          <option value="{{ $directorate->id }}" selected>{{ $directorate->name }}</option>
                        @else
                          <option value="{{ $directorate->id }}">{{ $directorate->name }}</option>
                        @endif
                      @endforeach
                    </select>
                  </div>
              </div>
					<div class="form-group">
			            <label class="control-label col-md-2"></label>
			            <div class="col-md-7">
			              <input class="form-control" placeholder="" value="Enviar" type="submit">
			            </div>
			        </div>
		        </form>
		      </div>
            </div>
          </div>
        </div>
        <!-- end DataTables Example -->
        @stop