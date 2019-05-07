<?php
session_start();
if(isset($_SESSION['tableData']) ){
	$img = $_SESSION['tableData'];


}else{
	$img = $_SESSION['tableDiaMesAno'];

}

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
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
	<link href="../assets/dist/jquery.magnify.css" rel="stylesheet">
	<!--===============================================================================================-->
	<link rel="stylesheet" href="../assets/lightbox/grid/gallery-grid-periodo.css">
	<!--===============================================================================================-->
	<script src="../assets/mouse/test/libs/jquery.js"></script>
	<!--===============================================================================================-->
	<script src="../assets/mouse/dist/jquery.panzoom.js"></script>
	<!--===============================================================================================-->
	<script src="../assets/mouse/test/libs/jquery.mousewheel.js"></script>




</head>


<body>

	<!-- <div class="limiter"> -->
		<div class="container-table100" style="background-image: url(../assets/csstabela/images/BG.png); background-size: cover;">

			<div class="wrap-table100" style="background: rgb(255, 255, 255); border-radius: 0.5rem; box-shadow: 10px 10px 10px 10px grey;">
				<a href="../index.php" onclick="history.go(-1);"><img style="margin-left: 30px" src="https://png.icons8.com/windows/64/D8232A/circled-left-2.png"></a>
				<h2 class="wrap-tittle-table">HEMEROTECA DIGITAL - SEGRASE</h2>
			</br>
		</br>

	</br>



	<div class="container gallery-container">

		<div class="row tz-gallery" style="top: 50%; left: 50%; margin-left: 100px;">

			<?php


			foreach ($img as $value) {
    #http://gpitic.tech/hemeroteca/img/segrase_hemeroteca/2011/01/03/IMAG0001.jpg
				$dir ='http://gpitic.tech/img/segrase_hemeroteca/'.$value['IMAGEM'];
#echo $dir.$value['IMAGEM'];
				$dia = explode("/", $value['IMAGEM']);
				$id = $value['ID_JORNAL'];
				$dia_html = '';

				if (strpos(strtolower ($dia[2]), 's') !== false) {
					$dia_html =   str_replace("s","",strtolower ($dia[2])).'/'.$dia[1].'/'.$dia[0].' - (Suplemento)';
				}else{
					$dia_html =  $dia[2].'/'.$dia[1].'/'.$dia[0];
				}

 #href="pesquisar_jornais_especifico.php"


				echo '<div class="image-set col-md-5" style="bottom: 20px">
				<legend style="text-align: center">DIA '.$dia_html.'</legend>
				<a class="lightbox" href="../view/pesquisa_especifico.php?id='.$id.'"'.'id="jornal">
				<img style="width: 330px !important;  height:230px !important;" src="'. $dir.'" alt="">
				</a>
				</div>';

			}
			?>
		</div>





	</div>





	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="../assets/dist/jquery.magnify.js"></script>
	<script>
		$('[data-magnify=gallery]').magnify({


			headToolbar: [
			'maximize',
			'close'
			],
			footToolbar: [
			'prev',
			'next',
			'zoomIn',
			'zoomOut',
			'fullscreen',
			'actualSize',

			],
			modalWidth: 320,
			modalHeight: 320,
			dragHandle: '.magnify-modal',
			draggable: true,
		});

	</script>
</div>
</div>
</div>
<!-- </div> -->

<body>

	</html>
