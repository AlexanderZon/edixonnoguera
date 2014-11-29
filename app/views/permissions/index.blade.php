@extends('layouts.index')

@section('content')
      <!-- End Navigation -->
      <div class="container-fluid main-content">
        <div class="page-title">
          <h1>
            Permisos
          </h1>
        </div>
        <!-- DataTables Example -->
        <div class="row">
          <div class="col-lg-12">
            <div class="widget-container fluid-height clearfix">
              <div class="heading">
                <a href="{{ $route }}/create"><i class="icon-plus"></i>Añadir Nuevo Permiso</a>

              <div class="form-group" style="display:block;float:right;background-color:#EEEEEE;padding:1em;margin:.5em;border-radius:5px;width:100%">
                <form action="{{ $route }}/report" target="_blank" method="post">
                  <input class="form-control" type="hidden" name="type" value="minor">
                  <div class="col-sm-3">
                    <button type="submit" class="btn btn-success"><i class="fa icon-cloud-download"></i> Reporte Menor a 3 Días</button>
                  </div>
                </form>
                <form action="{{ $route }}/report" target="_blank" method="post">
                  <input class="form-control" type="hidden" name="type" value="mayor">
                  <div class="col-sm-3">
                    <button type="submit" class="btn btn-success"><i class="fa icon-cloud-download"></i> Reporte Mayor a 3 Días</button>
                  </div>
                </form>
              </div>
              </div>
              <div class="widget-content padded clearfix">
                <table class="table table-bordered table-striped" id="dataTable1">
                  <thead>
                    <th class="check-header hidden-xs">
                      <label><input id="checkAll" name="checkAll" type="checkbox"><span></span></label>
                    </th>
                    <th>
                      Cédula
                    </th>
                    <th>
                      Nombre
                    </th>
                    <th>
                      Motivos
                    </th>
                    <th>
                      Desde
                    </th>
                    <th>
                      Hasta
                    </th>
                    <th>
                      Duracion
                    </th>
                    <th class="hidden-xs">
                      Acciones
                    </th>
                  </thead>
                  <tbody>
                  @foreach( $permissions as $permission )
                    <tr>
                      <td class="check hidden-xs">
                        <label><input name="optionsRadios1" type="checkbox" value="option1"><span></span></label>
                      </td>
                      <td>
                        {{ $permission->employee->identification_number }}
                      </td>
                      <td>
                        {{ $permission->employee->last_name }}, {{ $permission->employee->first_name }}
                      </td>
                      <td>
                        {{ $permission->doc != '' ? 'DOC: ' . $permission->doc . '. ' : '' }}
                        {{ $permission->p1p2 != '' ? 'P1/P2: ' . $permission->p1p2 . '. ' : '' }}
                        {{ $permission->nat != '' ? 'NAT: ' . $permission->nat . '. ' : '' }}
                        {{ $permission->ea != '' ? 'E/A: ' . $permission->ea . '. ' : '' }}
                        {{ $permission->fall != '' ? 'FALL: ' . $permission->doc . '. ' : '' }}
                        {{ $permission->est != '' ? 'EST: ' . $permission->est . '. ' : '' }}
                        {{ $permission->another != '' ? 'OTRO: ' . $permission->another . '. ' : '' }}
                      </td>
                      <td>
                        {{ date('d-m-Y', strtotime($permission->from)) }}
                      </td>
                      <td>
                        {{ date('d-m-Y', strtotime($permission->to)) }}
                      </td>
                      <td>
                        {{ $permission->duration }} dias
                      </td>
                      <td class="actions">
                        <div class="action-buttons">
                          <a class="table-actions" href="{{ $route }}/edit/{{ Crypt::encrypt($permission->id) }}" title="Editar"><i class="icon-pencil"></i></a>
                          <a class="table-actions" href="{{ $route }}/delete/{{ Crypt::encrypt($permission->id) }}" title="Eliminar"><i class="icon-trash"></i></a>
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