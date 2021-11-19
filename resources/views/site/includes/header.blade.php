<!-- start header/-->
<header class="header fixed">
  <div class="container">
    <div class="logo fl-left">
      <a href="{{ route('pages.home') }}">
        <img src="{{ url('storage/img/logo.png') }}" alt="LA FOcA">
      </a>
    </div>
    <a class="nav-toggle fl-right" href="{{ route('pages.home') }}">
      <i class="fas fa-bars"></i> MENU
    </a>
    <nav class="nav">
      <p class="text-right">
        <span class="nav-close">
          <i class="fas fa-times"></i>
        </span>
      </p>
      <ul>
        <li><a href="{{ route('pages.home') }}">Início</a></li>
        <li><a href="{{ route('pages.sobre') }}" id="about">Sobre</a></li>
        <li><a href="{{ route('pages.noticias') }}" id="news">Notícias</a></li>
        <li><a href="{{ route('pages.pesquisas') }}" id="researches">Pesquisas</a></li>
        <li class="dropdown">
          <a href="#" id="results" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            Resultados
          </a>
          <ul id="menu-results" class="dropdown-menu other-pages" aria-labelledby="results">
            <a class="dropdown-item" href="{{ route('pages.artigos') }}">Publicações</a>
            <a class="dropdown-item" href="{{ route('pages.cursos') }}">Minicursos</a>
          </ul>
        </li>
        <li><a href="{{ route('pages.equipe') }}" id="team">Equipe</a></li>
        <li><a href="{{ route('pages.contato') }}" id="contact">Contato</a></li>
      </ul>
    </nav>
  </div>
</header>
<!-- end header/-->