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
             
         }
        mysql_free_result($result);         
        mysql_close($conecta);         
    }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
