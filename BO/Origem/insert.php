<?php
include_once ("/home/mgrejanin1/public_html/grejaninexpress/Model/OrigemDAO.php");
if ($_SERVER['REQUEST_METHOD'] == "POST"){
	if (OrigemDAO::inserirOrigem($_POST)){
		header("Location:../../cadastrarOrigem.php?action=success");
	}
} else  {
	header("Location:../../cadastrarOrigem.php?action=error");
}
