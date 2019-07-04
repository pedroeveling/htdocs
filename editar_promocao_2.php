<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php 
	include("conexao.php");
    $caixa = $_GET['caixa'];
    $query = "select * from promocao p  where p.id = $caixa";
	$consulta = mysqli_query($conexao, $query);	
    ?>
</head>
<body>
   
 <form action="" method="POST" target="_self"> 
    <legend>Cadastro Promoção:</legend>

                <label for="inputAddress">Nome</label>
				<?php
            while($result = mysqli_fetch_array($consulta))
            {
              $nome = $result['nome'];
              $inicio = $result['inicio'];
			  $fim = $result['fim'];
			  }
    
            ?>
                <input type="text" name="nome" class="form-control" id="inputAddress" placeholder="Nome" value="<?php echo $nome;?>">
              
    <br>
<br>
<label for="inputAddress">Produto</label>
            <div class="form-group">
            <?php 
            $query2= "select id,nome from produto";
            $consulta2= mysqli_query($conexao, $query2);
            ?>
            <select name="produto" id="produto">
            <?php
            while($result = mysqli_fetch_array($consulta2))
            {
              $id = $result['id'];
              $nome = $result['nome'];
              
              echo "<option value='$id'>$id - $nome </option'>";
            }
    
            ?>
</select>
<br>
                <label for="inputAddress">Data Início</label>
                <input type="date" name="dataI" class="form-control" id="inputAddress" placeholder="Nome" value="<?php echo $inicio;?>">
                <label for="inputAddress">Data Fim</label>
                <input type="date" name="dataF" class="form-control" id="inputAddress" placeholder="Nome" value="<?php echo $fim;?>">




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
		    $sql = "update promocao p set  nome = '$nome',produto = '$produto',inicio = '$dataI',fim = '$dataF' where p.id = '$caixa'";

            
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