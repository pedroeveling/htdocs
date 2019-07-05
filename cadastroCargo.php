<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php 
    include("conexao.php")
    ?>
</head>
<body>
   
 <form action="" method="POST" target="_self"> 
    <legend>Cadastro Cargo</legend>  
    <br>

            <div class="form-group">
                <label for="inputAddress">Nome</label>
                <input type="text" name="nome" class="form-control" id="inputAddress" placeholder="Nome">
            </div>
            <div class="form-group">
                <label for="inputAddress">Horas</label>
                <input type="number" name="horas" class="form-control" id="inputAddress" placeholder="40">
            </div>
            <div class="form-group">
            <br>
<label for="inputAddress">Salario</label>
            <div class="form-group">
            <?php 
            $query= "select id,valor from salario";
            $consulta = mysqli_query($conexao, $query);
            ?>
            <select name="salario" id="salario">
            <?php
            while($result = mysqli_fetch_array($consulta))
            {
              $id = $result['id'];
              $nome = $result['valor'];
              
              echo "<option value='$nome'>$id - $nome </option'>";
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
            
            $nome = $_POST['nome'];
            $horas = $_POST['horas'];
            $salario = $_POST['salario'];
            //echo $funcionario;
            $sql = "insert into cargo (nome,horas,salario) values ('$nome','$horas','$salario')";
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