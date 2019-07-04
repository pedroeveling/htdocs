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
    <legend>Cadastro Salario</legend>
    <label for="inputAddress">categoria</label>
                <input type="text" name="categoria" class="form-control" id="inputAddress" placeholder="categoria">
                <label for="inputAddress">Valor Bruto</label>
                <input type="number" name="valb" class="form-control" id="inputAddress" placeholder="Nome">
                <label for="inputAddress">Gratificação</label>
                <input type="number" name="gratificacao" class="form-control" id="inputAddress" placeholder="Nome">
                <label for="inputAddress">DeducaoIRPF</label>
                <input type="number" name="irpf" step=".01"class="form-control" id="inputAddress" placeholder="Nome">
              
    <br>
<br>



            <button type="submit" class="btn btn-primary" value="Submit" name="submit">Confirmar</button>
            
</form>       <?php
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
            $sql = "insert into salario (categoria,valorBruto,gratificacao,deducaoIRPF,valor) values ('$categoria','$valb','$gratificacao','$irpf','$valor')";
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