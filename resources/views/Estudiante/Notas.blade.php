@extends('Plantilla/plantilla')
@section('titulo', 'Reporte de Notas')
@section('headerpage')
    <section class="content-header">
        <h1 class="colorazul">
            GORETTI
            <small class="colorazul">Reporte de Notas</small>
        </h1>
    </section>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title" style="text-align: center">Datos del Estudiante</h3>
                </div>
                <div class="panel-body">
                    <div class="col-md-2 hidden-xs">
                        <img src="{{ asset("/dist/img/user2-160x160.png") }}" alt="Foto" class="img-thumbnail img-responsive">
                    </div>
                    <div class="col-md-10">
                        <div class="col-md-10">
                            <label class="col-md-4 col-ls-4 control-label colorazul">Nombre y Apellidos:</label>
                            <label class="col-md-4 col-ls-4 control-label">{{ Auth::user()->apellido() }}</label>
                        </div>
                        <div class="col-md-10">
                            <label class="col-md-4  col-ls-4 control-label colorazul">Carnet de Identidad:</label>
                            <label class="col-md-4 col-ls-4 control-label">{{ Auth::user()->ci() }}</label>
                        </div>
                        <div class="col-md-10">
                            <label class="col-md-4  col-ls-4 control-label colorazul">Correo Electronico:</label>
                            <label class="col-md-4 col-ls-4 control-label">{{ Auth::user()->email }}</label>
                        </div>

                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <div class="panel panel-default">
                    <div class="panel-heading">Reporte de Notas</div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <tr>
                                <th class="">Materia</th>
                                <th class="">1° Trimestre</th>
                                <th class="">2° Trimestre</th>
                                <th class="">3° Trimestre</th>
                                <th class="">Promedio Final</th>
                            </tr>
                            @foreach($notas_est as $m)
                                <tr>
                                    <td>{{ $m['m_nombre'] }}</td>
                                    @if($m['primer'] == "0")
                                        <td>-</td>
                                    @else

                                        <td>{{ $m['primer'] }}</td>
                                    @endif
                                    @if($m['segundo'] == "0")
                                        <td>-</td>
                                    @else

                                        <td>{{ $m['segundo'] }}</td>
                                    @endif
                                    @if($m['tercer'] == "0")
                                        <td>-</td>
                                    @else

                                        <td>{{ $m['tercer'] }}</td>
                                    @endif
                                    @if($m['prom'] == "0")
                                        <td>-</td>
                                    @else

                                        <td>{{ $m['prom'] }}</td>
                                    @endif
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
