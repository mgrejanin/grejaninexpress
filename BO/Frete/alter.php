<?php
include_once ("/home/mgrejanin1/public_html/grejaninexpress/Model/FretesDAO.php");

if ($_SERVER['REQUEST_METHOD'] == "POST"){
	if (Banco::atualizarParceiro($_POST)){
		header("Location:../View/parceiros.php");
	} else {
		echo "deu ruim";
		exit();
	}
} else {
	header("Location:../View/parceiros.php");
}