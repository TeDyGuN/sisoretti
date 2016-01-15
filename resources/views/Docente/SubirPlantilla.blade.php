@extends('Plantilla/plantilla')
@section('titulo', 'Subir Plantilla')
@section('headerpage')
    <section class="content-header" xmlns="http://www.w3.org/1999/html">
        <h1 class="colorazul">
            SIS|TRAIN
            <small class="colorazul">Subir Plantilla de Notas</small>
        </h1>
    </section>
    @endsection
    @section('content')
            <!-- Small boxes (Stat box) -->
    <div class="container">
        <div class="row" >
            <div class="">
                <div class="panel panel-default" id="headeremi">
                    <div class="panel-heading text-center ">Subir Plantilla de Notas</div>
                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> Hay problemas con tus Entradas<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="post" class="form-horizontal" enctype="multipart/form-data" role="form"  action="{{ url('docente/subir_plantilla')  }}"  >
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label class="col-md-4 control-label colorazul" style="font-size: 1.2em">Materia</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="materia">
                                        @foreach($materias as $m)
                                            <option value="{{ $m->m_id }}">{{$m->m_as.' '.$m->c_nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label colorazul" style="font-size: 1.2em">Periodo Academico</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="periodo">
                                        <option value="1">1° Trimestre</option>
                                        <option value="2">2° Trimestre</option>
                                        <option value="3">3° Trimestre</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="archivo" class="col-md-4 control-label colorazul" style="font-size: 1.2em">Archivo</label>
                                <div class="col-md-3">
                                    <input type="file" required name="archivo" id="archivo"/>
                                </div>
                                <label for="archivo" class="col-md-3 control-label colorazul">Solo Archivos Excel: .xls .xlsx</label>
                            </div>
                            <div class="">
                                <button type="submit" class="btn btn-primary center-block">
                                    Subir Plantilla
                                </button>
                            </div>
                        </form>
                        <br><br>
                        {{$success = Session::get('success')}}
                        @if ($success)
                            <div class="alert alert-success">
                                <strong>!!Felicidades!!</strong>Las Notas se Actualizaron con Exito <br><br>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection