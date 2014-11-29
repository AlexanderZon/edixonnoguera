@extends('layouts.index')

@section('content')
      <!-- End Navigation -->
      <div class="container-fluid main-content">
        <div class="page-title">
          <h1>
            Familiares de {{ $employee->first_name }} {{ $employee->last_name }}
          </h1>
        </div>
        <!-- DataTables Example -->
        <div class="row">
          </div>
          <div class="col-sm-12">
            <div class="widget-container fluid-height clearfix">
              <div class="heading">
                <a href="{{ $parent }}" class="col-md-2"><i class="icon-chevron-left"></i>Volver a Empleados</a>
                <a href="{{ $route }}/create" class="col-md-2"><i class="icon-plus"></i>Añadir Nuevo Familiar</a>
              </div>

              <div class="widget-content padded clearfix">
                <table class="table table-bordered table-striped" id="dataTable1">
                  <thead>
                    <th class="check-header hidden-xs">
                      <label><input id="checkAll" name="checkAll" type="checkbox"><span></span></label>
                       <th>
                      Cedula
                    </th>
                    </th>
                    <th>
                      Nombre
                    </th>
                     <th>
                      Parentesco
                    </th>
                     <th>
                      Fecha de Nacimiento
                    </th>
                    <th class="hidden-xs">
                      Acciones
                    </th>
                  </thead>

                  <tbody>
                  @foreach( $familiars as $familiar )

                    <tr>
                      <td class="check hidden-xs">
                        <label><input name="optionsRadios1" type="checkbox" value="option1"><span></span></label>
                      </td>
                      <td>
                        {{ $familiar->identification_number }}
                      </td>
                      <td class="hidden-xs">
                        {{ $familiar->name }}
                      </td>
                      <td class="hidden-xs">
                        {{ $familiar->relationship }}
                      </td>
                      <td class="hidden-xs">
                        {{ date('d-m-Y', strtotime($familiar->born_date)) }}
                      </td>
                      <td class="actions">
                        <div class="action-buttons">
                          <a class="table-actions" href="{{ $route }}/edit/{{ Crypt::encrypt($familiar->id) }}"><i class="icon-pencil"></i></a>
                          <a class="table-actions" href="{{ $route }}/delete/{{ Crypt::encrypt($familiar->id) }}"><i class="icon-trash"></i></a>
                        </div>
                      </td>
                    </tr>
                   
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          
        </div>
        <!-- end DataTables Example -->
        @stop