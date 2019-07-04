<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php 
    include("conexao.php");
    if(isset($_POST['tabela']))
    $tabela= $_POST['tabela'];
    echo '<h1> Deletar da tabela '.$tabela.'</h1>';
    ?>
</head>
<body>
   
 <form action="deletarValor.php" method="POST" target="_self"> 
    <legend>Escolha o dado</legend>  
    <br>
            <label for="inputAddress">Valores</label>
            <div class="form-group">
            <?php 
            $query= "select * from $tabela";
            $consulta = mysqli_query($conexao, $query);
            ?>
            <select name="tabela" id="tabela">
                <?php
               echo "<option value='$tabela'> $tabela</option>";    
                ?>
            </select>
            <select name="id" id="id">
            <?php
            while($result = mysqli_fetch_array($consulta))
            {
              $id = $result['id'];
              if(isset($result['nome']))
              echo "<option value='$id'>$id - ".$result['nome']."</option'>";
              else if(isset($result['produto']))
              echo "<option value='$id'>$id -". $result['produto']."</option'>";
              else if(isset($result['rua']))
              echo "<option value='$id'>$id -". $result['rua']."</option'>";
              else if(isset($result['gerente']))
              echo "<option value='$id'>$id -  gerente: ". $result['gerente']."</option'>";
              else if(isset($result['produto']))
              echo "<option value='$id'>$id -". $result['produto']."</option'>";
              else if(isset($result['validade']))
              echo "<option value='$id'>$id - validade : ". $result['validade']."</option'>";
              else if(isset($result['produto']))
              echo "<option value='$id'>$id -". $result['produto']."</option'>";
              else if(isset($result['valor']))
              echo "<option value='$id'>$id - valor ". $result['valor']."</option'>";
              else if(isset($result['descricao']))
              echo "<option value='$id'>$id - descricao". $result['descricao']."</option'>";
              else if(isset($result['ddd']))
              echo "<option value='$id'>$id -". $result['codigo']." ".$result['valor']."</option'>";
              else if(isset($result['codigo']))
              echo "<option value='$id'>$id -". $result['codigo']." ".$result['valor']."</option'>";
              


            }
    
            ?>
</select>
            </div>
            <button type="submit" class="btn btn-primary" value="Submit2" name="submit2">Confirmar</button>
            
</form>       <?php 
        /* Ligação com Banco de Dados */
        if(isset($_POST["submit2"]))  // AQUI RECEBE OS DADOS DO FORMULARIO E REPASSA PARA AS VARIAVEIS
        {
            include_once("conexao.php");/* INCLUI O CODIGO DE CONEXAO */
            
            $id=$_POST['id'];
            //echo $funcionario;
            $tabela=$_POST['tabela'];
            $sql = "delete from $tabela where id='$id'";
            echo $sql;
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