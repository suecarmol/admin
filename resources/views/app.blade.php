<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Reach</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <!--external css-->
    <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet">

    @yield('head')

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<section id="container" >
    <!-- **********************************************************************************************************************************************************
    TOP BAR CONTENT
    *********************************************************************************************************************************************************** -->
    <!--header -->
    <header class="header black-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="{{ url('/') }}" class="logo"><b>Admin</b></a>
        <!--logo end-->

        <div class="top-menu">
            <ul class="nav pull-right top-menu">
                <li><a class="logout" href="{{ url('auth/logout') }}">Logout</a></li>
            </ul>
        </div>
    </header>
    <!-- ./header -->

    <!-- **********************************************************************************************************************************************************
    MAIN SIDEBAR MENU
    *********************************************************************************************************************************************************** -->
    <!-- Sidebar -->
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu -->
            <ul class="sidebar-menu" id="nav-accordion">

                <li class="mt">
                    <a id="li-anuncios" href="{{ url('anuncios') }}">
                        <i class="fa fa-map-marker"></i>
                        <span>Anuncios</span>
                    </a>
                </li>

                <li class="mt">
                    <a id="li-usuarios" href="{{ url('usuarios') }}">
                        <i class="fa fa-user"></i>
                        <span>Usuarios</span>
                    </a>
                </li>

                <li class="mt">
                    <a id="li-datos" href="{{ url('datos') }}">
                        <i class="fa fa-database"></i>
                        <span>Base de datos</span>
                    </a>
                </li>

                <li class="mt">
                    <a id="li-actualizaciones" href="{{ url('actualizaciones') }}">
                        <i class="fa fa-upload"></i>
                        <span>Actualizaciones</span>
                    </a>
                </li>

            </ul>
            <!-- ./sidebar menu-->
        </div>
    </aside>
    <!-- ./Sidebar -->

    <!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            @yield('titulo')
            <!-- <h3><i class="fa fa-angle-right"></i> Blank Page</h3> -->

            @yield('content')

            <!--<div class="row mt">
                <div class="col-lg-12">
                    <p>Place your content here.</p>
                </div>
            </div>-->

        </section><!-- ./wrapper -->
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
        <div class="text-center">
            2015 - ITESM - Segunda Mano
        </div>
    </footer>
    <!--footer end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui-1.9.2.custom.min.js') }}"></script>
<script src="{{ asset('js/jquery.ui.touch-punch.min.js') }}"></script>
<script class="include" type="text/javascript" src="{{ asset('js/jquery.dcjqaccordion.2.7.js') }}"></script>
<script src="{{ asset('js/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('js/jquery.nicescroll.js') }}" type="text/javascript"></script>


<!--common script for all pages-->
<script src="{{ asset('js/common-scripts.js') }}"></script>

<!--script for this page-->

<script>
    //custom select box

    $(function(){
        //$('select.styled').customSelect();
    });

</script>

@yield('scripts')

</body>
</html>

