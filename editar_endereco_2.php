
    <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php 
    include("conexao.php");
    $caixa = $_GET['caixa'];
    $query = "select * from endereco e  where e.id = $caixa";
	$consulta = mysqli_query($conexao, $query);		
    ?>
</head>
<body>
   
 <form action="" method="POST" target="_self">   <------- AQUI é UM FORMULARIO               // USAR COMO MODELO PARA OS OUTROS CADASTROS O CAMPO NAME, TEM QUE SER O MESMO DO $_POST['NOME']
     PARA O PHP RECEBER 
    <legend>Informações Residenciais:</legend>  
            <div class="form-group">
			<?php
            while($result = mysqli_fetch_array($consulta))
            {
              $rua = $result['rua'];
			  $numero = $result['numero'];
              $complemento = $result['complemento'];
			  $bairro = $result['complemento'];
			  $cidade = $result['cidade'];
			  $cep = $result['cep'];
			  
			  }
    
            ?>
                <label for="inputAddress">Rua</label>
                <input type="text" name="rua" class="form-control" id="inputAddress" placeholder="Av. Rio Branco" value="<?php echo $rua;?>">
            </div>   // TIPO , NOME DO PARAMETRO ** VAI ALTERAR SÓ ISSO
            <div class="form-group">
                <label for="inputAddress">Numero</label>
                <input type="text" name="numero" class="form-control" id="inputAddress" placeholder="123" value="<?php echo $numero;?>">
            </div>
            <div class="form-group">
                <label for="inputAddress">Bairro</label>
                <input type="text" name="bairro" class="form-control" id="inputAddress" placeholder="Jamaica" value="<?php echo $bairro;?>">
            </div>
            <div class="form-group">
                <label for="inputAddress2">Complemento</label>
                <input type="text" name="complemento" class="form-control" id="inputAddress2" placeholder="Apartmento, estudio, or andar" value="<?php echo $complemento;?>">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputCity">Cidade</label>
                <input type="text" name="cidade" class="form-control" id="inputCity" placeholder="Cidade" value="<?php echo $cidade;?>">
                </div>
                <div class="form-group col-md-4">
                <label for="inputState">Estado</label>
                <select id="inputState" name="estado" class="form-control">
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
                </select>
                </div>
                <div class="form-group col-md-2">
                <label for="inputZip">CEP</label>
                <input type="text" name="cep" class="form-control" id="cep" onkeypress="mascara(this, '##.###-###')" placeholder="11.111-111" maxlength="10" value="<?php echo $cep;?>">
                </div>
                            <button type="submit" class="btn btn-primary" value="Submit" name="submit">Confirmar</button>
            </div>
</form>       <?php
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
            
            $sql = "update endereco e set rua = '$rua',numero = '$numero',complemento = '$complemento',bairro = '$bairro',cidade = '$cidade',uf = '$estado',cep = '$cep' where e.id = '$caixa'";
		   
		   
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