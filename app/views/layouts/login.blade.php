<!DOCTYPE html>
<html lang="en" ng-app>
    <head>
        <meta charset="utf-8">
        <title>VNS</title>
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Le styles -->
        {{ HTML::style('css/bootstrap.admin.min.css') }}
        {{ HTML::style('css/datepicker.css') }}
        {{ HTML::style('css/bootstrap-responsive.css') }}
        {{ HTML::style('css/dataTables.css') }}
        </style>
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="../assets/js/html5shiv.js"></script>
        <![endif]-->
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="../assets/ico/favicon.png">
    </head>
    <body>
        <div class="navbar">
            <div class="navbar-inner" id="top-bar">
                <div class="container-fluid">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="">VNS</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                        </ul>
                        <ul class="nav pull-right">
                            <li class="dropdown">

                                <ul class="dropdown-menu">
                                    <li>{{ HTML::link('user-action/editar','Editar Perfil') }}</li>
                                    <li>{{ HTML::link('user-action/change-password','Cambiar Clave') }}</li>
                                    <li>{{ HTML::link('login/logout', 'Salir') }}</li>
                                </ul>
                            </li>
                        </ul>
                        </div><!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            @if(Session::get('sys-error') != null)
            <div class="row-fluid">
                <div class="span12">
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        {{ Session::get('sys-error') }}
                    </div>
                </div>
            </div>
            @endif
            @if(Session::get('sys-info') != null)
            <div class="row-fluid">
                <div class="span12">
                    <div class="alert alert-info">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        {{ Session::get('sys-info') }}
                    </div>
                </div>
            </div>
            @endif
            @if(Session::get('sys-alert') != null)
            <div class="row-fluid">
                <div class="span12">
                    <div class="alert">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        {{ Session::get('sys-alert') }}
                    </div>
                </div>
            </div>
            @endif
            <!-- /Errors -->
            @yield('content')
        </div>
    </div>

    <div class="clear"></div>
    <hr>
    <footer>
        <p>&copy;VNS 2015</p>
    </footer>
    </div> <!-- /container -->
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    {{ HTML::script('js/jquery.js') }}
    {{ HTML::script('js/bootstrap.js') }}
    {{ HTML::script('js/jquery.dataTables.min.js') }}
    <script type="text/javascript">
        var BASE_URL = "{{ URL::to('/') }}/";
    </script>
    @yield('scripts')
    <!-- {{ HTML::script('js/dataTables.js') }} -->
</body>
</html>