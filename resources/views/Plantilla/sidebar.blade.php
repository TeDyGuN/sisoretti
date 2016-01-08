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
                {{--<p>{{ Auth::user()->first_name.' '.Auth::user()->father_last_name }}</p>--}}
                <p>{{ Auth::user()->email }}</p>
                {{--<a href="#"><i class="fa fa-circle text-success"></i> {{ Auth::user()->type }}</a>--}}
                <a href="#"><i class="fa fa-circle text-success"></i> sssss</a>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="header">Navegacion Principal</li>
            <li class="active treeview">
                {{--<a href="{{ url('admin/home') }}">--}}
                    <a href="">
                    <i class="fa fa-dashboard"></i> <span>Panel Principal</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>