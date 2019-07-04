<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php 
    include("conexao.php");
    $caixa = $_GET['caixa'];
    $query = "select * from venda v  where v.id = $caixa";
	$consulta = mysqli_query($conexao, $query);	
	
    ?>
</head>
<body>
   
 <form action="" method="POST" target="_self"> 
    <legend>Editar venda</legend>  
    <br>

            <div class="form-group">
                <label for="inputAddress">data</label>
				<?php
            while($result = mysqli_fetch_array($consulta))
            {
              $data = $result['data'];
              $valor = $result['valor'];
			  
			  }
    
            ?>
                <input type="date" name="data" class="form-control" id="inputAddress" placeholder="data" value="<?php echo $data;?>">
            </div>
            <div class="form-group">
                <label for="inputAddress">Valor</label>
                <input type="number" name="valor" class="form-control" id="inputAddress" placeholder="R$ 40,00" value="<?php echo $valor;?>">
            </div>
            <div class="form-group">
            <br>
<label for="inputAddress">Item</label>
            <div class="form-group">
            <?php 
            $query2= "select i.id,p.nome from item i inner join produto p on (i.produto = p.id) ";
            $consulta2 = mysqli_query($conexao, $query2);
            ?>
            <select name="item" id="item">
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
            <label for="inputAddress">Caixa</label>
            <div class="form-group">
            <?php 
            $query3= "select c.id,f.nome from caixa c inner join funcionario f on (f.id = c.funcionario)";
            $consulta3 = mysqli_query($conexao, $query3);
            ?>
            <select name="caixa" id="caixa">
            <?php
            while($result = mysqli_fetch_array($consulta3))
            {
              $id = $result['id'];
			  $nome  = $result['nome'];
              
              echo "<option value='$id'>$nome</option'>";
            }
    
            ?>
            </select>

            </div>
            
            <label for="inputAddress">Cliente</label>
            <div class="form-group">
            <?php 
            $query4= "select id,nome from cliente";
            $consulta4 = mysqli_query($conexao, $query4);
            ?>
            <select name="cliente" id="cliente">
            <?php
            while($result = mysqli_fetch_array($consulta4))
            {
              $id = $result['id'];
              $nome=$result['nome'];
              
              echo "<option value='$id'>$id - $nome</option'>";
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
            
            $caixa= $_POST['caixa'];
            $item = $_POST['item'];
            $data = $_POST['data'];
            $valor = $_POST['valor'];
            $cliente=$_POST['cliente'];
            //echo $funcionario;
           echo $caixa;
		   echo " ";
		    echo $item;
			echo " ";
			 echo $data;
			 echo " ";
			  echo $valor;
				echo " ";
			   echo $cliente;
		   
		   
		   
			$sql = "update venda v set data = '$data',valor = '$valor',item = '$item',caixa = '$caixa',cliente = '$cliente' where v.id = '$caixa'";
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