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
   
 <form action="deletarValor.php" method="POST" > 
    <legend>Deletar Valores</legend>  
    <br>
            <label for="inputAddress">Escolha a tabela</label>
            <div class="form-group">
            <?php 
            $query= "show tables";
            $consulta = mysqli_query($conexao, $query);
            ?>
            <select name="tabela" id="tabela">
            <?php
            while($result = mysqli_fetch_array($consulta))
            {
              $id = $result['Tables_in_gsp2'];
              
              echo "<option value='$id'>$id</option'>";
            }
    
            ?>
</select>
            </div>
            <button type="submit" class="btn btn-primary" value="Submit" name="submit">Confirmar</button>
            
</form>
</body>
</html>