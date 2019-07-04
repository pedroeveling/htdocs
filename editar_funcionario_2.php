<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php 
    include("conexao.php");
    
    $caixa = $_GET['caixa'];
    $query = "select * from funcionario f  where f.id = $caixa";
	$consulta = mysqli_query($conexao, $query);	
    ?>
</head>
<body>
   
 <form action="" method="POST" target="_self"> 
    <legend>Informações sobre Fornecedor:</legend>
	<?php
            while($result = mysqli_fetch_array($consulta))
            {
              $nome = $result['nome'];
              $cpf = $result['cpf'];
			  }
    
            ?>
                <label for="inputAddress">Nome</label>
                <input type="text" name="nome" class="form-control" id="inputAddress" placeholder="nome" value="<?php echo $nome;?>">
                <label for="inputAddress">CPF</label>
                <input type="number" name="cpf" class="form-control" id="inputAddress" placeholder="111111111" value="<?php echo $cpf;?>">
              
    <br>
            <label for="inputAddress">Telefone</label>
            <div class="form-group">
            <?php 
            $query2= "select id,numero from telefone";
            $consulta2 = mysqli_query($conexao, $query2);
            ?>
            <select name="telefone" id="telefone">
            <?php
            while($result = mysqli_fetch_array($consulta2))
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
            $query3= "select id,rua,numero,cep from endereco";
            $consulta3 = mysqli_query($conexao, $query3);
            ?>
            <select name="endereco" id="endereco">
            <?php
            while($result = mysqli_fetch_array($consulta3))
            {
              $id = $result['id'];
              $endereco = $result['rua']." ".$result['numero']." - ".$result['cep'];
              
              echo "<option value='$id'>$id - $endereco</option'>";
            }
    
            ?>
</select>
<br>
<label for="inputAddress">Cargo</label>
            <div class="form-group">
            <?php 
            $query= "select id,nome from cargo";
            $consulta = mysqli_query($conexao, $query);
            ?>
            <select name="cargo" id="cargo">
            <?php
            while($result = mysqli_fetch_array($consulta))
            {
              $id = $result['id'];
              $nome= $result['nome'];
              
              echo "<option value='$id'>$nome</option'>";
            }
    
            ?>
</select>
<br>
<label for="inputAddress">Setor</label>
            <div class="form-group">
            <?php 
            $query= "select id,descricao from setor";
            $consulta = mysqli_query($conexao, $query);
            ?>
            <select name="setor" id="setor">
            <?php
            while($result = mysqli_fetch_array($consulta))
            {
              $id = $result['id'];
              $descricao= $result['descricao'];
              
              echo "<option value='$id'>$id - $descricao</option'>";
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
            $endereco = $_POST['endereco'];
            $telefone = $_POST['telefone'];
            $cpf = $_POST ['cpf'];
            $cargo = $_POST ['cargo'];
            $setor=$_POST['setor'];
            //echo $funcionario;
		    $sql = "update funcionario f set  nome = '$nome',endereco = '$endereco',telefone = '$telefone',cpf = '$cpf', cargo = $cargo, setor = $setor where f.id = '$caixa'";
            
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