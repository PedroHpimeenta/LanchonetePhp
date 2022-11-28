<html>
    <body>
        <form action="novofuncionario.php" method="post">
            <input type="text" name="usuario" placeholder="Novo usuario">
            <br>
            <input type="password" name="senha" placeholder="Senha">
            <br>
            <input type="password" name="confirmar" placeholder="confirme a senha">
            <br>
            <select name="nivel">
                <option>editor</option>
                <option>admin</option>  
            </select>
            <input type="submit" value="cadastrar novo usuario">
        </form>
    </body>
</html>