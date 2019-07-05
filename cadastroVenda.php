<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="interface2.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <?php 
    include("conexao.php")
    ?>
</head>
<body>
    <legend align="center">Prencha os dados:</legend> 
 <form action="" method="POST" target="_self"> 
     <div class="container6"> 
<table id="tabela"> 	
    <tr>
           
               <td> <label for="inputAddress">data</label></td>
               <td><input type="date" name="data" class="txt2" id="inputAddress" placeholder="data"></td>
</tr>
<tr>
                <td><label for="inputAddress">Preço</label></td>
                <td><input type="number" name="valor" class="txt2" id="inputAddress" placeholder="R$ 40,00"></td>
</tr>            
  <tr>        
<td><label for="inputAddress">Item</label></td>
           
            <?php 
            $query= "select id from salario";
            $consulta = mysqli_query($conexao, $query);
            ?>
           <td>  <div class="select">  <select name="item" id="item">
            <?php
            while($result = mysqli_fetch_array($consulta))
            {
              $id = $result['id'];
              
              echo "<option value='$id'>$id</option'>";
            }
    
            ?>
            </select></div> </td>
     </tr>
          <tr>
            <td><label for="inputAddress">Caixa</label></td>
            
            <?php 
            $query= "select id from caixa";
            $consulta = mysqli_query($conexao, $query);
            ?>
            <td>  <div class="select">  <select name="caixa" id="caixa">
            <?php
            while($result = mysqli_fetch_array($consulta))
            {
              $id = $result['id'];
              
              echo "<option value='$id'>$id</option'>";
            }
    
            ?>
            </select></div> </td>
     </tr>
          <tr>
            
            <td><label for="inputAddress">Cliente</label></td>
            
            <?php 
            $query= "select id,nome from cliente";
            $consulta = mysqli_query($conexao, $query);
            ?>
            <td>  <div class="select">  <select name="cliente" id="cliente">
            <?php
            while($result = mysqli_fetch_array($consulta))
            {
              $id = $result['id'];
              $nome=$result['nome'];
              
              echo "<option value='$id'>$id - $nome</option'>";
            }
    
            ?>
           </select></div> </td>
     </tr>
        <tr>    
            <td colspan="1"><button type="submit" class="sb" value="Submit" name="submit">Confirmar</button></td>
			<td colspan="2"><a href="index.php" ><input type="button"  class="sb"value="Home" id="botão" ></a></td>
          </tr>  
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
            $sql = "insert into venda (caixa,item,data,valor,cliente) values ('$caixa','$item','$data','$valor','$cliente')";
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