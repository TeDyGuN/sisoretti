{{--
@inject('number', 'App\Http\Controllers\Calendar\CalendarInjectionController')
--}}
<header class="main-header">
    <!-- Logo -->
    <a href="" class="logo"><b>SIS|GORETTI</b></a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->

                <!-- Tasks: style can be found in dropdown.less -->
                <li class="dropdown tasks-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-flag-o"></i>{{--
                        <span class="label label-danger">{{ $number->getNumberEvents() }}</span>--}}
                        <span class="label label-danger">3</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">Tienes 3 tareas</li>{{--
                        <li class="header">Tienes {{ $number->getNumberEvents() }} tareas</li>--}}
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul>
                                {{--@foreach($number->getTittlesEvents() as $fechas)
                                    <li>
                                        <p>{{$fechas->titulo_evento}}</p>
                                    </li>
                                @endforeach--}}
                            </ul>
                        </li>
                        <li class="footer">{{--
                            <a href="{{url('calendar/calendar')}}">Ver todos tus Eventos</a>--}}
                            <a href="{{url('calendar/calendar')}}">Ver todos tus Eventos</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown user user-menu">
                    <a href="{{ url('/logout') }}">
                        <span class="hidden-xs">Salir</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>