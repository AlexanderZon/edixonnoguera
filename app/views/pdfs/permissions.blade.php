<html>
<head>
  
  <style type="text/css">
    body{
      font-family: Helvetica;
    }
    header{ 
      font-size: 10pt;
    }
    footer{
      display: block;
      position: absolute;
      bottom: 0px;
      font-size: 8pt
    }
    h1{
      width:100%;
      text-align:center; 
      font-size: 10pt;
    }
    h2{
      width:100%;
      text-align:center; 
      font-size: 10pt;
    }
    th{
      background-color: #CCC;
      border: 1px #000 solid;
      padding: .2em .2em;
      margin: 0em;
      font-family: Helvetica;
      font-size: 5pt;
    }
    td{
      border: 1px #000 solid;
      font-size: 7pt;
    }
    .center{
      text-align: center;
    }
  </style>
  </head>
<body>
  <img src="{{ public_path('/images/header_gobierno.png') }}" width="100%" height="60">
        <!-- End Navigation -->
  <header>
    <div>&nbsp;</div>
    <div><strong>Unidad Remitente: Gerencia de Pasaje Estudiantil</strong></div>
    <div><strong>{{ utf8_decode('Coordinación: ') }} <u>Gerencia de Pasaje Estudiantil</u></strong></div>
  </header>

  <div class="container-fluid main-content">
    <div class="page-title">
      <h1>
        {{ utf8_decode('Relación de Reposos - Maracay')}} {{ date('d/m/Y') }}
      </h1>
    </div>
    <!-- DataTables Example -->
    <div class="col-sm-12">
      <div class="widget-content padded clearfix">
        <table width="100%">
          <tr>
            <th rowspan="2" width="30px">{{ utf8_decode('N°')}}</th>
            <th rowspan="2">{{utf8_decode('APELLIDO Y NOMBRE')}}</th>
            <th rowspan="2" width="60px">{{utf8_decode('C.I.')}}</th>
            <th rowspan="2" width="150px">{{utf8_decode('CARGO')}}</th>
            <th rowspan="2" width="80px">{{utf8_decode('CONTRATADO O FIJO')}}</th>
            <th colspan="6">{{utf8_decode('MOTIVOS DEL PERMISO')}}</th>
            <th rowspan="2" width="80px">{{utf8_decode('OTRO')}}</th>
            <th colspan="2">{{utf8_decode('PERIODO')}}</th>
            <th rowspan="2" width="55px">{{ utf8_decode('DURACIÓN') }}</th>
          </tr>
          <tr>
            <th width="30px">{{ utf8_decode('DOC')}}</th>
            <th width="30px">{{utf8_decode('P1/P2')}}</th>
            <th width="30px">{{utf8_decode('NAC')}}</th>
            <th width="30px">{{utf8_decode('E/A')}}</th>
            <th width="30px">{{utf8_decode('FALL')}}</th>
            <th width="30px">{{utf8_decode('EST')}}</th>
            <th width="50px">{{utf8_decode('DESDE')}}</th>
            <th width="50px">{{utf8_decode('HASTA')}}</th>
          </tr>
          <?php $count = 0; ?>
          @foreach( $permissions as $permission )
            <tr>
              <td class="center">{{ ++$count }}</td>
              <td>{{ utf8_decode($permission->employee->last_name) }}, {{ utf8_decode($permission->employee->first_name) }}</td>
              <td class="center">{{ utf8_decode($permission->employee->identification_number) }}</td>
              <td class="center">{{ utf8_decode($permission->employee->office->title) }}</td>
              <td class="center">{{ utf8_decode($permission->employee->contract) }}</td>
              <td class="center">{{ utf8_decode($permission->doc) }}</td>
              <td class="center">{{ utf8_decode($permission->p1p2) }}</td>
              <td class="center">{{ utf8_decode($permission->nac) }}</td>
              <td class="center">{{ utf8_decode($permission->ea) }}</td>
              <td class="center">{{ utf8_decode($permission->fall) }}</td>
              <td class="center">{{ utf8_decode($permission->est) }}</td>
              <td class="center">{{ utf8_decode($permission->another) }}</td>
              <td class="center">{{ date('d/m/Y', strtotime($permission->from)) }}</td>
              <td class="center">{{ date('d/m/Y', strtotime($permission->to)) }}</td>
              <td class="center">{{ utf8_decode($permission->duration) }} {{ $permission->duration > 1 ? utf8_decode('DIAS') : utf8_decode('DÍA') }}</td>
            </tr>
          @endforeach
        </table>
      </div>
    </div>
      
  </div>
  <footer>
   <!--  <div width="100%">
     <span style="float:left">CESAR SERGENT</span>
     <span style="float:right">PEDRO MARQUEZ</span>
   </div>
   <div width="100%">
     <span style="float:left">COORDINADOR DE ESTADO</span>
     <span style="float:right">ANALISTA</span>
   </div> -->
    <div style="width:80%;display:inline-block;">
      <div>CESAR SERGENT</div>
      <div>COORDINADOR DE ESTADO</div>
    </div>
    <div style="width:20%;display:inline-block;">
      <div>PEDRO MARQUEZ</div>
      <div>ANALISTA</div>
    </div>
  </footer>
    <!-- end DataTables Example -->
</body>
</html>