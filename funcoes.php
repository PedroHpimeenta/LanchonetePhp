<?php

     function thumb($arquivo){
         $caminho = "midia/img/$arquivo";
        if(is_null($arquivo) || !file_exists($caminho)){
            return "midia/img/indisponivel.png";
        }else{
            return $caminho;
        }
    }
    function voltar(){
        return "<a href='index.php'>Voltar</a>";
    }

    function msg_sucesso($m){
        $resposta = "<div class='sucesso'>$m</div>";
        return $resposta;
    }
    function msg_aviso($m){
        $resposta = "<div class='alerta'>$m</div>";
        return $resposta;
    }
    function msg_erro($m){
        $resposta = "<div class='erro'>$m</div>";
        return $resposta;
    }

    //--------------------------------------------------------------
    // Funções de login

    function gerarshash($senha){
        $hash = password_hash($senha,PASSWORD_DEFAULT);
        return $hash;
    }
    function testarhash($senha,$hash){
        $ok = password_verify($senha,$hash);
        return $ok;
    }
    function logout(){
        $_SESSION['usuario'] = null;
        $_SESSION['senha'] = null;
        $_SESSION['nivel'] = null;

        //unset($_SESSION['usuario']);
        //unset($_SESSION['senha']);
        //unset($_SESSION['nivel'])
    }
    function estaLogado(){
        if(isset($_SESSION['usuario'])){
            if($_SESSION['usuario'] == null){
                return false;
            }else{
                return true;
            }
        }else{
            
        }
        
    }
    function eAdm(){
        if(estaLogado()){
            if($_SESSION['nivel'] == "admin"){
                return true;
            }else{
                return false;
            }
        }
    }
    function eEditor(){
        if(estaLogado()){
            if($_SESSION['nivel'] == "editor"){
                return true;
            }else{
                return false;
            }
        }
    }
    function head(){
        echo "
        <head>
            <link rel='stylesheet' href='style/reset.css'>
            <link rel='stylesheet' href='style/padrao.css'>
            <link rel='stylesheet' href='style/style.css'>
        </head>
        ";
    }

?>