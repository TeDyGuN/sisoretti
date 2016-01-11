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
                    <div class="panel-heading text-center ">Creacion de Usuario</div>
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
                        <form method="post" class="form-horizontal" enctype="multipart/form-data" role="form"  action="{{ url('admin/usuario/save')  }}"  >
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="titulo" class="col-md-4 control-label colorazul letragrande" style="font-size: 1.2em">Nombres</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="titulo" name="nombres"  required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="titulo" class="col-md-4 control-label colorazul letragrande" style="font-size: 1.2em">Apellido Paterno</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="titulo" name="father"  required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="titulo" class="col-md-4 control-label colorazul letragrande" style="font-size: 1.2em">Apellido Materno</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="titulo" name="mother" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="titulo" class="col-md-4 control-label colorazul letragrande" style="font-size: 1.2em">Email</label>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" id="titulo" name="email"  required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="titulo" class="col-md-4 control-label colorazul letragrande" style="font-size: 1.2em">CI</label>
                                <div class="col-md-6">
                                    <input type="text" onkeypress="return justNumbers(event);" class="form-control" id="titulo" name="ci" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tutor" class="col-md-4 control-label colorazul" style="font-size: 1.2em">Tipo de Usuario</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="type">
                                        <option value="Admin">Administrador</option>
                                        <option value="Cursante">Estudiante</option>
                                        <option value="Tutor">Tutor</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tutor" class="col-md-4 control-label colorazul" style="font-size: 1.2em">Personal</label>
                                <div class="col-md-6" id="milico">
                                    <select class="form-control" name="personal">
                                        <option value="civil">Civil</option>
                                        <option value="militar" selected="selected">Militar</option>
                                    </select>
                                </div>
                            </div>
                            <div id="militar">
                                <div class="form-group">
                                    <label for="tutor" class="col-md-4 control-label colorazul" style="font-size: 1.2em">Fuerza</label>
                                    <div class="col-md-6">
                                        <select class="form-control" name="fuerza" id="fue">
                                            <option value="Ejercito">Ejercito</option>
                                            <option value="Armada">Armada</option>
                                            <option value="Fuerza Aerea">Fuerza Aerea</option>
                                            <option value="null" hidden>null</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="tutor" class="col-md-4 control-label colorazul" style="font-size: 1.2em">Grado</label>
                                    <div class="col-md-6">
                                        <select class="form-control" name="grado" id="grado">
                                            <option value="Coronel">Coronel</option>
                                            <option value="Teniente Coronel">Teniente Coronel</option>
                                            <option value="Mayor">Mayor</option>
                                            <option value="Capitan Navio">Capitan Navio</option>
                                            <option value="Capitan Fragata">Capitan Fragata</option>
                                            <option value="Capitan Corbeta">Capitan Corbeta</option>
                                            <option value="null" hidden>null</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="titulo" class="col-md-4 control-label colorazul letragrande" style="font-size: 1.2em">Especialidad</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="esp" name="esp">
                                    </div>
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
                                <strong>!!Felicidades!!</strong>Se Creo el usuario Correctamente <br><br>
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
        $("#milico" ).change(function() {
            if($('#milico').val('civil'))
            {

                $('#militar').fadeOut();
                $('#esp').val('null');
                $("#grado :selected").text('null');
                $("#grado").val('null');
                $("#fue :selected").text('null');
                $("#fue").val('null');
            }
            if($('#milico').val('militar'))
            {
                $('#militar').show();
            }
        });
    </script>
@endsection