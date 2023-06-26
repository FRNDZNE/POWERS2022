<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">
        <!-- LOGO -->
        <div class="topbar-left">
            <a href="{{url('/')}}" class="logo">
                <span>
                    <img src="{{asset('/')}}/background/logo.svg" alt="" height="50">
                </span>
                <i>
                    <img src="{{asset('/')}}/template/backend/vertical/assets/images/logo_sm.png" alt="" height="28">
                </i>
            </a>
        </div>
        <!-- User box -->
        @role(['admin','ranger','new'])
        <div class="user-box">
            <div class="user-img">
                @if (Auth::user()->foto == null)
                    <img src="{{asset('/')}}/static/avatar.jpg" alt="user-img" title="{{Auth::user()->name}}" class="rounded-circle img-fluid"> 
                @else
                    <img src="{{asset(Auth::user()->foto)}}" alt="foto rusak" title="{{Auth::user()->name}}" class="rounded-circle img-fluid" style="width:48px;height:48px;">
                @endif
            </div>
            <h5><a href="#">{{ Auth::user()->name }}</a> </h5>
            <p class="text-muted">{{ Auth::user()->role()->first()->display_name}}</p>
        </div>
        @endrole
        @role(['core','commitee'])
        <div class="user-box">
            <div class="user-img">
                @if (Auth::user()->foto == null)
                    <img src="{{asset('/')}}/static/avatar.jpg" alt="user-img" title="{{Auth::user()->name}}" class="rounded-circle img-fluid"> 
                @else
                    <img src="{{asset(Auth::user()->foto)}}" alt="foto rusak" title="{{Auth::user()->name}}" class="rounded-circle img-fluid"  style="width:48px;height:48px;">
                @endif
            </div>
            <h5><a href="#">{{ Auth::user()->name }}</a> </h5>
            <p class="text-muted">
                @foreach (Auth::user()->role as $role)
                    {{ $role->display_name}}
                @endforeach
            </p>
        </div>
        @endrole
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            @role('admin')
            <ul class="metismenu" id="side-menu">
                <li>
                    <a href="{{route('index.dashboard.admin')}}">
                        <i class="fa fa-dashboard"></i><span> Dashboard </span>
                    </a>
                </li>
                <li class="menu-title">Members</li>
                <li>
                    <a href="javascript: void(0);"><i class="fa fa-users"></i><span> Committe </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('index.user.demis')}}">Demisioner</a></li>
                        <li><a href="{{route('index.user.core')}}">Core</a></li>
                        <li><a href="{{route('index.user.pr')}}">Public Relation</a></li>
                        <li><a href="{{route('index.user.edu')}}">Education</a></li>
                        <li><a href="{{route('index.user.eo')}}">Event Organizer</a></li>
                        <li><a href="{{route('index.user.mdd')}}">Member Development</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('index.user.ranger')}}"><i class="fa fa-user"></i> <span> Rangers </span></a>
                </li>
                <li>
                    <a href="javascript: void(0);"><i class="fa fa-child"></i> <span> New Rangers <span class="menu-arrow"></span></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('index.user.new.yes')}}"><i class="icon icon-user-following"></i> Diterima</a></li>
                        <li><a href="{{route('index.user.new.no')}}"><i class="icon icon-user-unfollow"></i> Belum Diterima</a></li>
                    </ul>
                </li>
                {{-- <li>
                    <a href="javascript: void(0);"><i class="fi-layout"></i><span> Absensi </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="layouts-menucollapsed.html">Menu Collapsed</a></li>
                        <li><a href="layouts-small-menu.html">Small Menu</a></li>
                        <li><a href="layouts-dark-lefbar.html">Dark Leftbar</a></li>
                        <li><a href="layouts-center-logo.html">Center Logo</a></li>
                    </ul>
                </li> --}}
                {{-- <li class="menu-title">Article            
                </li>
                <li>
                    <a href="javascript: void(0);"><i class="fi-briefcase"></i> <span> UI Elements </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="ui-typography.html">Typography</a></li>
                        <li><a href="ui-cards.html">Cards</a></li>
                        <li><a href="ui-buttons.html">Buttons</a></li>
                        <li><a href="ui-modals.html">Modals</a></li>
                        <li><a href="ui-spinners.html">Spinners</a></li>
                        <li><a href="ui-ribbons.html">Ribbons</a></li>
                        <li><a href="ui-tooltips-popovers.html">Tooltips & Popover</a></li>
                        <li><a href="ui-checkbox-radio.html">Checkboxs-Radios</a></li>
                        <li><a href="ui-tabs.html">Tabs</a></li>
                        <li><a href="ui-progressbars.html">Progress Bars</a></li>
                        <li><a href="ui-notifications.html">Notification</a></li>
                        <li><a href="ui-grid.html">Grid</a></li>
                        <li><a href="ui-sweet-alert.html">Sweet Alert</a></li>
                        <li><a href="ui-bootstrap.html">Bootstrap UI</a></li>
                        <li><a href="ui-range-slider.html">Range Slider</a></li>
                    </ul>
                </li>
                <li>
                    <a href="widgets.html">
                        <i class="fi-command"></i> <span> Widgets </span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);"><i class="fi-bar-graph-2"></i><span> Charts </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="chart-flot.html">Flot Chart</a></li>
                        <li><a href="chart-morris.html">Morris Chart</a></li>
                        <li><a href="chart-google.html">Google Chart</a></li>
                        <li><a href="chart-chartist.html">Chartist Chart</a></li>
                        <li><a href="chart-chartjs.html">Chartjs Chart</a></li>
                        <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                        <li><a href="chart-knob.html">Jquery Knob</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);"><i class="fi-box"></i><span> Icons </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="icons-materialdesign.html">Material Design</a></li>
                        <li><a href="icons-dripicons.html">Dripicons</a></li>
                        <li><a href="icons-fontawesome.html">Font awesome</a></li>
                        <li><a href="icons-feather.html">Feather Icons</a></li>
                        <li><a href="icons-simpleline.html">Simple Line Icons</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);"><i class="fi-paper"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="tables-basic.html">Basic Tables</a></li>
                        <li><a href="tables-datatable.html">Data Tables</a></li>
                        <li><a href="tables-responsive.html">Responsive Table</a></li>
                        <li><a href="tables-tablesaw.html">Tablesaw Tables</a></li>
                        <li><a href="tables-foo.html">Foo Tables</a></li>
                    </ul>
                </li> --}}
                <li class="menu-title">Managemen</li>
                <li>
                    <a href="{{route('index.user')}}"><i class="fa fa-user-secret"></i> <span> User </span></a>
                </li>
                <li>
                    <a href="{{route('index.jurusan')}}"><i class="mdi mdi-database-plus"></i> <span> Jurusan dan Prodi </span></a>
                </li>
                <li>
                    <a href="{{route('index.group')}}"><i class="fa fa-handshake-o"></i> <span> Group </span></a>
                </li>
                <li>
                    <a href="{{route('index.role')}}"><i class="fa fa-bar-chart-o"></i> <span> Role </span></a>
                </li>
            </ul>
            @endrole
            @role(['core','commitee'])
            <ul class="metismenu" id="side-menu">
                <li>
                    <a href="{{route('index.dashboard.commitee')}}">
                        <i class="fa fa-dashboard"></i><span> Dashboard </span>
                    </a>
                </li>
                <li>
                    <a href="{{route('detail.user.commitee',Auth::user()->id)}}">
                        <i class="fa fa-dashboard"></i><span> Profile </span>
                    </a>
                </li>
            </ul>
            @endrole
            @role(['ranger','new'])
            <ul class="metismenu" id="side-menu">
                <li>
                    <a href="{{route('index.dashboard.ranger')}}">
                        <i class="fa fa-dashboard"></i><span> Dashboard </span>
                    </a>
                </li>
                <li>
                    <a href="{{route('detail.user.ranger',Auth::user()->id)}}">
                        <i class="fa fa-dashboard"></i><span> Profile </span>
                    </a>
                </li>
            </ul>
            @endrole
        </div>
        <!-- Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>