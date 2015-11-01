<?php
include_once ("/home/mgrejanin1/public_html/grejaninexpress/Model/FretesDAO.php");
if ($_SERVER['REQUEST_METHOD'] == "POST"){
	if (FretesDAO::inserirFrete($_POST)){
		header("Location:../../fretes.php");
	}
} else  {
		echo "deu ruim";
}
