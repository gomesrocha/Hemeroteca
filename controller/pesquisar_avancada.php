<?php
require_once('../db/db.class.php');
session_start();
$objDb = new db();
$conn = $objDb->conecta_mysql();





try{


		$data_inicio = $_POST['busca_dia_mes_ano_avancada_inicio'];
		$data_fim = $_POST['busca_dia_mes_ano_avancada_fim'];
		$palavra = $_POST['busca_avancada'];
		//$data = $_POST['busca_palavra'];

	//$sql = ("SELECT * FROM `TEXTOS_PAGINAS` WHERE (TEXTO like :data) ");

	$sql_dir = "SELECT J.ID_JORNAL,J.DAT_EDICAO, J.SUPLEMENTO, TP.NUM_PAGINA,(SELECT COUNT(*) FROM (SELECT J.DAT_EDICAO, J.SUPLEMENTO, TP.NUM_PAGINA FROM TEXTOS_PAGINAS TP, JORNAIS J WHERE J.ID_JORNAL = TP.ID_JORNAL AND TEXTO like lower(:palavra) AND (SELECT 1 FROM `JORNAIS`j WHERE DAT_EDICAO >= (:data_inicio) AND DAT_EDICAO <= (:data_fim)  and j.ID_JORNAL = TP.ID_JORNAL ORDER BY DAT_EDICAO ASC) GROUP BY J.DAT_EDICAO, J.SUPLEMENTO, TP.NUM_PAGINA) T) CONT FROM `TEXTOS_PAGINAS` TP, `JORNAIS` J WHERE J.ID_JORNAL = TP.ID_JORNAL AND TEXTO like lower(:palavra) AND (SELECT 1 FROM `JORNAIS`j WHERE DAT_EDICAO >= (:data_inicio) AND DAT_EDICAO <= (:data_fim) and j.ID_JORNAL = TP.ID_JORNAL ORDER BY DAT_EDICAO ASC) GROUP BY J.DAT_EDICAO, J.SUPLEMENTO, TP.NUM_PAGINA ";
	$resultado = $conn->prepare($sql_dir);

	$resultado->bindValue(':palavra','%'.$palavra.'%',PDO::PARAM_STR);
	$resultado->bindValue(':data_inicio',$data_inicio,PDO::PARAM_STR);
	$resultado->bindValue(':data_fim',$data_fim,PDO::PARAM_STR);

	#$resultado->bindValue(':data', $data);

	if($resultado->execute()){
		if($resultado->rowCount() > 0){
			//while($row = $resultado->fetch(PDO::FETCH_OBJ)){
			//	$id =  $row->ID_JORNAL ;
			//	$pag = $row->NUM_PAGINA ;
			   // $result  =  $resultado->fetch(PDO::FETCH_OBJ);

				// $dir = $row->IMAGEM ;
			//}

			$s=$resultado->fetchAll();
			$_SESSION['tableDataAvancado'] = $s;
			echo true;



			#while($row = $resultado->fetch(PDO::FETCH_OBJ)){


			#}
		}else{
			echo "Não foi possível encontrar nenhum jornal com essa palavra nesse periodo especificado.";


		}

	}else{
		echo "Não foi possível executar no momento, tente mais tarde.";
	}

}catch(Exception $e){
	echo $e;

}


//echo $palavra.$data_inicio.$data_fim;
    //echo $sql;
?>
