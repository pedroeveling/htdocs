<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php 
    include("conexao.php");
    
    $caixa = $_GET['caixa'];
    $query = "select * from fornecedor f  where f.id = $caixa";
	$consulta = mysqli_query($conexao, $query);
	
    ?>
</head>
<body>
   
 <form action="" method="POST" target="_self"> 
    <legend>Informações sobre Fornecedor:</legend>
	
                <label for="inputAddress">Nome</label>
				<?php
				while($result = mysqli_fetch_array($consulta))
            {
              
              $nome = $result['nome'];
              $cnpj = $result['cnpj'];
			  $telefone2 = $result['telefone'];
			  $endereco2 = $result['endereco'];
			  
			}
				?>
                <input type="text" name="nome" class="form-control" id="inputAddress" placeholder="Empresa sa" value="<?php echo $nome; ?>">
                <label for="inputAddress">CNPJ</label>
                <input type="number" name="cnpj" class="form-control" id="inputAddress" placeholder="111111111111" value="<?php echo $cnpj; ?>">
              
    <br>
            <label for="inputAddress">Telefone</label>
            <div class="form-group">
            <?php 
            $query= "select id,numero from telefone";
            $consulta = mysqli_query($conexao, $query);
            ?>
            <select name="telefone" id="telefone">
            <?php
            while($result = mysqli_fetch_array($consulta))
            {
              $id = $result['id'];
              $numero = $result['numero'];
              
              echo "<option value='$id'>$numero</option'>";
            }
    
            ?>
</select>
<br>
<label for="inputAddress">Endereço</label>
            <div class="form-group">
            <?php 
            $query= "select id,rua,numero,cep from endereco";
            $consulta = mysqli_query($conexao, $query);
            ?>
            <select name="endereco" id="endereco">
            <?php
            while($result = mysqli_fetch_array($consulta))
            {
              $id = $result['id'];
              $endereco = $result['rua']." ".$result['numero']." - ".$result['cep'];
              
              echo "<option value='$id'>$id - $endereco</option'>";
            }
    
            ?>
</select>


            <button type="submit" class="btn btn-primary" value="Submit" name="submit">Confirmar</button>
            
</form>       <?php
        /* Ligação com Banco de Dados */
        if(isset($_POST["submit"]))  // AQUI RECEBE OS DADOS DO FORMULARIO E REPASSA PARA AS VARIAVEIS
        {
            include_once("conexao.php");/* INCLUI O CODIGO DE CONEXAO */
            
            $nome = $_POST['nome'];
            $endereco3 = $_POST['endereco'];
            $telefone3 = $_POST['telefone'];
            $cnpj = $_POST ['cnpj'];
            //echo $funcionario;
            $sql = "update fornecedor f set  nome = '$nome',endereco = '$endereco3',telefone = '$telefone3' ,cnpj = '$cnpj' where f.id = '$caixa'";
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