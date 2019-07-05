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
 <div class="container6"> 
 
 <form action="" method="POST" target="_self"> 
    <div class="container6"> 
<table id="tabela"> 	
    <tr>
         
  
            
               <td> <label for="inputAddress">Nome</label></td>
               <td> <input type="text" name="nome" class="txt2" id="inputAddress" placeholder="Fulado De Tals"></td>
           </tr>
<tr>		   
                <td><label for="inputAddress">CPF</label></td>
               <td> <input type="number" name="cpf" class="txt2" id="inputAddress" placeholder="1111111111"></td>
      </tr> 
 <tr>	  
           <td colspan="1"> <button type="submit" class="sb" value="Submit" name="submit">Confirmar</button></td>
			<td colspan="2"><a href="index.php" ><input type="button"  class="sb" value="Home" id="botão" ></a></td>
			 
</tr>			
  </table>          
</form>  
</div>
     <?php
        /* Ligação com Banco de Dados */
        if(isset($_POST["submit"]))  // AQUI RECEBE OS DADOS DO FORMULARIO E REPASSA PARA AS VARIAVEIS
        {
            include_once("conexao.php");/* INCLUI O CODIGO DE CONEXAO */
            
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
            //echo $funcionario;
			
            $sql = "insert into cliente (nome,cpf) values ('$nome','$cpf')";
            //echo $sql;
            $salvar = mysqli_query($conexao,$sql);/* Escreve os dados no banco - RETORNA ERRO SE DER OU SUCESSO*/
            
              
                //header('Location: index.php');
                
            
        }
        ?>
</body>
</html>