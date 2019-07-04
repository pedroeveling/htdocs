<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php 
    include("conexao.php")
    ?>
</head>
<body>
   
 <form action="" method="POST" target="_self"> 
    <legend>Cadastro Promoção:</legend>

                <label for="inputAddress">Quantidade</label>
                <input type="text" name="nome" class="form-control" id="inputAddress" placeholder="Nome">
              
    <br>
<br>
<label for="inputAddress">Produto</label>
            <div class="form-group">
            <?php 
            $query= "select id,nome from produto";
            $consulta = mysqli_query($conexao, $query);
            ?>
            <select name="produto" id="produto">
            <?php
            while($result = mysqli_fetch_array($consulta))
            {
              $id = $result['id'];
              $nome = $result['nome'];
              
              echo "<option value='$id'>$id - $nome </option'>";
            }
    
            ?>
</select>
<br>
                <label for="inputAddress">Data Início</label>
                <input type="date" name="dataI" class="form-control" id="inputAddress" placeholder="Nome">
                <label for="inputAddress">Data Fim</label>
                <input type="date" name="dataF" class="form-control" id="inputAddress" placeholder="Nome">




            <button type="submit" class="btn btn-primary" value="Submit" name="submit">Confirmar</button>
            
</form>       <?php
        /* Ligação com Banco de Dados */
        if(isset($_POST["submit"]))  // AQUI RECEBE OS DADOS DO FORMULARIO E REPASSA PARA AS VARIAVEIS
        {
            include_once("conexao.php");/* INCLUI O CODIGO DE CONEXAO */
            
            $nome = $_POST['nome'];
            $produto= $_POST['produto'];
            $dataI = $_POST['dataI'];
            $dataF=$_POST['dataF'];
            //echo $funcionario;
            $sql = "insert into promocao (nome,produto,inicio,fim) values ('$nome  ','$produto','$dataI','$dataF')";
            //echo $sql;
            $salvar = mysqli_query($conexao,$sql);/* Escreve os dados no banco - RETORNA ERRO SE DER OU SUCESSO*/
            if($salvar)
            {
                ?>
                <div class="alert alert-success">Endereço cadastrado com sucesso!</div>
                <img src="logo.jpg" alt="some text" width=600 height=400>
                <?php              
                header('Location: index.php');
                sleep (2);
            }
            else
            {
                die(mysqli_error($conexao));
                ?>
                <div class="alert alert-warning">Falha ao cadastrar usuário!</div>
                <?php
            }
            mysqli_close($conexao);
        }
        ?>
</body>
</html>