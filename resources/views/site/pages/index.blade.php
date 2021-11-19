<!DOCTYPE html>
<!-- saved from url=(0055)http://testerealles.000webhostapp.com/curso01/index.php -->
<html lang="pt-br">

<head>
  @include('site.includes.head')
</head>

<body id="inicio">
  <!-- start header/-->
  <header class="header">
    <div class="content">
      <div class="logo fl-left">
        <a href="{{ route('pages.home') }}">
          <img src="{{ url('storage/img/logo.png') }}" alt="LA FocA">
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
          <li><a href="{{ route('pages.home') }}" id="home">Início</a></li>
          <li><a href="{{ route('pages.sobre') }}">Sobre</a></li>
          <li><a href="{{ route('pages.noticias') }}">Notícias</a></li>
          <li><a href="{{ route('pages.pesquisas') }}">Pesquisas</a></li>
          <li class="dropdown">
            <a id="results-index result" class="dropdown-toggle" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">Resultados</a>
            <ul class="dropdown-menu page-index" aria-labelledby="results-index">
              <li class="dropdown-item item-index"><a href="{{ route('pages.artigos') }}">Publicações</a></li>
              <li class="dropdown-item item-index"><a href="{{ route('pages.cursos') }}">Minicursos</a></li>
            </ul>
          </li>
          <li><a href="{{ route('pages.equipe') }}">Equipe</a></li>
          <li><a href="{{ route('pages.contato') }}">Contato</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <!-- end header/-->

  <!-- start search and statistics/-->
  <section class="section">
    <div class="search-box bg-fixed">
      <header>
        <h1>LA FocA</h1>
        <p class="tagline">Laboratório de Abordagens de Ensino Focadas no ALuno</p>
      </header>
      ' {{-- <div class="row">
        <div class="col-md-4 offset-4">
          <script>
            (function() {
              var cx = '008541009703357527235:wcbxzsectvo';
              var gcse = document.createElement('script');
              gcse.type = 'text/javascript';
              gcse.async = true;
              gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
              var s = document.getElementsByTagName('script')[0];
              s.parentNode.insertBefore(gcse, s);
            })();
          </script>
          <gcse:search></gcse:search>
        </div>
      </div>' --}}
      {{-- <form class="form" name="formSearch" action="http://testerealles.000webhostapp.com/curso01/index.php#"
        method="post">
        <input class="search" type="search" name="busca" id="busca" placeholder="Pesquisar">
        <button class="submit" type="submit">
          <i class="fas fa-search"></i>
        </button>
      </form> --}}
    </div>
    <div class="statistics">
      <div class="statistics-items">
        <span class="span">{{ $totalCourses }} <i class="fas fa-book"></i></span>
        <p>Publicações</p>
      </div>
      <div class="statistics-items">
        <span class="span">{{ $totalResearch }} <i class="fas fa-flask"></i></span>
        <p>Pesquisas</p>
      </div>
      <div class="statistics-items">
        <span class="span">{{ $totalNews }} <i class="fas fa-chalkboard-teacher"></i></span>
        <p>Minicursos</p>
      </div>
      <div class="statistics-items">
        <span class="span">{{ $totalProfessional }} <i class="fas fa-user-tie"></i></span>
        <p>Pesquisadores</p>
      </div>
      <div class="statistics-items">
        <span class="span">{{ $totalNews }} <i class="fas fa-newspaper"></i></span>
        <p>Notícias</p>
      </div>
    </div>
  </section>
  <!-- end search end statistics/-->

  <!-- start destiny/-->
  <section class="section">
    <div class="content">
      <header class="section-header">
        <h1>Fique informado</h1>
        <p>Últimas Notícias</p>
      </header>
      <div class="row-home">
        @foreach ($noticias as $noticia)
        <div class="destiny-col">
          <div class="box">
            <div class="box-name">
              Notícia
            </div>
            <div class="box-cover-news">
              <a href="{{ route('pages.noticia_completa', $noticia->id) }}"><img
                  src="{{ url('storage/'.$noticia->image) }}" alt="Destino 1"></a>
            </div>
            <div class="box-details">
              <div class="box-details-info">
                <a href="{{ route('pages.noticia_completa', $noticia->id) }}">
                  <h2>{{ $noticia->title }}</h2>
                </a>
                <p>{!! mb_strimwidth($noticia->description, 0, 60, '...') !!}</p>
              </div>
            </div>
          </div>
        </div>
        @endforeach

        <!-- start load more /-->
        <div class="row-home">
          <div class="content text-center">
            <button class="loadmore" onClick="rota('{{ route('pages.noticias') }}');">Ver todas</button>
          </div>
        </div>
        <!-- end load more /-->
      </div>
  </section>
  <!-- end destiny/-->

  <!-- start parallax/-->
  <div class="parallax bg-fixed">
    <div class="content">
      <h1 class="parallax-text">Não sabe o que é Abordagens de Ensino focadas no ALuno?</h1>
      <p class="parallax-text">Muitos professores adotam abordagens tradicionais de ensino, ministrando aulas
        expositivas e aplicando provas discursivas/objetivas...</p>
      <a href="http://carlosportela.com.br/arquivos/teseCarlosPortela.pdf" target="_blank" class="parallax-btn">saíba
        mais</a>
    </div>
  </div>
  <!-- end parallax/-->


  <!-- start destak/-->
  <section class="section">
    <div class="content">
      <header class="section-header">
        <h1>Aprenda mais</h1>
        <p>Minicursos ofertados</p>
      </header>

      <div class="row-home">
        @foreach ($courses as $course)
        <div class="destak-col">
          <div class="box">
            <div class="box-name">
              Minicurso
            </div>
            <div class="box-cover-publications">
              <a href="{{ route('pages.visualizar_curso', $course->id) }}"><img
                  src="{{ url('storage/'.$course->image) }}" alt="Destaque 1"></a>
            </div>
            <div class="box-details">
              <div class="box-details-info">
                <a href="{{ route('pages.visualizar_curso', $course->id) }}">
                  <h2>{{ $course->title }}</h2>
                </a>
                <p>{!! mb_strimwidth($course->description, 0, 30, '...') !!}</p>
              </div>
            </div>
          </div>
        </div>
        @endforeach

        <!-- start load more /-->
        <div class="row-home mb-4">
          <div class="content text-center">
            <button class="loadmore" onClick="rota('{{ route('pages.cursos') }}');">Ver todos</button>
          </div>
        </div>
        <!-- end load more /-->
      </div>
  </section>
  <!-- end destak/-->

  <!-- start testimony/-->
  {{-- <section class="section testimony bg-fixed">
    <div class="content">
      <header class="section-header">
        <h1>Testemunhas</h1>
        <p>Duis aute dolor in reprehenderit in voluptate valit essy ciquir</p>
      </header>

      <article class="testimony-article">
        <h1>Nunc lacinia ante nunc ac loborits ipsum intemdum
          adispiscing Lorem ipsum risus bibendum porttitor
          aliquam tellus inceptos.</h1>
        <span class="image">
          <img src="{{ url('storage/img/testemunha-01.jpg') }}" alt="testmony 1">
  </span>
  <p>
    <span class="name">Jane Does</span>
    <span class="charge">CEO - Facebook</span>
  </p>
  </article>

  <article class="testimony-article">
    <h1>Nunc lacinia ante nunc ac loborits ipsum intemdum
      adispiscing Lorem ipsum risus bibendum porttitor
      aliquam tellus inceptos.</h1>
    <span class="image">
      <img src="{{ url('storage/img/testemunha-02.jpg') }}" alt="testmony 2">
    </span>
    <p>
      <span class="name">Lincon Perry</span>
      <span class="charge">CEO - twitter</span>
    </p>
  </article>

  <article class="testimony-article">
    <h1>Nunc lacinia ante nunc ac loborits ipsum intemdum
      adispiscing Lorem ipsum risus bibendum porttitor
      aliquam tellus inceptos.</h1>
    <span class="image">
      <img src="{{ url('storage/img/testemunha-03.jpg') }}" alt="testmony 3">
    </span>
    <p>
      <span class="name">Marry Fonda</span>
      <span class="charge">CEO - Instagram</span>
    </p>
  </article>
  </div>
  </section> --}}
  <!-- end testimony/-->


  <!-- start FOOTER/-->
  <footer class="footer">
    <div class="content">
      <div class="footer-col">
        <h1>Objetivos</h1>
        <p class="text-justify">O principal objetivo deste Laboratório de Pesquisa é a definição e disponibilização de
          um portal de
          abordagens de ensino focadas no aluno. Este portal pretende fornecer a professores e alunos recomendações,
          material de apoio e estratégias de ensino.
          Este grupo de pesquisa assume relevância dada a carência de alunos qualificados para atuarem nas diversas
          áreas de conhecimento (multidisciplinar). Neste sentido, busca-se atender às demandas do mercado por
          profissionais competentes em suas atividades. Os pesquisadores deste grupo acreditam que a partir da
          aplicação de abordagens e técnicas de ensino, pode-se motivar e tornar os alunos o centro do processo de
          aprendizagem.
        </p>
      </div>
      <div class="footer-col">
        {{-- <h1>Links úteis</h1>
        <ul class="footer-col-links">
          <li><a href="http://testerealles.000webhostapp.com/curso01/index.php#">Link 1</a></li>
          <li><a href="http://testerealles.000webhostapp.com/curso01/index.php#">Link 2</a></li>
          <li><a href="http://testerealles.000webhostapp.com/curso01/index.php#">Link 3</a></li>
          <li><a href="http://testerealles.000webhostapp.com/curso01/index.php#">Link 4</a></li>
        </ul> --}}
      </div>
      <div class="footer-col">
        <h1>Social</h1>
        <ul class="footer-col-social">
          <li>
            <a href="https://www.facebook.com/lafocameta" target="_blank">
              <i class="fab fa-facebook fa-2x"></i>
            </a>
          </li>
        </ul>
      </div>
      <div class="row-home footer-author">
        <p class="author">Copyright &copy; LA FocA 2019</p>
      </div>
    </div>
  </footer>
  <!-- end FOOTER/-->
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/script.js') }}"></script>
  <div
    style="text-align: right;position: fixed;z-index:9999999;bottom: 0;width: auto;right: 1%;cursor: pointer;line-height: 0;display:block !important;">
    <a title="Hosted on free web hosting 000webhost.com. Host your own website for FREE." target="_blank"
      href="https://www.000webhost.com/?utm_source=000webhostapp&amp;utm_campaign=000_logo&amp;utm_medium=website&amp;utm_content=footer_img"><img
        src="./HTML5 &amp; CSS Pro - Curso 01_files/footer-powered-by-000webhost-white2.png" alt="www.000webhost.com">
    </a>
  </div>
  <script>
    function getCookie(e){for(var t=e+"=",n=decodeURIComponent(document.cookie).split(";"),o=0;o<n.length;o++){for(var i=n[o];" "==i.charAt(0);)i=i.substring(1);if(0==i.indexOf(t))return i.substring(t.length,i.length)}return""}getCookie("hostinger")&&(document.cookie="hostinger=;expires=Thu, 01 Jan 1970 00:00:01 GMT;",location.reload());var notification=document.getElementsByClassName("notice notice-success is-dismissible"),hostingerLogo=document.getElementsByClassName("hlogo"),mainContent=document.getElementsByClassName("notice_content")[0],newList=["Powerful and Easy-To-Use Control Panel.","1-Click Auto Installer and 24/7 Live Support.","Free Domain, Email and SSL Bundle.","5x faster WordPress performance","Weekly Backups and Fast Response Time."];if(0<notification.length&&null!=mainContent){var googleFont=document.createElement("link");googleFontHref=document.createAttribute("href"),googleFontRel=document.createAttribute("rel"),googleFontHref.value="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600",googleFontRel.value="stylesheet",googleFont.setAttributeNode(googleFontHref),googleFont.setAttributeNode(googleFontRel);var css="@media only screen and (max-width: 768px) {.web-hosting-90-off-image-wrapper {position: absolute;} .notice_content {justify-content: center;} .web-hosting-90-off-image {opacity: 0.3;}} @media only screen and (min-width: 769px) {.notice_content {justify-content: space-between;} .web-hosting-90-off-image-wrapper {padding: 0 5%}} .content-wrapper {z-index: 5} .notice_content {display: flex; align-items: center;} * {-webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;} .upgrade_button_red_sale{border: 0; border-radius: 3px; background-color: #ff123a !important; padding: 15px 55px !important; margin-left: 30px; font-family: 'Open Sans', sans-serif; font-size: 16px; font-weight: 600; color: #ffffff;} .upgrade_button_red_sale:hover{color: #ffffff !important; background: #d10303 !important;}",style=document.createElement("style"),sheet=window.document.styleSheets[0];style.styleSheet?style.styleSheet.cssText=css:style.appendChild(document.createTextNode(css)),document.getElementsByTagName("head")[0].appendChild(style),document.getElementsByTagName("head")[0].appendChild(googleFont);var button=document.getElementsByClassName("upgrade_button_red")[0],link=button.parentElement;link.setAttribute("href","https://www.hostinger.com/hosting-starter-offer?utm_source=000webhost&utm_medium=panel&utm_campaign=000-wp"),link.innerHTML='<button class="upgrade_button_red_sale">TRANSFER NOW</button>',(notification=notification[0]).setAttribute("style","padding-bottom: 10px; padding-top: 5px; background-image: url(https://cdn.000webhost.com/000webhost/promotions/springsale/mountains-neon-background.jpg); background-color: #000000; background-size: cover; background-repeat: no-repeat; color: #ffffff; border-color: #ff123a; border-width: 8px;"),notification.className="notice notice-error is-dismissible",(hostingerLogo=hostingerLogo[0]).setAttribute("src","https://cdn.000webhost.com/000webhost/promotions/springsale/logo-hostinger-white.svg"),hostingerLogo.setAttribute("style","float: none !important; height: auto; max-width: 100%; margin: 40px 20px 10px 30px;");var h1Tag=notification.getElementsByTagName("H1")[0];h1Tag.remove();var paragraph=notification.getElementsByTagName("p")[0];paragraph.innerHTML="Fast & Secure Web Hosting. <br>Limited time offer: get an SSL certificate for FREE",paragraph.setAttribute("style",'max-width: 600px; margin-left: 30px; font-family: "Open Sans", sans-serif; font-size: 22px; font-weight: 600;');var list=notification.getElementsByTagName("UL")[0];list.setAttribute("style","max-width: 675px;");for(var listElements=list.getElementsByTagName("LI"),i=0;i<newList.length;i++)listElements[i].setAttribute("style","color:#ffffff; list-style-type: disc; margin-left: 30px; font-family: 'Open Sans', sans-serif; font-size: 14px; font-weight: 300; line-height: 1.5;"),listElements[i].innerHTML=newList[i];listElements[listElements.length-1].remove();var org_html=mainContent.innerHTML,new_html='<div class="content-wrapper">'+mainContent.innerHTML+'</div><div class="web-hosting-90-off-image-wrapper"><img class="web-hosting-90-off-image" src="https://cdn.000webhost.com/000webhost/promotions/springsale/web-hosting-90-off.png"></div>';mainContent.innerHTML=new_html;var saleImage=mainContent.getElementsByClassName("web-hosting-90-off-image")[0];!function(){var t=document.querySelectorAll("body.wp-admin")[0];function e(){var e=document.createElement("iframe");e.id="hgr-promo-widget",e.setAttribute("src","https://www.hostinger.com/widgets/bottom-banner-sale/000_wp_admin"),e.setAttribute("allowfullscreen",!0),e.setAttribute("frameborder",0),e.style.cssText="z-index: 2147483000 !important;position: fixed !important;bottom: 0; width: 100%;!important; left: 0!important;",e.style.opacity=0,e.onload=function(){iFrameResize({},"#hgr-promo-widget"),e.style.opacity=1},t.insertAdjacentElement("afterend",e)}if(window.iFrameResize)e();else{var n=document.createElement("script");n.type="text/javascript",t.insertAdjacentElement("afterend",n),n.onload=e,n.src="https://unpkg.com/iframe-resizer@3.6.3/js/iframeResizer.min.js"}}()}
  </script>
</body>

</html>