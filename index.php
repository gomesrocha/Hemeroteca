<!DOCTYPE html>

<html lang="pt-br">

<head>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
 <script src="assets/js/twoTone.js" type="text/javascript"></script>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SEGRASE - HEMEROTECA</title>

  <!-- Bootstrap core CSS -->
  <link href="assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
    rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Anton|Oswald:600|PT+Sans+Narrow:" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

  <!-- Plugin CSS -->
  <link href="assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="assets/css/creative.css" rel="stylesheet">

  <!-- Icon of template -->

  <link rel="icon" href="img/portfolio/icone/logosegrase.png" type="image/x-icon" />

  <!-- Button -->

  <link rel="stylesheet" type="text/css" href="assets/css/loading.css"/>
  <link rel="stylesheet" type="text/css" href="assets/css/loading-btn.css"/>
  <link rel="stylesheet" href="assets/css/twoTone.css">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <img src="img/portfolio/icone/logosegrase.png" style="width: 50px; height: 50px;">
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#home">Pesquisa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#jornais">Como adquirir jornais?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#precos">preços</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#hemeroteca">Hemeroteca</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contato">Contato</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="masthead text-center text-white d-flex" id="home">

    <div class="container my-auto">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <h1 class="text-uppercase">
            <strong>HEMEROTECA DIGITAL</strong>
          </h1>
        </div>
        <!--CARD DE PESQUISA-->

        <div class="card text-center mx-auto sr-button" style="width: 700px; height: 420px; background: rgb(255, 250, 250, 0.5)">
          <div class="card-header">
            <img class="img-fluid" src="img/portfolio/icone/diariooficial.png">
            <nav>
              <div class="nav nav-tabs mx-auto" id="nav-tab" role="tablist">

                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                  aria-controls="nav-home" aria-selected="true">Pesquisa por Data</a>

                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                  aria-controls="nav-profile" aria-selected="false">Pesquisa por Palavra</a>

                <a class="nav-item nav-link" id="nav-search-tab" data-toggle="tab" href="#nav-search" role="tab"
                  aria-controls="nav-search" aria-selected="false">Pesquisa Avançada</a>

              </div>
            </nav>
          </div>
          <div class="card-body">
            <!-- Button trigger modal -->
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" style="color: black">
                <form id="form_pesquisa">
                  <div class="row">
                    <div class="col-sm-4-esp">
                      <label>Dia/Mês/Ano</label>
                      <input type="date" id="busca_dia_mes_ano" name="busca_dia_mes_ano" min="1895-01-01" max="2011-12-30"
                        class="form-control text-center">
                    </div>
                    <div class="col-sm-4-meio">
                      <label>
                        <strong>OU</strong>
                      </label>
                    </div>
                    <div class="col-sm-4-esp">
                      <label>Mês/Ano</label>
                      <input type="month" id="busca_mes_ano" name="busca_mes_ano" class="form-control text-center"
                        placeholder="Last name">
                    </div>
                  </div>
                </form>
              </div>
              <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" style="color: black">
                <form accept-charset="utf-8" id="form_pesquisa_palavra" action="/view/pesquisar_jornais.php">
                  <div class="col-sm-5 mx-auto">
                    <label>Insira uma palavra ou CPF</label>
                    <input type="text" id="busca_palavra" name="busca_palavra" class="form-control text-center" id=palavra>
                  </div>
                </form>
              </div>
              <div class="tab-pane fade" id="nav-search" role="tabpanel" aria-labelledby="nav-search-tab" style="color: black">


                <form id="form_pesquisa_avancada" method="post">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-4 mx-auto">

                        <label>Insira uma palavra </label>
                        <input type="text" id="busca_avancada" name="busca_avancada" class="form-control text-center"
                          id=palavra>
                      </div>
                      <div class="col-sm-4 mx-auto ">
                        <label>Início</label>

                        <input type="date" id="busca_dia_mes_ano_avancada_inicio" name="busca_dia_mes_ano_avancada_inicio"
                          min="1895-01-01" max="2011-12-30" class="form-control text-center">
                      </div>
                      <div class="col-sm-4 mx-auto ">
                        <label>Fim</label>

                        <input type="date" id="busca_dia_mes_ano_avancada_fim" name="busca_dia_mes_ano_avancada_fim"
                          min="1895-01-01" max="2011-12-30" class="form-control text-center">
                      </div>

                    </div>
                  </div>
                </form>


            </div>
          <!--  <button type="button" class="btn btn-light btn-xl my-5" style="top: 100px; background-color: red"
               name="btn_busca" id="btn_busca" >pesquisar</button> -->

               <div class="twoToneCenter" name="btn_busca" id="btn_busca">
                 <button class="twoToneButton" style="border-radius: 25px">PESQUISAR</button>
               </div>

           <!-- <div class="btn btn-default hovering ld-over-full-inverse"
           name="btn_busca" id="btn_busca" style="color: black; font-size:1em;
           margin-top: 35px; padding: 10px; background-color: red">
           PESQUISAR <div class="ld ld-ball ld-flip">
           </div> </div> -->


            <script type="text/javascript">
              $(document).ready(function () {
                function limparCampos(){
                  $('#busca_dia_mes_ano').val('');
                  $('#busca_mes_ano').val('');
                  $('#busca_palavra').val('');
                  $('#busca_avancada').val('');
                  $('#busca_dia_mes_ano_avancada_inicio').val('');
                  $('#busca_dia_mes_ano_avancada_fim').val('');
                }
                $('#nav-profile-tab').click(function () {
                  limparCampos();

                });
                $('#nav-home-tab').click(function () {
                  limparCampos();
                });
                $('#nav-search-tab').click(function () {
                limparCampos();
                });
                $('#btn_busca').click(function () {

                  if ($('#busca_avancada').val().length > 0 && $('#busca_dia_mes_ano_avancada_inicio').val().length > 0 &&
                    $('#busca_dia_mes_ano_avancada_fim').val().length > 0) {
                    $.ajax({
                      url: 'controller/pesquisar_avancada.php',
                      method: 'post',
                      data: $('#form_pesquisa_avancada').serialize(),
                      success: function (data) {
                           if(data == true){

                          var palavra = document.getElementById("busca_avancada").value;
                          var pag = 'view/pesquisa_avancada.php?palavra='+palavra;
                          window.location.replace(pag);
                        }else{
                           alert(data);
                        }
                      }
                    });
                  }
                  if ($('#busca_dia_mes_ano').val().length > 0) {
                    id_numbers = new Array();
                    $.ajax({
                      url: 'controller/pesquisar_data.php',
                      method: 'post',
                      data: $('#form_pesquisa').serialize(),
                      success: function (data) {
                         if(data == true){
                          window.location.replace('view/pesquisa_periodo.php');
                        }else if(data == false){

                           alert('Não foi possível encontrar nenhum jornal nessa data.');
                        }else{
                          id_numbers = JSON.parse(data);
                          var pag = 'view/pesquisa_especifico_data.php?id='+id_numbers[0]['ID_JORNAL'];
                          window.location.replace(pag);
                        }
                      }
                    });
                  }
                  if ($('#busca_mes_ano').val().length > 0) {
                    $.ajax({
                      url: 'controller/pesquisar_mes_ano.php',
                      method: 'post',
                      data: $('#form_pesquisa').serialize(),
                      success: function (data) {
                         if(data == true){
                             window.location.replace('view/pesquisa_periodo.php');
                        }else{
                           alert(data);
                        }
                      }
                    });
                  }
                  if ($('#busca_palavra').val().length > 0) {
                    $.ajax({
                      url: 'controller/pesquisar_palavra.php',
                      method: 'post',
                      data: $('#form_pesquisa_palavra').serialize(),
                      success: function (data) {

                        if(data == true){
                          var palavra = document.getElementById("busca_palavra").value;
                          var pag = 'view/pesquisa_avancada.php?palavra='+palavra;
                          window.location.replace(pag);
                        }else{
                           alert(data);
                        }

                      }
                    });
                  }
                });
              });
              $('#busca_dia_mes_ano').change(function () {
                if ($('#busca_dia_mes_ano').val().length > 0) {
                  $('#busca_mes_ano').val('');
                }
              });
              $('#busca_mes_ano').change(function () {
                if ($('#busca_mes_ano').val().length > 0) {
                  $('#busca_dia_mes_ano').val('');
                }
              });
            </script>
          </div>
        </div>



  </header>

  <section class="bg-primary" id="jornais">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <h2 class="section-heading text-white">COMO ADQUIRIR JORNAIS?</h2>
          <hr class="light my-4">
          </br>
          <p class="text-faded mb-4">
            Existem 2 meios: O primeiro é você acessar os diários neste portal pelo campo de pesquisa (clicando em
            <a href="#home">PESQUISA</a>). Já o segundo é entrar em contato conosco através de nosso telefone ou
            e-mail, para mais informações
            (clicanto em
            <a href="#contato">CONTATO</a>). Também existe a possibilidade de vir pessoalmente em nosso prédio e
            realizar a compra diretamente
            com o setor responsável
          </p>
          </br>
          </br>
          <a class="btn btn-light btn-xl js-scroll-trigger" href="#home">adquira já o seu!</a>
        </div>
      </div>
    </div>
    </br>
    </br>


  </section>

  <section id="precos">
    <div class="container" id="precos">
      <div class="row">
        <div class="col-lg-12 mx-auto text-center">
          <div class="service-box mx-auto">
            <i class="fa fa-3x fa-money text-primary mb-3 sr-icons"></i>
            <h2 class="mb-3" class="section-heading">NOSSOS PREÇOS</h2>
            <hr class="my-4">
            </br>
          </div>
          <br />
          <div class="container" style="padding-left: 55px">
            <div class="row mx-auto">
              <div class="col-sm-4 mx-auto">
                <div class="card" style="width: 18rem;">

                  <div class="card-body">
                    <i class="fa fa-3x fa-file-o text-primary mb-3 sr-icons"></i>
                    <h5 class="card-title">Impressão Autenticada</h5>
                    <p class="card-text text-center">R$ 5,00</p>

                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card" style="width: 18rem;">

                  <div class="card-body">
                    <i class="fa fa-3x fa-newspaper-o text-primary mb-3 sr-icons"></i>
                    <h5 class="card-title">Unidade do Diário</h5>
                    <p class="card-text text-center">R$ 5,00</p>

                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card" style="width: 18rem;">

                  <div class="card-body">
                    <i class="fa fa-3x fa-copy text-primary mb-3 sr-icons"></i>
                    <h5 class="card-title">Cópia do Diário</h5>
                    <p class="card-text text-center">R$ 5,00</p>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

  <section class="p-0" id="hemeroteca">
    <div class="container">
      <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/teste1.png">
              <img class="img-fluid" src="img/portfolio/thumbnails/teste1.png" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Imagem
                  </div>
                  <div class="project-name">
                    Sala de Clientes
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/teste2.png">
              <img class="img-fluid" src="img/portfolio/thumbnails/teste2.png" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Imagem
                  </div>
                  <div class="project-name">
                    Diários Arquivados
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/teste3.png">
              <img class="img-fluid" src="img/portfolio/thumbnails/teste3.png" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Imagem
                  </div>
                  <div class="project-name">
                    Diários Arquivados
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/teste4.png">
              <img class="img-fluid" src="img/portfolio/thumbnails/teste4.png" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Imagem
                  </div>
                  <div class="project-name">
                    Diários Encadernados
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/teste5.png">
              <img class="img-fluid" src="img/portfolio/thumbnails/teste5.png" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Imagem
                  </div>
                  <div class="project-name">
                    Coordenador da Hemeroteca
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/teste6.png">
              <img class="img-fluid" src="img/portfolio/thumbnails/teste6.png" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Imagem
                  </div>
                  <div class="project-name">
                    Diários Encadernados
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section id="contato">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <div class="service-box mx-auto">
            <i class="fa fa-3x fa-info-circle text-primary mb-3 sr-icons"></i>
            <h2 class="mb-3" class="section-heading">ALGUMA DÚVIDA?</h2>
          </div>
          <br />
          <p class=" mb-4">Visitou nosso site e ainda restaram dúvidas? não perca tempo, entre em contato agora mesmo
            com nossa equipe através
            de um dos canais de comunicação abaixo.</p>
          <hr class="my-4">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 ml-auto text-center">
          <i class="fa fa-phone fa-3x mb-3 sr-contact" style="color: #D8232A"></i>
          <p style="text-align: center">(79)3205-7429</p>
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <i class="fa fa-envelope-o fa-3x mb-3 sr-contact" style="color: #D8232A"></i>
          <p style="text-align: center">
            <a href="mailto:your-email@your-domain.com" style="text-decoration: none; color: black">hemeroteca@segrase.se.gov.br</a>
          </p>
        </div>
      </div>
    </div>
    <div id="googleMap" style="height:400px;width:100%;"></div>
  </section>

  <div class="container" style="height: 20px !important">

    <hr />
    <div class="text-center center-block">


      <a target="_blank" href="https://www.facebook.com/segrase/">
        <i class="fa fa-facebook-square fa-3x social"></i>
      </a>
      <a target="_blank" href="https://twitter.com/Segrase">
        <i class="fa fa-twitter-square fa-3x social"></i>
      </a>
      <!-- <a href="https://plus.google.com/+Bootsnipp-page">
        <i class="fa fa-google-plus-square fa-3x social"></i>
      </a> -->
      <a target="_blank" href="mailto:hemeroteca@segrase.se.gov.br">
        <i class="fa fa-envelope-square fa-3x social"></i>
      </a>
      <p style="text-align: center">Desenvolvido por GPITIC</p>
    </div>
    <hr />
  </div>



  <!-- Bootstrap core JavaScript -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- GOOGLE'S API MAPS-->

  <script>
    function myMap() {
      var myCenter = new google.maps.LatLng(-10.9127777, -37.0548771);
      var mapProp = { center: myCenter, zoom: 17, scrollwheel: false, draggable: true, mapTypeId: google.maps.MapTypeId.ROADMAP };
      var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
      var marker = new google.maps.Marker({ position: myCenter });
      marker.setMap(map);
    }
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD55RwH6wyDxzTO7rvSvMxokMp88mCJOtU&callback=myMap"></script>

  <!-- Plugin JavaScript -->
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/scrollreveal/scrollreveal.min.js"></script>
  <script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="assets/js/creative.min.js"></script>

</body>

</html>
