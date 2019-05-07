<?php
header('Content-Type: text/html; charset=utf-8');
require_once('../db/db.class.php');
session_start();

$objDb = new db();
$conn = $objDb->conecta_mysql();
$retornarEchoTrue = true;


//"2011-01-10"
try{
	if(isset($_GET['min']) && !isset($_POST['busca_palavra'])){
		$min=$_GET['min'];
		$data = $_GET['palavra'];
		$retornarEchoTrue = false;
	}else{
		$min=0;
		$data = $_POST['busca_palavra'];
	}
	//$sql = ("SELECT * FROM `TEXTOS_PAGINAS` WHERE (TEXTO like :data) ");
	$sql_dir = ("SELECT J.ID_JORNAL,J.DAT_EDICAO, J.SUPLEMENTO, TP.NUM_PAGINA,(SELECT COUNT(*) FROM (SELECT J.DAT_EDICAO, J.SUPLEMENTO, TP.NUM_PAGINA FROM TEXTOS_PAGINAS TP, JORNAIS J WHERE J.ID_JORNAL = TP.ID_JORNAL AND TEXTO like lower(:data) AND (SELECT 1 FROM `JORNAIS`j WHERE  j.ID_JORNAL = TP.ID_JORNAL ORDER BY DAT_EDICAO ASC) GROUP BY J.DAT_EDICAO, J.SUPLEMENTO, TP.NUM_PAGINA) T) CONT FROM `TEXTOS_PAGINAS` TP, `JORNAIS` J WHERE J.ID_JORNAL = TP.ID_JORNAL AND TEXTO like lower(:data) AND (SELECT 1 FROM `JORNAIS`j WHERE  j.ID_JORNAL = TP.ID_JORNAL ORDER BY DAT_EDICAO ASC) GROUP BY J.DAT_EDICAO, J.SUPLEMENTO, TP.NUM_PAGINA ");
	$resultado = $conn->prepare($sql_dir);
	$resultado->bindValue(':data','%'.$data.'%',PDO::PARAM_STR);
	
	#$resultado->bindValue(':data', $data);

	if($resultado->execute()){
		if($resultado->rowCount() > 0){
			//while($row = $resultado->fetch(PDO::FETCH_OBJ)){
			//	$id =  $row->ID_JORNAL ;
			//	$pag = $row->NUM_PAGINA ;
			   // $result  =  $resultado->fetch(PDO::FETCH_OBJ);

				// $dir = $row->IMAGEM ;
			//}
			if($retornarEchoTrue){
				$s=$resultado->fetchAll();
				$_SESSION['tableDataAvancado'] = $s;
				echo true;
			}else{
				  echo "<table border=1 cellpadding=1 cellspacing=1>
                <tr>
                    <th> ID </th>
                    <th> PAGINA </th>
                    <th> TEXTO </th>
                </tr>";
				while($row = $resultado->fetch(PDO::FETCH_OBJ)){
			//	$id =  $row->ID_JORNAL ;
			//	$pag = $row->NUM_PAGINA ;
			   // $result  =  $resultado->fetch(PDO::FETCH_OBJ);
				echo "<tr>";
				echo "<td>" . $row->ID_JORNAL  . "</td>";
				echo "<td>" .$row->NUM_PAGINA . "</td>";
				echo "<td>" . $row->TEXTO  . "</td>";
				echo "</tr>";
				// $dir = $row->IMAGEM ;
			}
				
			}
			



			
			#while($row = $resultado->fetch(PDO::FETCH_OBJ)){


			#}
		}else{
			echo "Não foi possível encontrar nenhum jornal com essa palavra ou CPF: ".$data;
			

		}

	}else{
		echo "Não foi possível executar no momento,tente mais tarde";
	}

}catch(Exception $e){
	echo $e;

}




?>