<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGINA homeE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

<header data-bs-theme="dark">
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Etec Zona Leste</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item  {{ (Route:: current()->getName() === 'home' ? 'active' : '') }}"><a class="nav-link" aria-current="page" href="{{ route('site.home') }}">Home</a></li>
          <li class="nav-item  {{ (Route:: current()->getName() === 'cursos' ? 'active' : '') }}"><a class="nav-link" href="{{ route('site.cursos') }}">Cursos</a></li>
        <li class="nav-item  {{ (Route:: current()->getName() === 'instituicao' ? 'active' : '') }}"><a class="nav-link " href="{{ route('site.instituicao') }}">Instituição</a></li>
          <li class="nav-item  {{ (Route:: current()->getName() === 'departamentos' ? 'active' : '') }}"><a class="nav-link" href="{{ route('site.departamentos') }}">Departamento</a></li>
          <li class="nav-item  {{ (Route:: current()->getName() === 'oportunidades' ? 'active' : '') }}"><a class="nav-link" href="{{ route('site.oportunidades') }}">Oportunidades</a></li>
            <li class="nav-item  {{ (Route:: current()->getName() === 'vestibulinho' ? 'active' : '') }}"><a class="nav-link" href="{{ route('site.vestibulinho') }}">Vestibulinho</a></li>

        </ul>
        <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Digite aqui" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
      </div>
    </div>
  </nav>
</header>

<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
              id="bd-theme"
              type="button"
              aria-expanded="false"
              data-bs-toggle="dropdown"
              aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
    </div>
</main>

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

    <!-- START THE FEATURETTES -->
    <hr class="featurette-divider"> 

    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <!--<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>-->
    </div>
    <div class="carousel-inner"> 
      <div class="carousel-item active"> 
      <img src="{{ asset('img/vestibulinho_carrosel1.jpg') }}" class="d-block w-100" alt="Slide 1" width="1000" height="500">
        

          <div class="carousel-caption text-start">
          <p class="opacity-75">Vestibulinho</p>
            <h1>O Vestibulhinho das Escolas Técnicas Estaduais Ocorrem de Forma Semestral</h1>
            
        </div>
      </div>
  </div>

  <br><br>
  <div class="container">
    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider"> 

    <div class="row featurette">
      <div class="col-md-7">
      
        <h2 class="featurette-heading fw-normal lh-1" style="font-size: 40px;"><strong>O Vestibulinho</strong></span></h2>
        <br>
        <p class="lead">O processo de vestibulinho na ETEC, segue um padrão definido pelo Centro Paula Souza. Primeiramente, é divulgado um edital contendo todas as informações essenciais, como datas, locais de prova, cursos oferecidos, requisitos de inscrição e documentação necessária. Os candidatos devem então se inscrever dentro do prazo estipulado, geralmente de forma online através do site oficial do vestibulinho da ETEC, e pagar uma taxa de inscrição conforme especificado no edital.</p>
      </div>
      <div class="col-md-5">
      <img src="{{ asset('img/vestibulinho_quadrado1.jpeg') }}" class="d-block w-100" alt="Slide 2" width="500" height="500">
      </div>
    </div>

    <br><br>
    <div class="jumbotron">
    <div class="container">
  <p class="lead">A prova do vestibulinho consiste em 50 questões de múltipla escolha, abrangendo várias áreas do conhecimento, incluindo Língua Portuguesa, Matemática, Ciências e questões específicas relacionadas ao curso técnico escolhido. Após a correção das provas, os resultados são divulgados dentro do prazo estabelecido, permitindo que os candidatos verifiquem sua pontuação e classificação. Os aprovados devem então proceder com a matrícula dentro do prazo estabelecido, seguindo as orientações fornecidas pela ETEC, o que inclui a apresentação de documentos e o preenchimento de formulários específicos.

É fundamental que você, candidato, esteja atento à modalidade de curso que escolheu, pois o Centro Paula Souza não assume responsabilidade por inscrições em cursos incorretos ou modalidades não desejadas. Certifique-se de selecionar cuidadosamente o curso e a modalidade desejados durante o processo de inscrição, garantindo assim uma participação adequada e de acordo com suas preferências e objetivos educacionais.</p>
<hr class="my-4">

<br>
<div class="jumbotron">
    <div class="container">
  <h1 class="display-4"><strong>A Prova</strong></h1>

  <br>

  <p class="lead">A prova do Vestibulhinho tem duração de quatro horas. Os candidatos devem responder a 50 questões-teste, cada uma valendo um ponto, com cinco opções de respostas: A, B, C, D, E, das quais apenas uma é correta.

A prova prestada para as vagas remanescentes, as quais dão acesso direto ao segundo módulo do Ensino Técnico, é constituída de 30 questões-teste, também com cinco opções de respostas: A, B, C, D, E, das quais apenas uma é correta.</p>
<hr class="my-4">

<br>
<div class="jumbotron">
    <div class="container">
  <h1 class="display-4"><strong>Informações Importantes sobre o exame do Vestibulinho ETEC</strong></h1>

  <br>

  <p class="lead"><strong>01 </strong> – A prova avalia conhecimentos nas principais matérias da Base Nacional Comum Curricular (BNCC) do Ensino Fundamental II, incluindo Linguagens (Língua Portuguesa), Matemática, Ciências Humanas (Geografia e História) e Ciências da Natureza; <br>

  <strong>02 </strong> – As questões não são separadas por disciplinas, podendo ser multidisciplinares ou específicas; <br>

  <strong>03 </strong> – Valores e ações que promovam uma sociedade mais humana, justa e sustentável são avaliados, exigindo atenção a temas atuais relacionados a esses tópicos; <br>

  <strong>04 </strong> – As questões abordam competências como interpretação de diversos tipos de texto, aplicação de conhecimentos do Ensino Fundamental para resolver problemas, análise crítica de argumentos, reconhecimento de diferentes formas de linguagem e avaliação de ações de acordo com critérios estabelecidos.</p>
</div>
</div>
</div>
    </div>

    <br><br><br>
  <hr class="my-4">

  <!-- FOOTER -->
  
  <footer class>
  <div class="container">
  
<center>
    <img src="{{ asset('img/logo.jpg') }}" alt="logo" width="85" height="85"> <br><br>
    <p>&copy; 2024 Etec Zona Leste.</p>

    <p><strong>BY Karolinna Lessa Lopes - 3° DS</strong></p>    <center>
    <p class="float-end"><a href="#">Back to top</a></p>
</footer>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>