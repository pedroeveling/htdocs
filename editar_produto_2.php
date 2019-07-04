<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php 
    include("conexao.php");
    
    $caixa = $_GET['caixa'];
    $query = "select * from produto p where p.id = $caixa";
	$consulta = mysqli_query($conexao, $query);
    ?>
</head>
<body>
   
 <form action="" method="POST" target="_self"> 
    <legend>Informações sobre Produto:</legend>
                <label for="inputAddress">Nome</label>
                <br>
                <?php
				while($result = mysqli_fetch_array($consulta))
            {
              
              $nome = $result['nome'];
              $fornecedor = $result['fornecedor'];
			  $preco = $result['preco'];
			  
			  
			}
				?>
				
				
				<input type="text" name="nome" class="form-control" id="inputAddress" placeholder="Nome do produto" value="<?php echo $nome; ?>">
    <br>
            <label for="inputAddress">Fornecedor</label>
            <div class="form-group">
            <?php 
            $query2= "select * from fornecedor f where f.id not in (select f.id from fornecedor f inner join produto p on (p.fornecedor = f.id) where p.id = $caixa)";
			$query3= "select f.nome,f.id from fornecedor f inner join produto p on (p.fornecedor = f.id) where p.id = $caixa";
            $consulta2 = mysqli_query($conexao, $query2);
			$consulta3 = mysqli_query($conexao, $query3);
            ?>
            <select name="fornecedor" id="fornecedor">
            <?php
            while($result = mysqli_fetch_array($consulta3))
            {
              $id = $result['id'];
              $nome = $result['nome'];
              
              echo "<option value='$id'>$nome</option'>";
            }
    
            ?>
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
            <label for="inputAddress">preco</label>
            <br>
                <input type="number" name="preco" class="form-control" id="inputAddress" placeholder="666" value="<?php echo $preco; ?>">
            <br>


            <button type="submit" class="btn btn-primary" value="Submit" name="submit">Confirmar</button>
            
</form>       <?php
        /* Ligação com Banco de Dados */
        if(isset($_POST["submit"]))  // AQUI RECEBE OS DADOS DO FORMULARIO E REPASSA PARA AS VARIAVEIS
        {
            include_once("conexao.php");/* INCLUI O CODIGO DE CONEXAO */
            
            $nome = $_POST['nome'];
            $preco = $_POST['preco'];
            $fornecedor = $_POST['fornecedor'];
            //echo $funcionario;
			$sql = "update produto p set  nome = '$nome',preco = '$preco',fornecedor = '$fornecedor' where p.id = '$caixa'";

            // echo $sql;
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