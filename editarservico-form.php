
<?php
    require_once 'conexao.php';
    require_once 'funcoes.php';
    echo head();
    session_start();

    $servico = $_GET['nome_servico'];
    $buscar =  $banco->query( " Select * from secao4 where nome_servico = '$servico'" );
 
  $editarsecao1 = $buscar->fetch_object();

  echo "
            <html>
            <form action='editarservico.php' method='post' enctype='multipart/form-data'> 
                <input type = 'hidden' name ='escondido' value ='$editarsecao1->nome_servico'>
                Nome do serviço
                <input type='text' name='nome_servico' value = '$editarsecao1->nome_servico'>
                <br>

                Preco
                <input type='text' name='preco' value = '$editarsecao1->preco'>
                <br>
                imagem
                <input type='file' name='imagem' >
                <br>
                descricao
            <textarea cols='300' rows='10' name='descricao' 
          >$editarsecao1->descricao</textarea>
                <br>
                <input type='submit' value='modificar servico'>	
            </form>
</html>
    ";
 ?>

