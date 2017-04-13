    <!-- layouts/nav.blade.php -->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Inscrição</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button"  href="#">Pilotos<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/pilotos">Todos</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="/pilotos/novo">Novo</a></li>
              </ul>
            </li>
            
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button"  href="#">Eventos<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/eventos">Todos</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="/eventos/novo">Novo</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Organizadores <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/organizadores">Todos</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="/organizadores/novo">Novo</a></li>
              </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button"  href="#">Usuários<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="usuarios">Todos</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="/usuarios/novo">Novo</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}} <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Criar Super User</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">logout</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>