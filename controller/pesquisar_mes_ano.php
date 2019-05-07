<?php
require_once('../db/db.class.php');

$objDb = new db();
$conn = $objDb->conecta_mysql();
$data1 = $_POST['busca_mes_ano'];
$table = '';


//"2011-01-10"

try{


		$sql = "SELECT J.ID_JORNAL, J.DAT_EDICAO, IP.IMAGEM FROM JORNAIS J, IMAGENS_PAGINAS IP WHERE J.ID_JORNAL = IP.ID_JORNAL AND IP.NUM_PAGINA = 1 AND IP.SEQ_IMAGEM=1 AND DAT_EDICAO > :data1'-01'  AND DAT_EDICAO <= :data1'-31' ORDER BY J.DAT_EDICAO ASC ;";
		$resultado = $conn->prepare($sql);
		$resultado->bindValue(':data1',$data1,PDO::PARAM_STR);
		$table = 'tableData';


	if($resultado->execute()){
		if($resultado->rowCount() > 0){
			
					$s=$resultado->fetchAll();
					session_start();
					$_SESSION[$table] = $s;
					echo true;
				
				

			
			//while($row = $resultado->fetch(PDO::FETCH_OBJ)){
			//	$id =  $row->ID_JORNAL ;
			//	$pag = $row->NUM_PAGINA ;
			   // $result  =  $resultado->fetch(PDO::FETCH_OBJ);

				// $dir = $row->IMAGEM ;
			//}



			#while($row = $resultado->fetch(PDO::FETCH_OBJ)){


			#}
		}else{
			echo "Não foi possível encontrar nenhum jornal com essa data: ";
			

		}

	}else{
		echo "Não foi possível executar no momento,tente mais tarde";
	}




}catch(Exception $e){
	echo 'Ocorreu um erro,tente mais tarde';

}





//echo $data1;
?>