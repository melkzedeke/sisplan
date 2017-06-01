<!DOCTYPE html>
  <style type="text/css">
  body {
    font-family: Georgia, "Times New Roman",
          Times, serif;
    color: black;
    background-color: #E6E6FA }
  table, th, td {
     font-family: Georgia, "Times New Roman",
          Times, serif;
    color: black;
          
  }
    a:link {
        color: green;
    }

    /* visited link */
    a:visited {
        color: green;
    }

    /* mouse over link */
    a:hover {
        color: red;
    }

    /* selected link */
    a:active {
        color: yellow;
    } 
  </style>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<script>
    function mensagem()
    {
        alert("Usuario ou Senha Invalidos!");
        window.location="index.php";
    }
 </script>


<?php 
include "funcoes.php";
    if (isset($_POST["usuario"])){ 
    $u = $_POST["usuario"];
    if(isset($_POST["opc"])){
        if($_POST["opc"]!="login"){            
                echo "Usuario: ".base64_decode($u);
        }else{
                echo "Usuario:  =".$u;
        }
    }

    }
    
    if(isset($_POST["opc"])){ 
       $opcao = $_POST["opc"];     
        echo " -  Opção: ".$opcao;
    }    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SisPlan</title>
    </head>
    <body bgcolor="#E6E6FA">
        <?php
        
            //echo "<hr>";
            echo "<table border='0' width='100%' cellspacing='0' cellpadding='0'>
                <tbody><tr><td width='70%'>SisPlan: (Gestor de planos de Saúde) </td><td width='8%'>| Fale Conosco </td><td width='8%'>| Quem Somos</td></tr></tbody></table>";
            echo "<hr>";
            
        // put your code here
        ?>
        <center>
            <login>
         <?php
            if(!isset($_POST["opc"])){
                include "login.php";
            }else{
                $opc = $_POST["opc"];
               //echo $opc;
   
            }
         ?>
            </login>
        <?php

            if(isset($_POST["opc"])){
               
                if($opc=="login"){
                    $count = 0;
                    if (isset($_POST["usuario"])){ 
                        //echo "usuario=".$_POST["usuario"]."<br>";
                        $usuario = $_POST["usuario"];
                        $count++;
                       }
                    if (isset($_POST["senha"])){ 
                       // echo "<br>senha=".$_POST["senha"]."<br>";                
                        $senha = $_POST["senha"];
                        $count++;
                    }
      
                    if ($count == 2){
                        $usuario = base64_encode($usuario);
                        $senha   = base64_encode($senha);
                       // $sql = "insert into login(id,nome,senha,perfil,opcoes,nivel)values(0,'".$usuario."','".$senha."','','','')";
                        $sql = "select * from login where nome='".$usuario."'";
                        $confere =  retornadados($sql,"consulta");
                        if($usuario==$confere["nome"] && $senha==$confere["senha"] && $usuario != "" && $senha!=""){
                           //header('Location: frmprincipal.php');  
                            if($opc == "login"){
                                $indice = 1;
                                include "frmprincipal.php";

                            }           
                        }else{          
                            include "login.php";
                            echo '<script> mensagem(); </script>';
                            //header('Location: index.php'); 
                        }

                    }
                }else{
                    
                   if($opc=="cadastro"){
                       $indice = 2;
                    if (isset($_POST["usuario"])){ 
                        //echo "usuario=".$_POST["usuario"]."<br>";
                        $usuario = $_POST["usuario"];
                        $usuario = $usuario;
                       }
                    if (isset($_POST["senha"])){ 
                       // echo "<br>senha=".$_POST["senha"]."<br>";                
                        $senha = $_POST["senha"];
                        $senha   = $senha;
                    }
                       include "cadastro.php";                                
                   } 
                 if($opc=="principal"){
                       $indice = 2;
                    if (isset($_POST["usuario"])){ 
                        //echo "usuario=".$_POST["usuario"]."<br>";
                        $usuario = $_POST["usuario"];
                        $usuario = $usuario;
                       }
                    if (isset($_POST["senha"])){ 
                       // echo "<br>senha=".$_POST["senha"]."<br>";                
                        $senha = $_POST["senha"];
                        $senha   = $senha;
                    }
                        $indice = 1;
                        include "frmprincipal.php";                               
                   }                   
                   
                 if($opc=="cadcli"){
                       $indice = 2;
                    if (isset($_POST["usuario"])){ 
                        //echo "usuario=".$_POST["usuario"]."<br>";
                        $usuario = $_POST["usuario"];
                        $usuario = $usuario;
                       }
                    if (isset($_POST["senha"])){ 
                       // echo "<br>senha=".$_POST["senha"]."<br>";      //test          
                        $senha = $_POST["senha"];
                        $senha   = $senha;
                    }
                        $indice = 3;
                        include "insert_cliente.php";                               
                   }                     
                   
                   
                }
            }
           
        ?>      
            
        </center>
    </body>
</html>
