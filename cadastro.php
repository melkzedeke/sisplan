<?php
include "menu.php";
echo "cadastro";
?>

                <form name="formprincipal" action="index.php" method="POST">
                <table border="0" width="12" cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr>
                            <td>Nº Contrato:<br></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="ncontrato" value="" size="10" /></td>
                        </tr>                        
                        <tr>
                            <td>Cliente Nome:</td>
                        </tr>
                        <tr>
                            <td><input type="text" name="cliente_nome" value="" size="50" /></td>
                        </tr>
                        <tr>
                            <td>Endereco:<br></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="senha" value="" size="50" /></td>
                        </tr>
                        
                        <tr>
                            <td>Telefone:<br></td>
                        </tr>
                        <tr>
                            <td>
                             <input type="text" name="telefone" id="telefone" maxlength="15" size="15"/>
                            </td>
                        </tr>
                        <tr>
                        <td>Data Cadastro:</td>
                        </tr>
                        <tr>
                            <td><input type="text" name="DataCadastro" value="" size="15" /></td>
                        </tr>                        
                        <tr>
                            <td><input type="submit" value="Enviar" name="login" /></td>
                        </tr>                        

                    </tbody>
                </table>
                    <input type="hidden" name="opc" value="cadcli" />
                    <input type="hidden" name="usuario" id="usuario" value="<?php echo $usuario; ?>"/>
                    <input type="hidden" name="senha" id="senha" value="<?php echo $senha; ?>"/>                    
                </form>

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