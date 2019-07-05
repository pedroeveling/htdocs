
        <?php
    include("conexao.php");
                //$query = "Select nome,id from cargo";    ---- > COMANDO SQL
                //$consulta=mysqli_query($conexao,$query);  ----> RESULTADO DA CONSULTA *RETORNA VETOR*
               // while ($row = mysqli_fetch_array($consulta)){  --->> CAMINHA NO VETOR
                //echo $row['nome']; --->>>  $row = Coluna  $row['nome da coluna'] <<< RETORNA VALOR DA COLUNA
                //}   NESSE CASO IMPRIMIRIA TODOS OS VALORES DA COLUNA NOME DA TABELA CARGOS.
    ?>
    <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css" />
	<link rel="stylesheet" type="text/css" href="interface2.css">
</head>
<body>

    <title>Trabalho de BD</title>
    <div class="main">
    <img src="logo.png" class="img" alt="some text" width=300 height=300>
	
	
	<form action="Cadastro.php"   method="POST">
    <input type="submit" class="sb2"  value="Cadastro">
	</form>
	<form action="deletar.php"   method="POST">
    <input type="submit" class="sb2"  value="Deletar">
	</form>	
    <form action="Editar_dados.php"   method="POST">
    <input type="submit" class="sb2"  value="Editar">
	</form>
 <form action="Buscas.php"   method="POST">
    <input type="submit" class="sb2"  value="Consulta">
	</form>     
    
					 
               
                      
    </div>
</body>
</html>