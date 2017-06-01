<script type="text/javascript">
function menu(idx) {
        document.getElementById('opc').value = idx;
        document.form1.action="index.php";
 	document.form1.submit();
}

function validaform(){
   var nome = document.getElementById('nome_cliente').value;
   var datacadastro = document.getElementById('DataCadastro').value;
   
   if(nome==""){ 
       alert('Preencha o campo com o Nome do Cliente');
       document.getElementById('nome_cliente').focus();
       return false;
   }else if(datacadastro==""){ 
       alert('Preencha a Data do Cadastro');
       document.getElementById('DataCadastro').focus();
       return false;
   }else{       
       document.formprincipal.submit();
   }
}
</script>

<a href="javascript: menu('principal')">principal</a>
<a href="javascript: menu('cadastro')">Cadastro de Clientes</a>

<form name='form1' target="_self" method='post'>
    <input type="hidden" name="usuario" id="usuario" value="<?php echo $usuario; ?>"/>
    <input type="hidden" name="senha" id="senha" value="<?php echo $senha; ?>"/>
    <input type="hidden" name="opc" id="opc" value=""/>    
</form>