<?php
    $banco = new mysqli('localhost','root','','projeto');

     $banco->query("SET NAMES utf8");// arruma os acentos nos nomes dos campos
     $banco->query("SET character_set_connection='utf8';");// arruma acentos na conexão
     $banco->query("SET character_set_cliente='utf8';");// arruma acentos no front-end
     $banco->query("SET character_set_result='utf8';");//resultado da pesquisa no banco

?>