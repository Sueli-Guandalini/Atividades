<?php

session_start();


if(
    basename($_SERVER['PHP_SELF'],'.php')=="produto" || 
    basename($_SERVER['PHP_SELF'],'.php')=="venda" || 
    basename($_SERVER['PHP_SELF'],'.php')=="usuario"||
    basename($_SERVER['PHP_SELF'],'.php')=="categoria" 
  ) {
      if(!isset($_SESSION["usuario"]["permissao"])){
         header("location: login.php");
      }
      else if($_SESSION["usuario"]["permissao"]!="1"){
        header("location: login.php");
      }
    
}


?>