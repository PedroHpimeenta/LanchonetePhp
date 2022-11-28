<html>
    <form action="novoservico.php" method="post" enctype="multipart/form-data">
    <input type="text" name="nome" placeholder="Nome do servico">
        <br>
     <input type="file" name="imagem" >
        <br>
    <textarea name="descricao" rows="20" cols="50" placeholder="Descricao do serviço"></textarea>
        <br>
        <input type="text" name="preco" placeholder="Preço">
        <br>    
    <input type="submit" value="enviar novo serviço">

</html>