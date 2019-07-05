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
    $query = "select p.nome,p.id,p.preco,c.quantidade from compra c inner join produto p on (p.id =  c.produto) where c.id = $caixa";
	$consulta = mysqli_query($conexao, $query);	
    ?>
<script type="text/javascript">
function calcular(){
        var_quant = 0;
        var valor = document.getElementById("valor").value;
 
        var quantidade = document.getElementById("quantidade").value;
        var var_quant = valor * quantidade;
 
        document.getElementById("total").value = var_quant;
    }
</script>	
</head>
<body>
    <legend align="center">Prencha os dados:</legend> 
 
  <form action="" method="POST" target="_self"> 
     
	<div class="container6"> 
<table id="tabela"> 	
    <tr> 

            <td><label for="inputAddress">Produto</label></td>
            <div class="form-group">
            <?php
				
            $query2= "select p.id,p.nome,p.preco from produto p where p.id not in (select p2.id from compra c2 inner join produto p2 on (p2.id =  c2.produto) where c2.id = $caixa)";
            $consulta2 = mysqli_query($conexao, $query2);
            ?>
            <td> <div class="select"><select name="produto" id="produto">
            <?php
            while($result = mysqli_fetch_array($consulta))
            {
              $id = $result['id'];
              $nome = $result['nome'];
			  $quantidade = $result['quantidade'];
			  $preco = $result['preco'];
              
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
           <td> <label for="inputAddress">Fornecedor</label></td>
            
            <?php 
            $query3= "select f.id, f.nome from fornecedor f inner join compra p on (p.fornecedor = f.id) where p.id = $caixa";
			$query4 = "select f.id, f.nome from fornecedor f where f.id not in (select f2.id from fornecedor f2 inner join compra p2 on (p2.fornecedor = f2.id) where p2.id = $caixa)"; 
            $consulta3 = mysqli_query($conexao, $query3);
			$consulta4 = mysqli_query($conexao, $query4);
            ?>
         <td> <div class="select">    <select name="fornecedor" id="fornecedor">
            <?php
            while($result = mysqli_fetch_array($consulta3))
            {
              $id = $result['id'];
              $nome = $result['nome'];
              
              echo "<option value='$id'>$nome</option'>";
            }
    
            ?>
			 <?php
            while($result = mysqli_fetch_array($consulta4))
            {
              $id = $result['id'];
              $nome = $result['nome'];
              
              echo "<option value='$id'>$nome</option'>";
            }
				$total  = $quantidade * $preco;
            ?>
           </select></div> </td>
           </tr>
            <tr>
            <td><label for="inputAddress">Quantidade</label></td>
            
               <td> <input type="number" name="qtd" class="txt2" id="quantidade" placeholder="666" value="<?php echo $quantidade;?>" onblur="calcular()"></td>
            </tr>
			<tr>
			<td><label for="inputAddress">Preco Unitario</label></td>
          
                <td><input type="number" name="preco" class="txt2" id="valor" placeholder="666" value="<?php echo $preco;?>" onblur="calcular()"></td>
            <tr>
           <td> <label for="inputAddress">Total</label></td>
            
               <td> <input type="number" name="valor" class="txt2" id="total" placeholder="666" value="<?php echo $total;?>" readonly=“true”></td>
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
            
            $qtd = $_POST['qtd'];
            $valor = $_POST['valor'];
            $produto=$_POST['produto'];
            $fornecedor = $_POST['fornecedor'];

            //echo $funcionario;
			$sql = "update compra c set  quantidade = '$qtd',valor = '$valor',produto = '$produto',fornecedor = '$fornecedor' where c.id = '$caixa'";
            
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