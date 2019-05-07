<?php
require_once('../db/db.class.php');
session_start();
$objDb = new db();
$conn = $objDb->conecta_mysql();
$id = $_SESSION['id'];

//"2011-01-10"


try{
	$sql = "SELECT IP.IMAGEM, J.DAT_EDICAO, J.SUPLEMENTO FROM IMAGENS_PAGINAS IP, JORNAIS J WHERE IP.ID_JORNAL = (:id) AND J.ID_JORNAL = IP.ID_JORNAL;";
	$resultado = $conn->prepare($sql);
	$resultado->bindValue(':id',$id,PDO::PARAM_STR);
	if($resultado->execute()){
		$capa_div='';
		$pagina_div ='';
		$isSuplemento=false;
		if($resultado->rowCount() > 0){
			$capa = 0;

			while($row = $resultado->fetch(PDO::FETCH_OBJ)){

				if($row->SUPLEMENTO==1){
					$isSuplemento=true;
				}
				$dia = explode("-", $row->DAT_EDICAO);
				$dir ='http://gpitic.tech/img/segrase_hemeroteca/'.$row->IMAGEM;
				if($capa<=1){
					$capa_div =$capa_div.
					'<div class="image-set col-md-3">
					<a class="lightbox" data-magnify="gallery"data-caption="'.'Página 1'.'" href="'.
					$dir.'">
					<img style="width: 330px !important;  height:230px !important;" src="'.$dir.'" alt="">
					</a>
					<h4>
					<figcaption style="text-align: center">Página 1</figcaption>
					</h4>
					</div>';
				}else{

					if($capa%2==0){
						$dia_pag=$capa/2;
						$dia_pag=$dia_pag+1;
					}

					$pagina_div=$pagina_div.'
					<div class="image-set col-lg-3">
					<a class="lightbox" data-magnify="gallery" data-caption="'.'Página '.$dia_pag.'"
					href="'.$dir.'">
					<img style="width: 240px !important;  height:460px !important;" src="'.$dir.'" alt="" >
					</a>
					<figcaption style="text-align: center">Página '.$dia_pag.'</figcaption>
					</div>';
				}
				$capa += 1;



			}

			$dia_html = '';

			if ($isSuplemento==true) {
				$dia_html =   str_replace("s","",strtolower ($dia[2])).'/'.$dia[1].'/'.$dia[0].' - (suplemento)';
			}else{
				$dia_html =  $dia[2].'/'.$dia[1].'/'.$dia[0];
			}
			echo '<h2 style="text-align: center">DIA '. $dia_html.'</h2>';
			echo '<div class="row tz-gallery " style="top: 50%; left: 50%; margin-right: -50%; padding-left: 200px;">'.$capa_div.'
			</div>';
			echo '<div class="row tz-gallery ">'
			.$pagina_div.'
			</div>';

			#while($row = $resultado->fetch(PDO::FETCH_OBJ)){


			#}
		}else{
			echo "Não foi possível encontrar nenhum jornal com essa data: ";
		}

	}
}catch(Exception $e){
	echo 'Ocorreu um erro,tente mais tarde';
}
//echo $palavra.$data_inicio.$data_fim;

?>
