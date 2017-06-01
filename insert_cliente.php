<?php
include "menu.php";
$data = converter_data($_POST["DataCadastro"]);

$sqlcli = "INSERT INTO Cliente (idCliente, Nome, Endereco, Telefone, DataCadastro, NumeroContrato )
VALUES ('0', '".$_POST["cliente_nome"]."', 'Test', '3474-225','".$data."','1321')";

retornadados($sqlcli, "insert");

?>
