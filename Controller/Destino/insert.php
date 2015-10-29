<?php
include_once '../../Model/DestinoDAO.php';
if ($_SERVER['REQUEST_METHOD'] == "POST"){
	if (DestinoDAO::inserirDestino($_POST)){
		header("Location:../../fretes.php");
	}
} else  {
	echo "deu ruim";
}
