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
    $query = "select * from salario s  where s.id = $caixa";
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
              $nome = $result['categoria'];
              $valor = $result['valorBruto'];
			  $gratificacao = $result['gratificacao'];
			  $irpf = $result['deducaoIRPF'];
			  }
    
            ?>
    <td><label for="inputAddress">Categoria</label>
               <td> <input type="text" name="categoria" class="txt2" id="inputAddress" placeholder="categoria" value="<?php echo $nome;?>"></td></tr>
             
<tr>
			 <td>  <label for="inputAddress">Valor Bruto</label></td>
             <td>   <input type="number" name="valb" class="txt2" id="inputAddress" placeholder="Nome" value="<?php echo $valor;?>"></td></tr>
            <tr>

			<td>  <label for="inputAddress">Gratificação</label></td>
             <td>   <input type="number" name="gratificacao" class="txt2" id="inputAddress" placeholder="Nome" value="<?php echo $gratificacao;?>"></td></tr>
           <tr>

		   <td>   <label for="inputAddress">DeducaoIRPF</label></td>
             <td>   <input type="number" name="irpf" step=".01"class="txt2" id="inputAddress" placeholder="Nome" value="<?php echo $irpf;?>"></td>
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
            
            $categoria = $_POST['categoria'];
            $valb= $_POST['valb'];
            $irpf = $_POST['irpf'];
            $gratificacao=$_POST['gratificacao'];
            $valor=$valb*(1-$irpf)+$gratificacao;
            //echo $funcionario;
           
             $sql = "update salario s set  categoria = '$categoria',valorBruto = '$valb',gratificacao = '$gratificacao',valor = '$valor' where s.id = '$caixa'";
			
			
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