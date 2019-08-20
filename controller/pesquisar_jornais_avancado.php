<?php
 session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- jQuery -->
    <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
  
</head>
<body>
<div><h3>Source code : PHP simaple ajax pagination</h1></div>
<div>
<div id="target-content" >loading...</div>

    <?php
   
    $dados = $_SESSION['tableDataAvancado'];
    $total_pages = ceil(25 / 2); 
    ?>
    <div align="center">
        <ul class='pagination text-center' id="pagination">
            <?php 
          
            for($i=1; $i<=$total_pages; $i++):  
            if($i == 1):?>
            <li class='active'  id="<?php echo $i;?>"><a href='/controller/pesquisar_avancada.php?page=<?php echo $i;?>'> <?php echo $i;?>  </a></li> 
            <?php else:?>
            <li id="<?php echo $i;?>"><a href='/controller/pesquisar_avancada.php?page=<?php echo $i;?>'><?php echo $i;?></a></li>
            <?php endif;?>          
            <?php endfor;?>  
        </div>

    </body>
    <script>

          function getUrlParameter(name) {
            name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
            var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
            var results = regex.exec(location.search);
            return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
        };
       
        jQuery(document).ready(function() {
            var palavra = getUrlParameter('palavra');
                var ini = getUrlParameter('ini');
                var fim = getUrlParameter('fim');                
                var pag = '/controller/pesquisar_avancada.php?palavra='+palavra+'&page=1'+'&ini='+ini+'&fim='+fim;
            jQuery("#target-content").load(pag);
            jQuery("#pagination li").live('click',function(e){
                e.preventDefault();
                jQuery("#target-content").html('loading...');
                jQuery("#pagination li").removeClass('active');
                jQuery(this).addClass('active');
                var pageNum = this.id;
                var palavra = getUrlParameter('palavra');
                var ini = getUrlParameter('ini');
                var fim = getUrlParameter('fim');                
                var pag = '/controller/pesquisar_avancada.php?palavra='+palavra+'&page='+pageNum+'&ini='+ini+'&fim='+fim;
                jQuery("#target-content").load(pag);

            });
        });
    </script>
    </html>
