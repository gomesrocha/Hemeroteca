<?php
session_start();
$id = $_GET['id'];
$_SESSION['id']=$id;
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
	<link rel="stylesheet" href="../assets/lightbox/grid/gallery-grid.css">
	<!--===============================================================================================-->
	<script src="../assets/mouse/test/libs/jquery.js"></script>
	<!--===============================================================================================-->
	<script src="../assets/mouse/dist/jquery.panzoom.js"></script>
	<!--===============================================================================================-->
	<script src="../assets/mouse/test/libs/jquery.mousewheel.js"></script>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>

    <script type="text/javascript">

            $(document).ready( function(){

                //associar o evento de click ao botão


                function getJornais(){
                    //carregar os tweets

                    $.ajax({
                        url: '../controller/get_jornais.php',
                        success: function(data) {
                            $('#_container').html(data);
                         //  alert(data);
                        }
                    });
                }

                getJornais();

            });

        </script>

</head>


<body>

	<!-- <div class="limiter"> -->
	<div class="container-table100" style="background-image: url(../assets/csstabela/images/BG.png); background-size: cover;">

		<div class="wrap-table100" style="background: rgb(255, 255, 255); border-radius: 0.5rem; box-shadow: 10px 10px 10px 10px grey;">
		</br>
			<a href="../index.php"> <img style="margin-left: 30px" src="https://png.icons8.com/windows/64/D8232A/circled-left-2.png"></a>
			<h2 class="wrap-tittle-table">HEMEROTECA DIGITAL - SEGRASE</h2>
			</br>
			</br>

			</br>
			<div class="container gallery-container"id="_container">

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
	<!-- </div> -->

	<body>

</html>
