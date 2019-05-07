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
		TERMO/EXPRESSÃO: <?php echo '"'.strtolower($palavra).'"';?></p>
	</br>
	<div class="table100 ver1 m-b-110">
		<div class="table100-head">
			<table>
				<thead>
					<tr class="row100 head ">
						<th class="cell100 column2">Data</th>
						<th class="cell100 column2">Página</th>
						<th class="cell100 column2">Ação</th>
					</tr>
				</thead>
			</table>
		</div>

		<div class="table100-body js-pscroll">
			<table>
				<tbody>
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
						<button type="buttom" class="btn btn-dark	"><span>Visualizar<span> <i class="far fa-eye" ></i> </button>

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
