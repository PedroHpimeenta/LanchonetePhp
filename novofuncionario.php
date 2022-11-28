<?php

    echo "
    <head>
        <link rel='stylesheet' href='reset.css'>
        <link rel='stylesheet' href='padrao.css'>
        <link rel='stylesheet' href='style.css'>
    </head>
    ";
    session_start();
    require_once 'conexao.php';
    require_once 'funcoes.php';
    
    if(eAdm()){
        @$usuario = $_POST['usuario'];
        @$senha = $_POST['senha'];
        @$confirma = $_POST['confirmar'];
        @$nivel = $_POST['nivel'];
        
        if($usuario == null || $senha == null || $confirma == null || $nivel == null){
            require 'novofuncionario-form.php';
            echo msg_aviso('Alguns dados não foram preenchidos');
        }else{
            if($senha != $confirma){
                require 'novofuncionario-form.php';
                echo msg_aviso("As senhas não sao iguais");
            }else{
                $senha = gerarshash($senha);
                $sql = $banco->query("insert into login (usuario,senha,nivel) values ('$usuario','$senha','$nivel')");

                echo msg_sucesso("novo usuario cadastrado com sucesso");
                echo "<a class='editarme' href='index.php'>voltar ao inicio<a/>";
                echo "<a class='editarme' href='novofuncionario-form.php'>Cadastrar novo usuario</a>";
            }
        }
        
    }else{
        header('location:index.php');
    }
?>