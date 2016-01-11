{{--
@inject('number', 'App\Http\Controllers\Calendar\CalendarInjectionController')
--}}
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('dist/img/user2-160x160.png') }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{ \App\Kardex::find(Auth::user()->id)->paterno() }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> {{ Auth::user()->tipo() }}</a>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="header">Navegacion Principal</li>
            <li class="active treeview">
                <a href="{{ url('admin/home') }}">
                    <i class="fa fa-dashboard"></i> <span>Panel Principal</span>
                </a>
            </li>

            @if(Auth::user()->tipo()=='Administrador')
                <li class="treeview">
                    <a href="">
                        <i class="fa fa-user"></i><span>Gestion de Usuario</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ url('admin/crear/admin') }}"><i class="fa fa-circle-o"></i>Crear Administrador</a></li>
                        <li><a href="{{ url('admin/crear/director') }}"><i class="fa fa-circle-o"></i>Crear Director</a></li>
                        <li><a href="{{ url('admin/crear/secretaria') }}"><i class="fa fa-circle-o"></i>Crear Secretaria</a></li>
                        <li><a href="{{ url('admin/crear/docente') }}"><i class="fa fa-circle-o"></i>Crear Docente</a></li>
                        <li><a href="{{ url('admin/crear/estudiante') }}"><i class="fa fa-circle-o"></i>Crear Estudiante</a></li>
                        <li><a href="{{ url('admin/modificar') }}"><i class="fa fa-circle-o"></i>Modificar Usuario</a></li>
                    </ul>
                </li>
            @endif
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>