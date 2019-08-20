<?php
session_start();
$img = $_SESSION['tableDiaMesAno'];

//print_r($img[0]['IMAGEM']);
//print_r($img[1]['IMAGEM']);


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
    <link href="/assets/dist/jquery.magnify.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
    <link rel="stylesheet" href="lightbox/grid/gallery-grid.css">

    <script src="/assets/mouse/test/libs/jquery.js"></script>
    <script src="/assets/mouse/dist/jquery.panzoom.js"></script>
    <script src="/assets/mouse/test/libs/jquery.mousewheel.js"></script>
</head>

<body>

    <div class="container gallery-container">
      
        <div class="row tz-gallery " style="top: 50%; left: 50%; margin-right: -50%; padding-left: 200px;">

            <div class="image-set col-md-3">
                <a class="lightbox" data-magnify="gallery" data-caption="Página 1"
                    href= <?= 'http://gpitic.tech/img/segrase_hemeroteca/'.$img[0]['IMAGEM'] ?>>
                    <img src=<?= 'http://gpitic.tech/img/segrase_hemeroteca/'.$img[0]['IMAGEM'] ?> alt="">
                </a>
            </div>
           
         <div class="image-set col-md-3">
                <a class="lightbox" data-magnify="gallery" data-caption="Página 1"
                    href= <?= 'http://gpitic.tech/img/segrase_hemeroteca/'.$img[1]['IMAGEM'] ?>>
                    <img src=<?= 'http://gpitic.tech/img/segrase_hemeroteca/'.$img[1]['IMAGEM'] ?> alt="">
                </a>
            </div>
           
        </div>

    


    <div class="row tz-gallery ">


        <?php 
         $arrlength = count($img);
        $dir ='http://gpitic.tech/img/segrase_hemeroteca/';
         $dia_pag;
        for($x = 2; $x < $arrlength; $x++) {

            if($x%2==0){
                    $dia_pag=$x/2;
                    $dia_pag=$dia_pag+1;
                    }
                    

            echo '<div class="image-set col-lg-3">';
            echo '<a class="lightbox" data-magnify="gallery" data-caption="Página '.$dia_pag.'"';
            echo ' href="' .$dir.$img[$x]['IMAGEM'].'">';
            echo '<img style="width: 240px !important;  height:460px !important;" src="'.$dir.$img[$x]['IMAGEM'].'" alt=""></a></div>';         
                
        }
        ?>


       
    </div>
    </div>





    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/assets/dist/jquery.magnify.js"></script>
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