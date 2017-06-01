<?php
    function conectadb($sql,$opcao){               
        $conecta = mysql_connect("localhost", "root", "aqi3003") or print (mysql_error());         
        mysql_select_db("siscol", $conecta) or print(mysql_error()); 
        if($opcao=="execSQL"){
            $result = mysql_query($sql, $conecta); 
        }
        print "Executado com Sucesso!"; 
        mysql_free_result($result);         
        mysql_close($conecta);  
        ;                                 
    }
    
    function retornadados($sql,$opcao){
        $conecta = mysql_connect("localhost", "root", "aqi3003") or print (mysql_error());                 
        mysql_select_db("siscol", $conecta) or print(mysql_error()); 
         if($opcao=="consulta"){
            $result = mysql_query($sql,$conecta);         
            while ($row = mysql_fetch_array($result)) {
               // printf("ID: %s  Name: %s", $row["id"], $row["nome"]);  
                return $row;
            }
            mysql_free_result($result);         
  
         }
         if($opcao =="insert"){
            $result = mysql_query($sql,$conecta);  
            if (!$result) {
                die('Invalid query: ' .mysql_error());
            }
            print "Executado com Sucesso!"; 
         }
    mysql_close($conecta); 
       
    }
function converter_data($strData) {
    $dataP = explode('/', $strData);
    $dataNoFormatoParaOBranco = $dataP[2].'-'.$dataP[1].'-'.$dataP[0];
    return $dataNoFormatoParaOBranco;
}
function reverte_data($strData) {           
    $dataP = explode('-', $strData);
    $dataParaExibir = $dataP[2].'/'.$dataP[1].'/'.$dataP[0];            
    return $dataParaExibir;
}
?>
