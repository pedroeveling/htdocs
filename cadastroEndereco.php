
    <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="interface2.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
   <legend align="center">Prencha os dados:</legend> 
 <form action="" method="POST" target="_self">
 
 <div class="container6"> 
<table id="tabela"> 	
    <tr>
    
    
                <td><label for="inputAddress">Rua</label></td>
               <td> <input type="text" name="rua" class="txt2" id="inputAddress" placeholder="Av. Rio Branco"></td>
          </tr>
		  <tr>
               <td> <label for="inputAddress">Numero</label></td>
               <td> <input type="text" name="numero" class="txt2" id="inputAddress" placeholder="123"></td>
           </tr>
<tr>		   
              <td>  <label for="inputAddress">Bairro</label></td>
               <td> <input type="text" name="bairro" class="txt2" id="inputAddress" placeholder="Jamaica"></td>
         </tr> 
<tr>		 
              <td>  <label for="inputAddress2">Complemento</label></td>
               <td> <input type="text" name="complemento" class="txt2" id="inputAddress2" placeholder="Apartmento, estudio, or andar"></td>
            
         </tr>  
<tr>		 
               <td> <label for="inputCity">Cidade</label></td>
              <td>  <input type="text" name="cidade" class="txt2" id="inputCity" placeholder="Cidade"></td>
           </tr>
<tr>		   
               <td> <label for="inputState">Estado</label></td>
              <td> <div class="select"> <select id="slct" name="estado" >
                    <option selected>Escolha...</option>
                    <option>AC</option>
                    <option>AL</option>
                    <option>AP</option>
                    <option>AM</option>
                    <option>BA</option>
                    <option>CE</option>
                    <option>DF</option>
                    <option>ES</option>
                    <option>GO</option>
                    <option>MA</option>
                    <option>MT</option>
                    <option>MS</option>
                    <option>MG</option>
                    <option>PA</option>
                    <option>PB</option>
                    <option>PR</option>
                    <option>PE</option>
                    <option>PI</option>
                    <option>RJ</option>
                    <option>RN</option>
                    <option>RS</option>
                    <option>RO</option>
                    <option>RR</option>
                    <option>SC</option>
                    <option>SP</option>
                    <option>SE</option>
                    <option>TO</option>
                </select></div></td>
               
            </tr>
			<tr>		
               <td> <label for="inputZip">CEP</label></td>
              <td>  <input type="text" name="cep" class="txt2" id="cep" onkeypress="mascara(this, '##.###-###')" placeholder="11.111-111" maxlength="10"></td></tr>
              <tr> 
                           <td colspan="2"><button type="submit" class="sb" value="Submit" name="submit">Confirmar</button></td>
							 <td colspan="2"><a href="index.php" ><input type="button"  class="sb"value="Home" id="botão" ></a></td>
            </tr>
			
</table>
	</form>
    </div>       <?php
        /* Ligação com Banco de Dados */
        if(isset($_POST["submit"]))  // AQUI RECEBE OS DADOS DO FORMULARIO E REPASSA PARA AS VARIAVEIS
        {
            include_once("conexao.php");/* INCLUI O CODIGO DE CONEXAO */
            
            $rua = $_POST['rua'];
            $numero = $_POST['numero'];
            $complemento = $_POST['complemento'];
            $bairro = $_POST['bairro'];
            $cidade = $_POST['cidade'];
            $estado = $_POST['estado'];
            $cep = $_POST['cep'];
            $sql = "insert into endereco (rua,numero,complemento,bairro,cidade,uf,cep) values ('$rua','$numero','$complemento','$bairro','$cidade','$estado','$cep')";
           // echo $sql;
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