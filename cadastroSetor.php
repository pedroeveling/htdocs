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

               <td> <label for="inputAddress">Descrição</label></td>
                <td><input type="text" name="descricao" class="form-control" id="inputAddress" placeholder=" descricao do setor"></td>
        </tr>      
         <tr>
          <td>  <label for="inputAddress">Gerente</label></td>
            <div class="form-group">
            <?php 
            $query= "select id,nome from funcionario where cargo='1'";
            $consulta = mysqli_query($conexao, $query);
            ?>
           <td>  <div class="select"> <select name="gerente" id="gerente">
            <?php
            while($result = mysqli_fetch_array($consulta))
            {
              $id = $result['id'];
              $nome = $result['nome'];
              
              echo "<option value='$id'>$id - $nome</option'>";   
            }
    
            ?>
</select></div> </td>
     </tr>
      <tr>  
            <td colspan="1"><button type="submit" class="btn btn-primary" value="Submit" name="submit">Confirmar</button></td>
			<td colspan="2"><a href="index.php" ><input type="button"  class="sb"value="Home" id="botão" ></a></td>
       </tr>     
</form>       <?php
        /* Ligação com Banco de Dados */
        if(isset($_POST["submit"]))  // AQUI RECEBE OS DADOS DO FORMULARIO E REPASSA PARA AS VARIAVEIS
        {
            include_once("conexao.php");/* INCLUI O CODIGO DE CONEXAO */
            
            $gerente = $_POST['gerente'];
            $descricao= $_POST['descricao'];
            //echo $funcionario;
            $sql = "insert into setor (coordenador,descricao) values ('$gerente  ','$descricao')";
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