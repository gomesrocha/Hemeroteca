<?php
session_start();
$img = $_SESSION['tableData'];

?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SEGRASE - HEMEROTECA</title>
    <!-- Bootstrap -->
    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/dist/jquery.magnify.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" href="../assets/lightbox/grid/gallery-grid.css">

<script src="../assets/mouse/test/libs/jquery.js"></script>
<script src="../assets/mouse/dist/jquery.panzoom.js"></script>
<script src="../assets/mouse/test/libs/jquery.mousewheel.js"></script>
</head>

<body>

    <div class="container gallery-container">


        <div class="row tz-gallery" style="top: 50%; left: 50%; margin-left: 100px;" id="teste">

            <?php 


            foreach ($img as $value) {
    #http://gpitic.tech/hemeroteca/img/segrase_hemeroteca/2011/01/03/IMAG0001.jpg
               $dir ='http://gpitic.tech/img/segrase_hemeroteca/'.$value['IMAGEM'];
#echo $dir.$value['IMAGEM'];
               $dia = explode("/", $value['IMAGEM']);
               $id = $value['ID_JORNAL'];
               $dia_html = '';

               if (strpos(strtolower ($dia[2]), 's') !== false) {
                $dia_html =   str_replace("s","",strtolower ($dia[2])).'/'.$dia[1].'/'.$dia[0].' - (suplemento)';
            }else{
                $dia_html =  $dia[2].'/'.$dia[1].'/'.$dia[0];
            }

 #href="pesquisar_jornais_especifico.php"
            

            echo '<div class="image-set col-md-5" style="bottom: 20px">
            <a class="lightbox" href="../view/pesquisar_jornais_especifico.php?id='.$id.'"'.'id="jornal">
            <legend style="text-align: center">DIA '.$dia_html.'</legend>
            <img style="width: 330px !important;  height:230px !important;" src="'. $dir.'" alt="">
            
            </a>
            </div>';
        }
        ?>
        
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
</body>
</html>