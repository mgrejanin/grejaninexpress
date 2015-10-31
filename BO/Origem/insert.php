<?php
include_once '../../Model/OrigemDAO.php';
if ($_SERVER['REQUEST_METHOD'] == "POST"){
	if (OrigemDAO::inserirOrigem($_POST)){
		header("Location:../../fretes.php");
	}
} else  {
	echo "deu ruim";
}
