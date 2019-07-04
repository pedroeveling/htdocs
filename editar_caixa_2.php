<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php 
    include("conexao.php");
    
    $caixa = $_GET['caixa'];
    $query = "select c.data, f.* from caixa c inner join funcionario f on (f.id = c.funcionario) where c.id = $caixa";
	$query2 = "select DISTINCT f.* from funcionario f where f.id not in (select c2.funcionario from caixa c2 inner join funcionario f2 on (f2.id = c2.funcionario) where c2.id = $caixa)"; 
    
	
	$consulta = mysqli_query($conexao, $query);
	$consulta2 = mysqli_query($conexao, $query2);
	global $funcionario;
	
	
	?>
</head>
<body>
   
 <form action="" method="POST" target="_self"> 
    <legend>Informações sobre o caixa:</legend>  
    <br>
            <label for="inputAddress">Funcionário</label>
            <div class="form-group">
            <select name="funcionario" id="funcionario">
			<?php 
			while($result = mysqli_fetch_array($consulta))
            {
              
              $nome2 = $result['nome'];
              $data2 = $result['data'];
			  $id = $result['id'];
			  $funcionario = $id;
			  
              echo "<option value='$id'>$nome2</option'>";
			  
            }
				?>
			<?php
            while($result2 = mysqli_fetch_array($consulta2))
            {
              $id = $result2['id'];
              $nome = $result2['nome'];
              
              echo "<option value='$id'>$nome</option'>";
            }
    
            ?>
</select>

                <label for="inputAddress">Data</label>
                <input type="date" name="data" class="form-control" id="inputAddress" placeholder="Av. Rio Branco" value="<?php echo $data2; ?>">
            </div>
            <button type="submit" class="btn btn-primary" value="Submit" name="submit">Confirmar</button>
            
</form>       
<?php
        /* Ligação com Banco de Dados */
        if(isset($_POST["submit"]))  // AQUI RECEBE OS DADOS DO FORMULARIO E REPASSA PARA AS VARIAVEIS
        {
            include_once("conexao.php");/* INCLUI O CODIGO DE CONEXAO */
            
            $funcionario2 = $_POST['funcionario'];
            $data = $_POST['data'];
            //echo $funcionario;
            //echo $sql;
			if($funcionario2 == 0 )
			{
			$sql = "update caixa  set funcionario = '$funcionario', data = '$data' where id = '$caixa'";	
			}
			else
			{
			$sql = "update caixa  set funcionario = '$funcionario2', data = '$data' where id = '$caixa'";					
			}
            $salvar = mysqli_query($conexao,$sql);/* Escreve os dados no banco - RETORNA ERRO SE DER OU SUCESSO*/
            if($salvar)
            {
                ?>
                <div class="alert alert-success">Caixa atualizado com sucesso !    Você será redicionado para a página principal.</div>
                <img src="logo.jpg" alt="some text" width=600 height=400>
                <?php
              
                header('Location: index.php');
                sleep (2);
            }
            else
            {
                die(mysqli_error($conexao));
                ?>
                <div class="alert alert-warning">Falha ao atulizar usuário!</div>
                <?php
            }
            mysqli_close($conexao);
        }
        ?>
</body>
</html>