<?php
session_start(); 
 ?>
<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">

        $(document).ready( function(){

           $('#btn_busca').click(function () {
            
            var min = incr();
            var palavra = getUrlParameter('palavra')
            var pag = '/view/pesquisar_palavra.php?palavra='+palavra+'&min='+min;
             $.ajax({
                url: pag,
                success: function(data) {
                    $('#txtHint').html(data);
                         alert(min);
                     }
                 });


         });
         var incr = (function () {
            var i = 0;

            return function () {
                return i=i+25;
            }
        })();
        function getUrlParameter(name) {
            name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
            var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
            var results = regex.exec(location.search);
            return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
        };

        
    });

</script>
</head>
<body>
    <table border=1 cellpadding=1 cellspacing=1 id='txtHint'>
        <tr>
            <th> ID </th>
            <th> PAGINA </th>
            <th> TEXTO </th>
        </tr>
        <?php
        
        $dados = $_SESSION['tableDataPalavra'];
        foreach ($dados as $dado) {
         
        }
        echo "</table>";


        ?>
       <button type="button" class="btn btn-light btn-xl my-5" style="top: 100px; background-color: red"
               name="btn_busca" id="btn_busca" >pesquisar</button>
    </body>
    </html>