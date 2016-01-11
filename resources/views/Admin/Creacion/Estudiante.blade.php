@extends('Plantilla/plantilla')
@section('titulo', 'Creacion de Usuario')
@section('headerpage')
    <section class="content-header" xmlns="http://www.w3.org/1999/html">
        <h1 class="colorazul">
            SIS|TRAIN
            <small class="colorazul">Creacion de Usuarios</small>
        </h1>
    </section>
@endsection
@section('content')
            <!-- Small boxes (Stat box) -->
    <div class="container">
        <div class="row" >
            <div class="">
                <div class="panel panel-default" id="headeremi">
                    <div class="panel-heading text-center ">Creacion de Nuevo Estudiante</div>
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
                        <form method="post" class="form-horizontal" enctype="multipart/form-data" role="form"  action="{{ url('admin/estudiante/save')  }}"  >
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="nombres" class="col-md-4 control-label colorazul letragrande" style="font-size: 1.2em">Nombres</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="nombres" name="nombres"  required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="father" class="col-md-4 control-label colorazul letragrande" style="font-size: 1.2em">Apellido Paterno</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="father" name="father"  required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="mother" class="col-md-4 control-label colorazul letragrande" style="font-size: 1.2em">Apellido Materno</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="mother" name="mother" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label colorazul letragrande" style="font-size: 1.2em">Email</label>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="titulo" class="col-md-4 control-label colorazul letragrande" style="font-size: 1.2em">CI</label>
                                <div class="col-md-6">
                                    <input type="text" onkeypress="return justNumbers(event);" class="form-control" id="titulo" name="ci" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label colorazul" style="font-size: 1.2em">Sexo</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="sexo">
                                        <option value="1">Masculino</option>
                                        <option value="0">Femenino</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-md-4 control-label colorazul" style="font-size: 1.2em">Curso</label>
                                <div class="col-md-6" id="curso">
                                    <select class="form-control" name="curso">
                                        <option value="1">1° Primaria</option>
                                        <option value="2">2° Primaria</option>
                                        <option value="3">3° Primaria</option>
                                        <option value="4">4° Primaria</option>
                                        <option value="5">5° Primaria</option>
                                        <option value="6">6° Primaria</option>
                                        <option value="7">1° Secundaria</option>
                                        <option value="8">2° Secundaria</option>
                                        <option value="9">3° Secundaria</option>
                                        <option value="10">4° Secundaria</option>
                                        <option value="11">5° Secundaria</option>
                                        <option value="12">6° Secundaria</option>
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
                                <strong>!!Felicidades!!</strong>Se Creo el Estudiante Correctamente <br><br>
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