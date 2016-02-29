<nav class="navbar navbar-default hidden-sm hidden-md hidden-lg" id="navbar">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand">Menú de navegación</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li>
          <a href="{{ url('/') }}">
            INICIO
            <span class="sr-only"></span>
          </a>
        </li>
        <li>
          <a href="{{ url('/nosotras') }}">
            NOSOTRAS
          </a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <i>SOUTACHE</i>
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li>
              <a href="{{ url('/soutache/mini') }}">
                <i>Mini</i>
              </a>
            </li>
            <li>
              <a href="{{ url('/soutache/cintillos') }}">
                <i>Cintillos</i>
              </a>
            </li>
            <li>
              <a href="{{ url('/soutache/zarcillos') }}">
                <i>Zarcillos</i>
              </a>
            </li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <i>ALAMBRISMO</i>
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li>
              <a href="{{ url('/alambrismo/collares') }}">
                <i>Collares</i>
              </a>
            </li>
            <li>
              <a href="{{ url('/alambrismo/anillos') }}">
                <i>Anillos</i>
              </a>
            </li>
            <li>
              <a href="{{ url('/alambrismo/pulseras') }}">
                <i>Pulseras</i>
              </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="{{ url('/vitrofusion') }}">
            <i>VITROFUSIÓN</i>
          </a>
        </li>
        <li>
          <a href="#contacto">
            CONTACTO
          </a>
        </li>
        <li>
          <a href="https://www.instagram.com/adharave/" target="_blank">
            SÍGUENOS
          </a>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>