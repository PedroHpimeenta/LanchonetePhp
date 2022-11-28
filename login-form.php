<?php

require_once 'conexao.php';
require_once 'funcoes.php';    

echo voltar();

?>

<form action="login.php" method="post">
    Usuario:<input type="text" name="usuario">
    Senha:<input type="text" name="senha">
    <input type="submit" value="logar">
</form>