<?php
require_once 'conexao.php';
require_once 'funcoes.php';

echo "
    <head>
        <link rel='stylesheet' href='reset.css'>
        <link rel='stylesheet' href='padrao.css'>
        <link rel='stylesheet' href='style.css'>
    </head>
    ";
    session_start();

  $arquiv = $_FILES['imagem'];
    $arquivoNovo = explode('.',$arquiv['name']);// tudo que tiver antes do ponto
    // será considerado como nome do arquivo
    if($arquivoNovo[sizeof($arquivoNovo)-1] != 'jpg'){
        echo "esse arquivo não é jpg, por isso não poderá subir";
        die('Infelizmente não foi possivel subir o arquivo');  
    }else{
        echo "deu certo";
        move_uploaded_file($arquiv['tmp_name'], 'midia/img/'. $arquiv['name']);
        // subi o arquivo na pasta
        $imagem = $arquiv['name'];
        $_POST['capa'] = $imagem;
    }


    $nome_antigo = $_POST['escondido'];
    $nome_servico= $_POST['nome_servico'];
    $descricao= $_POST['descricao'];
    $preco= $_POST['preco'];
    @$img= $imagem;

   $banco->query("update secao1 SET nome_servico = '$nome_servico', descricao = '$descricao',preco = '$preco', img = '$img' where nome_servico = '$nome_antigo'");
   echo "<a class='editarme' href='index.php'>voltar ao inicio<a/>";
?>