<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="interface2.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <?php 
    include("conexao.php");
    
    $caixa = $_GET['caixa'];
    $query = "select * from funcionario f  where f.id = $caixa";
	$consulta = mysqli_query($conexao, $query);	
    ?>
</head>
<body>
    <legend align="center">Prencha os dados:</legend> 
 
  <form action="" method="POST" target="_self"> 
     
	<div class="container6"> 
<table id="tabela"> 	
    <tr>
	<?php
            while($result = mysqli_fetch_array($consulta))
            {
              $nome = $result['nome'];
              $cpf = $result['cpf'];
			  }
    
            ?>
                <td><label for="inputAddress">Nome</label></td>
               <td> <input type="text" name="nome" class="txt2" id="inputAddress" placeholder="nome" value="<?php echo $nome;?>"></td>
			   
			   </tr>
			   <tr>
               <td> <label for="inputAddress">CPF</label></td>
              <td>  <input type="number" name="cpf" class="txt2" id="inputAddress" placeholder="111111111" value="<?php echo $cpf;?>"></td>
			  </tr>
              <tr>
 
            <td><label for="inputAddress">Telefone</label></td>
            
            <?php 
            $query2= "select id,numero from telefone";
            $consulta2 = mysqli_query($conexao, $query2);
            ?>
            <td> <div class="select"> <select name="telefone" id="telefone">
            <?php
            while($result = mysqli_fetch_array($consulta2))
            {
              $id = $result['id'];
              $numero = $result['numero'];
              
              echo "<option value='$id'>$numero</option'>";
            }
    
            ?>
</select></div> </td>
           </tr>
		   <tr>
<td><label for="inputAddress">Endereço</label></td>
            <div class="form-group">
            <?php 
            $query3= "select id,rua,numero,cep from endereco";
            $consulta3 = mysqli_query($conexao, $query3);
            ?>
           <td> <div class="select">  <select name="endereco" id="endereco">
            <?php
            while($result = mysqli_fetch_array($consulta3))
            {
              $id = $result['id'];
              $endereco = $result['rua']." ".$result['numero']." - ".$result['cep'];
              
              echo "<option value='$id'>$id - $endereco</option'>";
            }
    
            ?>
  </select></div> </td>
           </tr>
		   <tr>
<td><label for="inputAddress">Cargo</label></td>
            <div class="form-group">
            <?php 
            $query= "select id,nome from cargo";
            $consulta = mysqli_query($conexao, $query);
            ?>
            <td> <div class="select"> <select name="cargo" id="cargo">
            <?php
            while($result = mysqli_fetch_array($consulta))
            {
              $id = $result['id'];
              $nome= $result['nome'];
              
              echo "<option value='$id'>$nome</option'>";
            }
    
            ?>
</select></div> </td>
           </tr>
<tr>

<td><label for="inputAddress">Setor</label></td>
            <div class="form-group">
            <?php 
            $query= "select id,descricao from setor";
            $consulta = mysqli_query($conexao, $query);
            ?>
          <td> <div class="select">  <select name="setor" id="setor">
            <?php
            while($result = mysqli_fetch_array($consulta))
            {
              $id = $result['id'];
              $descricao= $result['descricao'];
              
              echo "<option value='$id'>$id - $descricao</option'>";
            }
    
            ?>
 </select></div> </td>
           </tr>
      <tr>    
           <td colspan="1"> <button type="submit" class="sb" value="Submit" name="submit">Confirmar</button></td>
			<td colspan="2"><a href="index.php" ><input type="button"  class="sb"value="Home" id="botão" ></a></td>
      </tr>      
</table>
</form>
</div>       <?php
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