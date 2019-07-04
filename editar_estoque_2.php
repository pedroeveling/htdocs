<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php 
    include("conexao.php");
	$caixa = $_GET['caixa'];
    $query = "select e.quantidade from estoque e where e.id = $caixa";
	
	
	$consulta = mysqli_query($conexao, $query);	
    ?>
</head>
<body>
   
 <form action="" method="POST" target="_self"> 
    <legend>Informações sobre Estoque:</legend>

                <label for="inputAddress">Quantidade</label>
				<?php
            while($result = mysqli_fetch_array($consulta))
            {
              $quantidade = $result['quantidade'];
            }
    
            ?>
                <input type="number" name="quantidade" class="form-control" id="inputAddress" placeholder="32" value="<?php echo $quantidade;?>">
              
    <br>
            <label for="inputAddress">Gerente</label>
            <div class="form-group">
            <?php 
            $query2= "select id,nome from funcionario where cargo='1'";
            $consulta2 = mysqli_query($conexao, $query2);
            ?>
            <select name="gerente" id="gerente">
            <?php
            while($result = mysqli_fetch_array($consulta2))
            {
              $id = $result['id'];
              $nome = $result['nome'];
              
              echo "<option value='$id'>$nome</option'>";   
            }
    
            ?>
</select>
<br>


            <button type="submit" class="btn btn-primary" value="Submit" name="submit">Confirmar</button>
            
</form>       <?php
        /* Ligação com Banco de Dados */
        if(isset($_POST["submit"]))  // AQUI RECEBE OS DADOS DO FORMULARIO E REPASSA PARA AS VARIAVEIS
        {
            include_once("conexao.php");/* INCLUI O CODIGO DE CONEXAO */
            
            $gerente = $_POST['gerente'];
            
            $quantidade = $_POST['quantidade'];
            //echo $funcionario;
			$sql = "update estoque e set  gerente = '$gerente',quantidade = '$quantidade' where e.id = '$caixa'";
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