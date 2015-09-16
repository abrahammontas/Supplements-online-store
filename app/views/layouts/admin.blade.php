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
    {{ HTML::style('css/bootstrap-responsive.css') }}
    {{ HTML::style('css/dataTables.css') }}
    {{ '' }}
    </style>
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
              @foreach ($tabs as $texto => $a)  
                <li {{ $selected_tab == $texto ? 'class="active"' : '' }}>
                  {{ HTML::link($a, $texto) }}
                </li>
              @endforeach     
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
      <!--
      <div class="navbar-inner" id="sub-bar" >
        <div class="container-fluid">
          <div class="nav-collapse collapse">
            <ul class="nav">
                <li class="active">
                  <a href="#">Todos</a>
                </li>     
                <li>
                  <a href="#">Mapa</a>
                </li>     
            </ul>
          </div><!--/.nav-collapse
        </div>
      </div>-->
    </div>

    <div class="container">
      <div class="row-fluid">
        <div class="span2">
          <ul class="nav nav-list">
            @foreach($options as $header => $opt)
              <li class="nav-header">{{ $header }}</li>
              @foreach($opt as $o => $a)
                <li {{ $o == $selected_option ? 'class="active"' : '' }}>
                  {{ HTML::link($a, $o) }}
                </li>
              @endforeach
            @endforeach
            <li class="divider"></li>
          </ul>
        </div>
        <div class="span10" style="padding-left: 20px">
          <!-- Errors -->
          @if(Session::get('sys-success') != null)
            <div class="row-fluid">
              <div class="span12">
                <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  {{ Session::get('sys-success') }}
                </div>
              </div>
            </div>
            @endif

            @if($errors->has())
              <div class="row-fluid">
              <div class="span12">
                <div class="alert alert-danger">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <h3>Error en formulario</h3>
                  <ul>
                    @foreach ($errors->all('<li>:message</li>') as $message)
                      {{ $message }}
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>
            @endif

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
