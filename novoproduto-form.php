<html>
    <form action="novoproduto.php" method="post" enctype="multipart/form-data">
    <input type="text" name="nome" placeholder="Nome do produto">
        <br>
     <input type="file" name="imagem">
        <br>
    <textarea name="descricao" rows="20" cols="50" placeholder="Descrição do produto"></textarea>
        <br>
        <input type="text" name="preco" placeholder="Preço">
        <br>    
    <input type="submit" value="cadastrar novo produto">

</html>