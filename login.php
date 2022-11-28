<?php
    require_once 'conexao.php';
    require_once 'funcoes.php';
   
?>

<html>
    <head>
        <link rel="stylesheet" href="style/reset.css">
        <link rel="stylesheet" href="style/padrao.css">
        <link rel="stylesheet" href="style/style.css">
    </head>

    <body>
        <div>
            <?php
           
                $u = $_POST['usuario'];
                $s = $_POST['senha'];
            echo $u;
            echo $s;
                if((is_null($u) || $s == null)){
                    require 'login-form.php';
                    echo msg_aviso("algo esta vazio");
                }else{
                    
                    
                    $sql_logar = $banco->query("select * from login where usuario = '$u'");
                    $registro = $sql_logar->fetch_object();
                    
                    echo "<hr>";
                    if($registro == null){
                        require 'login-form.php';
                        echo msg_erro("Usuario não encontrado em nossa base");
                    }else{
                        if($u == $registro->usuario && testarhash($s,$registro->senha) == true ){
                            echo msg_sucesso("Usuario logado com sucesso");
                            session_start();
                            $_SESSION['usuario'] = $registro->usuario;
                            $_SESSION['senha'] = $registro->senha;
                            $_SESSION['nivel'] = $registro->nivel;
                            
                            header('location:index.php');
                        }else{
                            require "login-form.php";
                            echo msg_erro("senha incorreta");
                        }
                    }
                }
            ?>
        </div>

    
        <?php
            $banco->close();
        ?>
    </body>
</html>