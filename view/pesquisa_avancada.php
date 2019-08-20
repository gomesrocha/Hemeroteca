<?php
  session_start();
  $dados = $_SESSION['tableDataAvancado'];
  $palavra = $_GET['palavra'];
  
  ?>
<!DOCTYPE html>
<html>
  <head>
    <title>SEGRASE - HEMEROTECA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/vendor/bootstrap/css/bootstrap.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/vendor/font-awesome/css/font-awesome.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/csstabela/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/csstabela/vendor/select2/select2.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/csstabela/vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/csstabela/css/main.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/csstabela/css/util.css">
    <!--===============================================================================================-->
    <link href="https://fonts.googleapis.com/css?family=Anton|Oswald:600|PT+Sans+Narrow:" rel="stylesheet">
    <!--===============================================================================================-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns"
      crossorigin="anonymous">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"/>
    <!--===============================================================================================-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <!--===============================================================================================-->
  </head>
  <body>
    <!-- <div class="limiter"> -->
    <div class="container-table100" style="background-image: url(../assets/csstabela/images/BG.png); background-size: cover;">
      <div class="wrap-table100" style="background: rgb(255, 255, 255); border-radius: 0.5rem; box-shadow: 10px 10px 10px 10px grey;">
        <a href="../index.php"><img style="margin-left: 30px" src="https://png.icons8.com/windows/64/D8232A/circled-left-2.png"></a>
        <h2 class="wrap-tittle-table">HEMEROTECA DIGITAL - SEGRASE</h2>
        </br>
        </br>
        <p class="wrap-results-table">FORAM ENCONTRADOS <?php echo $dados[0]['CONT'] ;?> RESULTADOS PARA O
          TERMO/EXPRESSÃO: <?php echo '"'.strtolower($palavra).'"';?>
        </p>
        </br>
        <hr>
        <div >
          <div  class="table-responsive" style="padding: 5px;  overflow: hidden;">
            <table id="example" style="display: inline-block;" class="table table-striped" >
              <thead style="background-color: #d8232a;">
                <tr class="row100 head ">
                  <th class="cell" >Data</th>
                  <th class="cell">Página</th>
                  <th class="cell">Ação</th>
                </tr>
              </thead>
              <tbody >
                <?php
                  foreach ($dados as $value) {
                  	$dia = explode("-", $value['DAT_EDICAO']);
                  
                  	if ($value['SUPLEMENTO']==1) {
                  		$dia_html = $dia[2].'/'.$dia[1].'/'.$dia[0].' - (suplemento)';
                  	}else{
                  		$dia_html =  $dia[2].'/'.$dia[1].'/'.$dia[0];
                  	}
                  
                  
                  	echo
                  	'<tr class="row100 body">
                  	<td class="cell100 column2">' . $dia_html.'  </td>
                  	<td class="cell100 column2"> '.$value['NUM_PAGINA'].'  </td>
                  	<td class="cell100 column2" > <form method="post" action="../view/pesquisa_especifico.php?id='.$value['ID_JORNAL'].' " id="formLogin">
                  	<a href="#" >
                  
                  	</a>
                  	<button type="buttom" class="btn btn-darks"><span>Visualizar<span> <i class="far fa-eye" ></i> </button>
                  
                  	</form></td>
                  
                  	</tr>';
                  
                  }
                  
                  ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- </div> -->
    <body>
</html>
<style type="text/css">
  .centro {
  text-align: center;
  }
  .btn-darks {
  color: black;
  background-color: transparent !important;
  border-color: black;
  }
  .btn-darks:hover {
  color: #fff;
  background-color: #D8232A !important;
  border-color: #1d2124;
  }
  .cell{
  	color: #fff;
  }
</style>
<script type="text/javascript">
  $(document).ready(function() {
      $('#example').DataTable({
    	"bFilter": false,
    	 "columnDefs": [
                  { className: "centro", "targets": [ 0,1, 2]
                  }
                  ],
      "oLanguage": {
          "sEmptyTable": "Nenhum registro encontrado",
          "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
          "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
          "sInfoFiltered": "(Filtrados de _MAX_ registros)",
          "sInfoPostFix": "",
          "sInfoThousands": ".",
          "sLengthMenu": "_MENU_ resultados por página",
          "sLoadingRecords": "...",
          "sZeroRecords": "Nenhum registro encontrado",
          "sSearch": "Procurar: ",
      },
  
      });
  });
</script>