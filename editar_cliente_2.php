<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php 
     include("conexao.php");
    
    $caixa = $_GET['caixa'];
    $query = "select * from cliente c  where c.id = $caixa";
	$consulta = mysqli_query($conexao, $query);
	
	
    ?>
</head>
<body>
   
 <form action="" method="POST" target="_self"> 
    <legend>Informações sobre o Cliente:</legend>  
    <br>
            <label for="inputAddress"></label>
            <div class="form-group">
			<?php 
			while($result = mysqli_fetch_array($consulta))
            {
              
              $nome = $result['nome'];
              $cpf = $result['cpf'];
			}
				?>
                <label for="inputAddress">Nome</label>
                <input type="text" name="nome" class="form-control" id="inputAddress" placeholder="Fulado De Tals" value="<?php echo $nome; ?>">
            </div>
            <div class="form-group">
                <label for="inputAddress">CPF</label>
                <input type="number" name="cpf" class="form-control" id="inputAddress" placeholder="1111111111" value="<?php echo $cpf; ?>">
            </div>
            
            <button type="submit" class="btn btn-primary" value="Submit" name="submit">Confirmar</button>
            
</form>       <?php
        /* Ligação com Banco de Dados */
        if(isset($_POST["submit"]))  // AQUI RECEBE OS DADOS DO FORMULARIO E REPASSA PARA AS VARIAVEIS
        {
            include_once("conexao.php");/* INCLUI O CODIGO DE CONEXAO */
            
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
            //echo $funcionario;
            $sql = "update cliente c set nome = '$nome', cpf = '$cpf' where c.id = '$caixa'";
            //echo $sql;
            $salvar = mysqli_query($conexao,$sql);/* Escreve os dados no banco - RETORNA ERRO SE DER OU SUCESSO*/
            if($salvar)
            {
                ?>
                <div class="alert alert-success">Endereço cadastrado com sucesso !    Você será redicionado para a página principal.</div>
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