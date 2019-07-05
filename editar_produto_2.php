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
    $query = "select * from produto p where p.id = $caixa";
	$consulta = mysqli_query($conexao, $query);
    ?>
</head>
<body>
    <legend align="center">Prencha os dados:</legend> 
 
  <form action="" method="POST" target="_self"> 
     
	<div class="container6"> 
<table id="tabela"> 	
    <tr>
	<td><label for="inputAddress">Nome</label></td>
	
                <?php
				while($result = mysqli_fetch_array($consulta))
            {
              
              $nome = $result['nome'];
              $fornecedor = $result['fornecedor'];
			  $preco = $result['preco'];
			  
			  
			}
				?>
				
				
				<td><input type="text" name="nome" class="txt2" id="inputAddress" placeholder="Nome do produto" value="<?php echo $nome; ?>"></td>
   <tr>
            <td><label for="inputAddress">Fornecedor</label></td>
            <div class="form-group">
            <?php 
            $query2= "select * from fornecedor f where f.id not in (select f.id from fornecedor f inner join produto p on (p.fornecedor = f.id) where p.id = $caixa)";
			$query3= "select f.nome,f.id from fornecedor f inner join produto p on (p.fornecedor = f.id) where p.id = $caixa";
            $consulta2 = mysqli_query($conexao, $query2);
			$consulta3 = mysqli_query($conexao, $query3);
            ?>
           <td> <div class="select"> <select name="fornecedor" id="fornecedor">
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
             </select></div> </td>
           </tr>
		   <tr>
            <td><label for="inputAddress">preco</label></td>
           
              <td><input type="number" name="preco" class="txt2" id="inputAddress" placeholder="666" value="<?php echo $preco; ?>"></td>
            
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