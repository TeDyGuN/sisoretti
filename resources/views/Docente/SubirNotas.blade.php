
@extends('Plantilla.plantilla')
@section('titulo', 'Subir Notas')
@section('headerpage')
    <section class="content-header" xmlns="http://www.w3.org/1999/html">
        <h1 class="colorazul">
            SIS|TRAIN
            <small class="colorazul">Subir Notas</small>
        </h1>
    </section>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="table-responsive">
                <div class="panel panel-default">
                    <div class="panel-heading">Materias Habilitadas Para Subir Notas</div>
                    <div class="panel-body">
                        <h3><span class="label label-info">Señor Docente Ingrese las Notas en el Orden Correcto Segun la hoja de Excel, el Intervalo de Notas es de 1 a 100
</span></h3>

                        <table class="table table-striped">
                            <tr>
                                <th class="">Id</th>
                                <th class="">Asignatura</th>
                                <th class="">Sigla</th>
                                <th class="">Curso</th>
                                <th class="">Descargar</th>
                            </tr>
                            @foreach($materias as $m)
                                <tr>
                                    <td>{{ $m->m_id }}</td>
                                    <td>{{ $m->m_as }}</td>
                                    <td>{{ $m->m_sigla }}</td>
                                    <td>{{ $m->c_nombre }}</td>
                                    <td>
                                        <form method="post" class="form-horizontal" enctype="multipart/form-data" role="form"  action="{{ url('docente/descargarnotas')  }}"  >
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="hidden" name="id" value="{{ $m->m_id }}">
                                            <input type="hidden" name="c_nombre" value="{{ $m->c_nombre }}">

                                            <input type="hidden" name="c_id" value="{{ $m->cid }}">
                                            <div class="">
                                                <button type="submit" class="btn btn-primary">
                                                    Descargar
                                                </button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection