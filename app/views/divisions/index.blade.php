@extends('layouts.index')

@section('content')
      <!-- End Navigation -->
      <div class="container-fluid main-content">
        <div class="page-title">
          <h1>
            Divisiones
          </h1>
        </div>
        <!-- DataTables Example -->
        <div class="row">
          <div class="col-lg-12">
            <div class="widget-container fluid-height clearfix">
              <div class="heading">
                <a href="{{ $route }}/create"><i class="icon-plus"></i>Añadir Nuevo División</a>
              </div>
              <div class="widget-content padded clearfix">
                <table class="table table-bordered table-striped" id="dataTable1">
                  <thead>
                    <th class="check-header hidden-xs">
                      <label><input id="checkAll" name="checkAll" type="checkbox"><span></span></label>
                    </th>
                    <th>
                      Nombre
                    </th>
                    <th>
                      Jefe
                    </th>
                    <th>
                      Gerencia
                    </th>
                    <th>
                      Creado el
                    </th>
                    <th>
                      Actualizado el
                    </th>
                    <th class="hidden-xs">
                      Acciones
                    </th>
                  </thead>
                  <tbody>
                  @foreach( $divisions as $division )
                    <tr>
                      <td class="check hidden-xs">
                        <label><input name="optionsRadios1" type="checkbox" value="option1"><span></span></label>
                      </td>
                      <td>
                        {{ $division->name }}
                      </td>
                      <td>
                        {{ $division->chief_name }}
                      </td>
                      <td>
                        {{ $division->management->name }}
                      </td>
                      <td class="hidden-xs">
                        {{ $division->created_at }}
                      </td>
                      <td class="hidden-xs">
                        {{ $division->updated_at }}
                      </td>
                      <td class="actions">
                        <div class="action-buttons">
                          <a class="table-actions" href="{{ $route }}/edit/{{ Crypt::encrypt($division->id) }}"><i class="icon-pencil" title="Editar"></i></a>
                          <a class="table-actions" href="{{ $route }}/delete/{{ Crypt::encrypt($division->id) }}"><i class="icon-trash" title="Eliminar"></i></a>
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