<?php
session_start();
$id = $_GET['id'];
$_SESSION['id']=$id;
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
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
    <link rel="stylesheet" href="/assets/lightbox/grid/gallery-grid.css">

    <script src="../assets/mouse/test/libs/jquery.js"></script>
    <script src="../assets/mouse/dist/jquery.panzoom.js"></script>
    <script src="../assets/mouse/test/libs/jquery.mousewheel.js"></script>
</head>

<body>

    <div class="container gallery-container" id="_container">
         
       
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