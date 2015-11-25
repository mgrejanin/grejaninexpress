<?php
include_once ("/home/mgrejanin1/public_html/grejaninexpress/Model/DestinoDAO.php");
if ($_SERVER['REQUEST_METHOD'] == "POST"){
	if (DestinoDAO::inserirDestino($_POST)){
		header("Location:../../cadastrarDestino.php?action=success");
	}
} else  {
	header("Location:../../cadastrarDestino.php?action=error");
}
