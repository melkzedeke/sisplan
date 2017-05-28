<?php
// ano-mês-dia
$data = '2017-02-10';

$date = date_create($data);
$parcelas = 10;

// separando as datas iniciais
$d = explode("-", $data);

// exibindo a primeira data de vencimento
echo $d[2]."-".$d[1]."-".$d[0]."<br />";

// listando as datas seguintes
for($i =0; $i < $parcelas-1; $i++) {
date_add($date, date_interval_create_from_date_string('1 month'));
echo date_format($date, 'd-m-Y')."<br />"; 
}
?>