<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="interface2.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <?php 
    include("conexao.php");
    ?>
	<script type="text/javascript">
function calcular(){
        var_quant = 0;
        var valor = document.getElementById("valor").value;
 
        var quantidade = document.getElementById("quantidade").value;
        var var_quant = valor * quantidade;
 
        document.getElementById("total").value = var_quant;
    }
	
function Dados(valor)
{
	
	
	var htmlString = "<?php";
	htmlString+= "global $preco;$sql = 'select preco from produto p where p.id ='"+valor+";"; 
    htmlString+= "$consulta = mysqli_query($conexao, $query); ";     
	htmlString+="while($result = mysqli_fetch_array($consulta)){";
	htmlString+= " $preco = $result['nome'];}?>";  
	alert(htmlString);
}	
	
	
</script>	
</head>
<body>
     <legend align="center">Prencha os dados:</legend>
 <form action="" method="POST" target="_self"> 
<div class="container6"> 
<table id="tabela"> 	
    <tr>


           <td> <label for="inputAddress">Produto</label></td>
            <div class="form-group">
            <?php 
            $query= "select * from produto";
            $consulta = mysqli_query($conexao, $query);
            ?>
             <td> <div class="select" onChange="Dados(this.value);"><select name="produto" id="produto">
            <?php
            while($result = mysqli_fetch_array($consulta))
            {
              $id = $result['id'];
              $nome = $result['nome'];
			  
              
              echo "<option value='$id'>$nome</option'>";
            }
    
            ?>
            </select></div> </td></tr>
     
          <tr>
            <td><label for="inputAddress">Quantidade</label></td>
			<?php
			 $query= "select * from produto p ";
            $consulta = mysqli_query($conexao, $query);
            while($result = mysqli_fetch_array($consulta))
            {
              $id = $result['id'];
              $nome = $result['nome'];
			  
              
              echo "<option value='$id'>$nome</option'>";
            }
    
            ?>
         
               <td> <input type="number" name="qtd" class="form-control" id="inputAddress" placeholder="666"></td>
          </tr>
           <tr>

		   <td><label for="inputAddress">Valor</label></td>
        
               <td><input type="number" name="valor" class="form-control" id="inputAddress" placeholder="666" value="<?php echo $preco;?>" onblur="calcular()"></td>
        
			</tr>
      <tr>
            <td colspan="1"><button type="submit" class="btn btn-primary" value="Submit" name="submit">Confirmar</button></td>
			<td colspan="2"><a href="index.php" ><input type="button"  class="sb"value="Home" id="botão" ></a></td>
      </tr>      
</table>
</form>
</div>  
     <?php
        /* Ligação com Banco de Dados */
        if(isset($_POST["submit"]))  // AQUI RECEBE OS DADOS DO FORMULARIO E REPASSA PARA AS VARIAVEIS
        {
            include_once("conexao.php");/* INCLUI O CODIGO DE CONEXAO */
            
            $qtd = $_POST['qtd'];
            $valor = $_POST['valor'];
            $produto=$_POST['produto'];
            $fornecedor = $_POST['fornecedor'];

            //echo $funcionario;
            $sql = "insert into compra (quantidade,valor,produto,fornecedor) values ('$qtd','$valor','$produto','$fornecedor')";

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