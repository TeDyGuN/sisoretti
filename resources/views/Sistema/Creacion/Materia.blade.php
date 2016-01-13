@extends('Plantilla.plantilla')
@section('titulo', 'Creacion de Usuario')
@section('headerpage')
    <section class="content-header" xmlns="http://www.w3.org/1999/html">
        <h1 class="colorazul">
            SIS|TRAIN
            <small class="colorazul">Creacion de Materia</small>
        </h1>
    </section>
@endsection
@section('content')
            <!-- Small boxes (Stat box) -->
    <div class="container">
        <div class="row" >
            <div class="">
                <div class="panel panel-default" id="headeremi">
                    <div class="panel-heading text-center ">Creacion de Materia</div>
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
                        <form method="post" class="form-horizontal" enctype="multipart/form-data" role="form"  action="{{ url('sistema/materia/save')  }}"  >
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="nombres" class="col-md-4 control-label colorazul letragrande" style="font-size: 1.2em">Nombre Asignatura</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="nombres" name="nombres"  required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sigla" class="col-md-4 control-label colorazul letragrande" style="font-size: 1.2em">Sigla</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="sigla" name="sigla" onBlur="upperM(this)" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label colorazul" style="font-size: 1.2em">Curso</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="curso">
                                        @foreach($cursos as $curso)
                                            <option value="{{ $curso->id }}">{{$curso->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="">
                                <button type="submit" class="btn btn-primary center-block">
                                    Registrar
                                </button>
                            </div>
                        </form>
                        <br><br>
                        {{$success = Session::get('success')}}
                        @if ($success)
                            <div class="alert alert-success">
                                <strong>!!Felicidades!!</strong>Se Creo la Materia Correctamente <br><br>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('addscripts')
    <script type="text/javascript">
        function justNumbers(e)
        {
            var keynum = window.event ? window.event.keyCode : e.which;
            if ((keynum == 8) || (keynum == 46))
                return true;

            return /\d/.test(String.fromCharCode(keynum));
        }
    </script>
@endsection