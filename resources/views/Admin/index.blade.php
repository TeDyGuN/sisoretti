@extends('Plantilla/plantilla')
@section('titulo', 'Panel de Control')
@section('addsidebar')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        {{--<h3>{{count(\App\User::all())}}</h3>--}}
                        <h3>3</h3>
                        <p>Usuarios Registrados</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="2"{{--{{ url('admin/reportes') }}"--}} class="small-box-footer">Mas Informacion <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->
            <div class="col-md-6">
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>{{--{{count(\App\Trabajo::all())}}--}}3</h3>
                        <p>Trabajos Registrados</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="2{{--{{url('sistema/ListaTrabajos')}}--}}" class="small-box-footer">Mas Informacion <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div><!-- /.row -->
    </div>
@endsection
