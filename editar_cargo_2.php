<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php 
    include("conexao.php");
    
    $caixa = $_GET['caixa'];
    $query = "select * from cargo c  where c.id = $caixa";
	//$query2 = "select DISTINCT c.* from cargo c where c.id not in (select * from cargo c2  where c2.id = $caixa)"; 
    
	
	$consulta = mysqli_query($conexao, $query);
	//$consulta2 = mysqli_query($conexao, $query2);
	global $salario;
	
	?>
</head>
<body>
   
 <form action="" method="POST" target="_self"> 
    <legend>Cadastro Cargo</legend>  
    <br>

            <div class="form-group">
                <label for="inputAddress">Nome</label>
				<?php 
			while($result = mysqli_fetch_array($consulta))
            {
              
              $nome2 = $result['nome'];
              $horas2 = $result['horas'];
			  $salario2 = $result['salario'];
			  $id2 = $result['id'];
			  $salario = $salario2;  
            }
				?>
                <input type="text" name="nome" class="form-control" id="inputAddress" value="<?php echo $nome2; ?>" placeholder="Cafetão">
            </div>
            <div class="form-group">
                <label for="inputAddress">Horas</label>
                <input type="text" name="horas" class="form-control" id="inputAddress" placeholder="40" value="<?php echo $horas2; ?>">
            </div>
            <div class="form-group">
            <br>
<label for="inputAddress">Salario</label>
            <div class="form-group">
            <?php 
            $query2= "select id,valor from salario";
            $consulta2 = mysqli_query($conexao, $query2);
            ?>
            <select name="salario" id="salario">
            <?php
            while($result2 = mysqli_fetch_array($consulta2))
            {
              $id = $result2['id'];
              $nome = $result2['valor'];
              
              echo "<option value='$nome'>$id - $nome </option'>";
            }
    
            ?>
            </select>
            </div>
            
            <button type="submit" class="btn btn-primary" value="Submit" name="submit">Confirmar</button>
            
</form>       <?php
        /* Ligação com Banco de Dados */
        if(isset($_POST["submit"]))  // AQUI RECEBE OS DADOS DO FORMULARIO E REPASSA PARA AS VARIAVEIS
        {
            include_once("conexao.php");/* INCLUI O CODIGO DE CONEXAO */
            
            $nome = $_POST['nome'];
            $horas = $_POST['horas'];
            $salario2 = $_POST['salario'];
            //echo $funcionario;
			if($salario2 == 0)
			{				
			$sql = "update cargo set nome = '$nome', horas = '$horas' , salario = '$salario' where id = '$caixa'";	
			}
			else
			{
			$sql = "update cargo set nome = '$nome', horas = '$horas' , salario = '$salario2' where id = '$caixa'";		
			}
            
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