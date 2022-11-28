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


    $arquiv = $_FILES['imagem'];
    $arquivoNovo = explode('.',$arquiv['name']);// tudo que tiver antes do ponto
    // será considerado como nome do arquivo
    if($arquivoNovo[sizeof($arquivoNovo)-1] != 'jpg'){
        echo "esse arquivo não é png, por isso não poderá subir";
        die('Infelizmente não foi possivel subir o arquivo');  
    }else{
        echo "deu certo";
        move_uploaded_file($arquiv['tmp_name'], 'midia/img/'. $arquiv['name']);
        // subi o arquivo na pasta
        $imagem = $arquiv['name'];
        $_POST['capa'] = $imagem;
    }
    
    @$nome = $_POST['nome'];
    @$capa = $imagem;
    @$depoimento = $_POST['depoimento'];
   

    if($nome == null ||   $capa == null || $depoimento == null ){
        echo msg_aviso("Existem campos em branco, favor preencher todos os campos");
        require_once 'novoproduto-form.php';
    }else{
        $sql_prod = $banco->query("insert into secao3 (depoimento,cliente,foto) values ('$depoimento','$nome','$capa')");
        echo msg_sucesso("novo depoimento cadastrado com sucesso");
        echo "<a class='editarme' href='index.php'>voltar ao inicio<a/>";
       
    }
?>