<div class="row" style="margin-top: 0">
  <div class="col-lg-12">
    <div class="widget-container fluid-height clearfix">
      <div class="widget-content padded">
        <p>
          <em>Empleado {{ $employee->first_name }} {{ $employee->last_name }}</em>
          <a href="{{ $route }}/reporte/{{ Crypt::encrypt($employee->id) }}" style="float:right" target="_blank">Imprimir Certificado</a>
        </p>
        <table class="table table-bordered table-striped editable-form" id="user" style="clear: both">
          <tbody>
            <tr>
              <td width="35%">
                Cédula
              </td>
              <td>
                <a data-original-title="Enter username" data-pk="1" data-type="text" href="#" id="username" class="editable editable-click">{{ $employee->identification_number }}</a>
              </td>
            </tr>
            <tr>
              <td width="35%">
                Nombre
              </td>
              <td>
                <a data-original-title="Enter username" data-pk="1" data-type="text" href="#" id="username" class="editable editable-click">{{ $employee->first_name }}</a>
              </td>
            </tr>
            <tr>
              <td width="35%">
                Apellido
              </td>
              <td>
                <a data-original-title="Enter username" data-pk="1" data-type="text" href="#" id="username" class="editable editable-click">{{ $employee->last_name }}</a>
              </td>
            </tr>
            <tr>
              <td width="35%">
                Sexo
              </td>
              <td>
                <a data-original-title="Enter username" data-pk="1" data-type="text" href="#" id="username" class="editable editable-click">{{ $employee->sex }}</a>
              </td>
            </tr>
            <tr>
              <td width="35%">
                Fecha de Nacimiento
              </td>
              <td>
                <a data-original-title="Enter username" data-pk="1" data-type="text" href="#" id="username" class="editable editable-click">{{ date('d-m-Y', strtotime($employee->first_name)) }}</a>
              </td>
            </tr>
            <tr>
              <td width="35%">
                Lugar de Nacimiento
              </td>
              <td>
                <a data-original-title="Enter username" data-pk="1" data-type="text" href="#" id="username" class="editable editable-click">{{ $employee->born_place }}</a>
              </td>
            </tr>
            <tr>
              <td width="35%">
                Estado Civil
              </td>
              <td>
                <a data-original-title="Enter username" data-pk="1" data-type="text" href="#" id="username" class="editable editable-click">{{ $employee->marital_status }}</a>
              </td>
            </tr>
            <tr>
              <td width="35%">
                Carga Familiar
              </td>
              <td>
                <a data-original-title="Enter username" data-pk="1" data-type="text" href="#" id="username" class="editable editable-click">{{ $employee->familiar_burden }}</a>
              </td>
            </tr>
            <tr>
              <td width="35%">
                Número de Hijos
              </td>
              <td>
                <a data-original-title="Enter username" data-pk="1" data-type="text" href="#" id="username" class="editable editable-click">{{ $employee->children_number }}</a>
              </td>
            </tr>
            <tr>
              <td width="35%">
                Grado de Instrucción
              </td>
              <td>
                <a data-original-title="Enter username" data-pk="1" data-type="text" href="#" id="username" class="editable editable-click">{{ $employee->training_degree }}</a>
              </td>
            </tr>
            <tr>
              <td width="35%">
                Fecha de Ingreso
              </td>
              <td>
                <a data-original-title="Enter username" data-pk="1" data-type="text" href="#" id="username" class="editable editable-click">{{ date('d-m-Y', strtotime($employee->admission_date)) }}</a>
              </td>
            </tr>
            <tr>
              <td width="35%">
                División
              </td>
              <td>
                <a data-original-title="Enter username" data-pk="1" data-type="text" href="#" id="username" class="editable editable-click">{{ $employee->division->name }}</a>
              </td>
            </tr>
            <tr>
              <td width="35%">
                Gerencia
              </td>
              <td>
                <a data-original-title="Enter username" data-pk="1" data-type="text" href="#" id="username" class="editable editable-click">{{ $employee->division->management->name }}</a>
              </td>
            </tr>
            <tr>
              <td width="35%">
                Teléfono
              </td>
              <td>
                <a data-original-title="Enter username" data-pk="1" data-type="text" href="#" id="username" class="editable editable-click">{{ $employee->phone }}</a>
              </td>
            </tr>
            <tr>
              <td width="35%">
                Celular
              </td>
              <td>
                <a data-original-title="Enter username" data-pk="1" data-type="text" href="#" id="username" class="editable editable-click">{{ $employee->movil }}</a>
              </td>
            </tr>
            <tr>
              <td width="35%">
                Habilidad
              </td>
              <td>
                <a data-original-title="Enter username" data-pk="1" data-type="text" href="#" id="username" class="editable editable-click">{{ $employee->ability }}</a>
              </td>
            </tr>
            <tr>
              <td width="35%">
                Talla
              </td>
              <td>
                <a data-original-title="Enter username" data-pk="1" data-type="text" href="#" id="username" class="editable editable-click">{{ $employee->size }}</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>