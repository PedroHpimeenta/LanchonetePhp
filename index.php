<?php
    require_once 'conexao.php';
    require_once 'funcoes.php';
    session_start();

    if(@$_SESSION['usuario'] != null){
        echo "Olá ". $_SESSION['usuario'] ;
          
            
            
            echo "<a href='logout.php' class='aa'> sair</a>";
       
    }else{
        if(eEditor()){
           
        }
    }
        if(eAdm()){
           
           
          
            echo "<spam ><a class='aa' href='novofuncionario-form.php'> novo funcionario<a></spam>";
            echo "<spam ><a class='aa' href='novoproduto-form.php'> novo produto<a></spam>";
            echo "<spam ><a class='aa' href='novodepoimento-form.php'> novo depoimento<a></spam>";
            echo "<spam ><a class='aa' href='novoservico-form.php'> novo serviço<a></spam>";
           
           
        }

?>
<html>
    <head>
        <link rel="stylesheet" href ="reset.css">
        <link rel="stylesheet" href ="padrao.css">
        <link rel="stylesheet" href ="style.css">
    </head>
    <div class="centraliza">
            
        </div>
    <header class="h1" >
    <div >
            <h1 class=" centraliza titulo">Pizzaria Tudo Bom</h1>
    </div>
    <div class="fl esq-xl-1  col-xl-2">
         <img class="logo dir-xl-8" src="midia/img/logo.jpg" alt="">
    </div>

    <div class="fl col-xl-6 mt-50 ">
      
        <nav class="menu  ">
            <a  class="botao" href="index.php"><li>Pagina inicial</li></a>
            <a  class="botao" href="#1"><li>Pizzas</li></a>
            <a  class="botao" href="#1"><li>Bebidas</li></a>
            <a class="botao" href="#2"><li>Contatos</li></a>
            
        </nav>
    </div>
   
    </header>
    <div class="normal"></div>
    <body>
    


        <div>
        <section class="centraliza mt-20" >
        <iframe width="560" height="315" src="https://www.youtube.com/embed/opMDA4p2XcM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </section>
        
        </div>
        <div class="normal"></div>








        


          <div class="normal "></div>
            <form class="centraliza mt-20 mb-20" action="index.php" method="get" id ="1">
                <input type="text"  name="pesquisar" placeholder="buscar">
                <input type ="submit" value="pesquisar" >   
            </form>
            <?php
         echo '<h1 class= "centraliza titulo2 esp" > Produtos </h1>';
         $busca =$_GET['pesquisar'] ?? '';
         $teste = ' Select * from secao1 ';
         $teste .= " where  nome_servico like '%$busca%' or descricao like '%$busca' or preco like '%$busca' ";
         $sql1 = $banco->query($teste);
         while($produtos =  $sql1->fetch_object())
         {
 
         echo "
             <div class=' fl esq-xl-1'>
             <img class='fl s2' src='midia/img/$produtos->img'>
                 <h2 class='centraliza fonte_servico'>$produtos->nome_servico</h2>
                 <h3 class='centraliza fonte_servico'>$produtos->descricao</h3>
                 <br>
                 <h3><span class='esq-xl-4 mt-10 fonte_preco'>Preço:$produtos->preco</span></h3>
                 <br>
                 <h3 class='centraliza saiba'>Saiba mais</h3>  ";
                 if(estalogado()){
                     echo " <h3><a href='editarproduto-form.php?nome_servico=$produtos->nome_servico'>Editar</a></h3> ";
                 }
                 echo "
             </div>";
         }
        
        ?>
      
    <div class="normal"></div>

   <br>
    <section class="s4 centraliza esq-xl-1 dir-xl-1 esp">
        <?php
            $sql3 = $banco->query("Select * from secao3");
            echo "<h1 class='centraliza titulo2 mt-10'>Depoimentos</h1>";
            while($depoimento = $sql3->fetch_object())
                echo "
                    <div class='servicos centraliza col-xl-3 fl mt-20'>
                    <img class='col-xl-10 fl mb-10 ' src='midia/img/$depoimento->foto'>
                    
                    
                    <h2 class='s2_nome mt-15 dir-xl-3 mt-35 centraliza  fonte_depo'>$depoimento->cliente</h2>
                    
                    <h3 class='s2_descricao esq-xl-1 col-xl-8 centraliza dir-xl-3  fonte_depo'>$depoimento->depoimento</h3> 
                    </div>";
                  
        ?>
        </div>
        </section>
        <div class="normal"></div>
      <br>
        
    <section class="s4 centraliza esq-xl-1 dir-xl-1 esp ">
        <?php
            $sql2 = $banco->query("Select * from secao4");
            echo "<h1 class='centraliza  titulo2'>Serviços</h1>";
            while($servico = $sql2->fetch_object()){
                echo "
                    <div class='servicos col-xl-4 fl mt-30'>
                    <img class='col-xl-2 mb-5' src='midia/img/$servico->img'>
                    <h2 class='s2_nome  '>$servico->nome_servico</h2>
                    <br>
                    <h3 class='s2_descricao esq-xl-1 col-xl-10 fonte_depo mt-5'>$servico->descricao</h3>
                    <br>
                    <h3><spam class='p font_depo mt-5'>Preço:</spam>R$$servico->preco</h3> ";
                    if(estalogado()){
                        echo " <h3><a href='editarservico-form?nome_servico=$servico->nome_servico'>Editar</a></h3> ";
                    }
                    echo "
                    </div>";
            }
        ?>
        </div>
    </section>
    <div class="normal"></div>
    
    <section class=" centraliza mt-60">
        <h1 class="titulo2">Nosso diferenciais</h1>
        <img class="mt-30" src="midia/img/pizzaiolo.jpg" alt="">
        <h2 class="mt-5 dif"> Equipe completa com Pizzaiolo Profissional!</h2>
        <h3 class="mt-5 dif">Pizza feita na hora - TUDO FRESCO - No seu evento;</h3>
        <h4 class="mt-5 dif">Experiência em pizzaria profissional com rodízio;</h4>
        <h5 class="mt-5 dif">Mais de 30 sabores de pizzas no cardápio.</h5>
    </section>
   
    </body>
    <footer>
    <div class="normal"></div>
            
            <section class="s5a centraliza esq-xl-1 dir-xl-1 esp " id="2" >
                
            <?php
                $sql5 = $banco->query("Select * from secao5");
                echo "<h1 class='centraliza titulo2 mt-60'>Contato</h1>";
                while($contato = $sql5->fetch_object()){
                    echo "
                        <div class='servicos centraliza col-xl-4 fl'>
                        <img class='col-xl-2 ' src='midia/img/$contato->img'>
                        <h2 class='s2_nome'>$contato->descricao</h2>
                        </div>";
                }
            ?>
            </section>
            <div class="normal"></div>
            
            <section class=" esq-xl-1 dir-xl-1 esp">
            <form action="recebe.php" method="get">
            <div class="  logo cor col-xl-12 mt-60 col-md-12 col-12  ">
            <form class="esq-xl-3 esq-1 " action="recebe.php"  method="get">
             
                <input class="caixa" type="text" placeholder="Nome completo">
                <input  class="email" type="text"  placeholder="Email">
                
                <input  class="assunto" type="text" placeholder="Assunto">
                
                <input  class="mensagem" type="text" placeholder="Mensagem">
                
                <input  class="enviarmensagem" type="submit" value="Enviar mensagem" >             
             <div class="normal"></div>
            </form>
            </section>
    </footer>
    <div>
        <?php
        if(@$_SESSION['usuario']==NULL){
            echo "<a class='logar' href='login-form.php'> Logar</a>";
          
        }
        ?>
    </div>
</html>