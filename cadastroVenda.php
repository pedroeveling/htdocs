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
                <label for="inputAddress">data</label>
                <input type="date" name="data" class="form-control" id="inputAddress" placeholder="data">
            </div>
            <div class="form-group">
                <label for="inputAddress"></label>
                <input type="number" name="valor" class="form-control" id="inputAddress" placeholder="R$ 40,00">
            </div>
            <div class="form-group">
            <br>
<label for="inputAddress">Item</label>
            <div class="form-group">
            <?php 
            $query= "select id from salario";
            $consulta = mysqli_query($conexao, $query);
            ?>
            <select name="item" id="item">
            <?php
            while($result = mysqli_fetch_array($consulta))
            {
              $id = $result['id'];
              
              echo "<option value='$id'>$id</option'>";
            }
    
            ?>
            </select>
            <br>
            <label for="inputAddress">Caixa</label>
            <div class="form-group">
            <?php 
            $query= "select id from caixa";
            $consulta = mysqli_query($conexao, $query);
            ?>
            <select name="caixa" id="caixa">
            <?php
            while($result = mysqli_fetch_array($consulta))
            {
              $id = $result['id'];
              
              echo "<option value='$id'>$id</option'>";
            }
    
            ?>
            </select>

            </div>
            
            <label for="inputAddress">Cliente</label>
            <div class="form-group">
            <?php 
            $query= "select id,nome from cliente";
            $consulta = mysqli_query($conexao, $query);
            ?>
            <select name="cliente" id="cliente">
            <?php
            while($result = mysqli_fetch_array($consulta))
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