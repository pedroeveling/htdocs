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
    $query = "select * from item i  where i.id = $caixa";
	$consulta = mysqli_query($conexao, $query);	
    ?>
</head>
<body>
    <legend align="center">Prencha os dados:</legend> 
 
  <form action="" method="POST" target="_self"> 
     
	<div class="container6"> 
<table id="tabela"> 	
    <tr>

            <div class="form-group">
			<?php
            while($result = mysqli_fetch_array($consulta))
            {
              $quantidade = $result['quantidade'];
              $validade = $result['validade'];
			 
			  }
    
            ?>
                <td><label for="inputAddress">Quantidade</label></td>
                <td><input type="number" name="qnt" class="txt2" id="inputAddress" placeholder="quantidade" value="<?php echo $quantidade;?>"></td>
           </tr>
		   <tr>
                <td><label for="inputAddress">validade</label></td>
               <td> <input type="date" name="data" class="txt2" id="inputAddress" placeholder="40" value="<?php echo $validade;?>"></td>
			   </tr>
           
            <tr>
			<td>
<label for="inputAddress">Produto</label></td>
            
            <?php 
            $query2= "select id,nome from produto";
            $consulta2 = mysqli_query($conexao, $query);
            ?>
           <td> <div class="select"> <select name="produto" id="produto">
            <?php
            while($result = mysqli_fetch_array($consulta2))
            {
              $id = $result['id'];
              $nome = $result['nome'];
              
              echo "<option value='$id'>$id - $nome </option'>";
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
</div>      <?php
        /* Ligação com Banco de Dados */
        if(isset($_POST["submit"]))  // AQUI RECEBE OS DADOS DO FORMULARIO E REPASSA PARA AS VARIAVEIS
        {
            include_once("conexao.php");/* INCLUI O CODIGO DE CONEXAO */
            
            $quantidade = $_POST['qnt'];
            $validade = $_POST['data'];
            $produto = $_POST['produto'];
            //echo $funcionario;
            
			$sql = "update item i set  quantidade = '$quantidade',validade = '$validade',produto = '$produto' where i.id = '$caixa'";

            echo $sql;
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