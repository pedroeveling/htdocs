
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
</head>
<body>
    <title>Trabalho de BD</title>
    <div class="main">
    <img src="logo.png" class="img" alt="some text" width=300 height=300>
    <h1> Cadastro </h1>
            <div class="class1">    

                        <li>
                <ul><a href="cadastroEstoque.php"> Cadastrar Estoque</a>   </ul> 
                <ul><a href="cadastroEndereco.php"> Cadastrar Endereco </a></ul>
                <ul><a href="cadastroCaixa.php"> Cadastrar Caixa </a></ul>
                <ul><a href="cadastroCargo.php"> Cadastrar Cargo </a></ul>
                <ul><a href="cadastroCliente.php"> Cadastrar Cliente </a>   </ul>
                <ul><a href="cadastroFornecedor.php"> Cadastrar Fornecedor </a> </ul>  
                <ul><a href="cadastroProduto.php"> Cadastrar Produto </a> </ul> 
                <ul><a href="cadastroCompra.php"> Cadastrar compra </a>  </ul> 
                </li>
            </div>
            <div class="class2">
                <li class="li2">
                    
                <ul><a href="cadastroFuncionario.php"> Cadastrar Funcionario</a>   </ul> 
                <ul><a href="cadastroPromocao.php"> Cadastrar Promoção</a>   </ul> 
                <ul><a href="cadastroSalario.php"> Cadastrar Salario</a>   </ul>  
                <ul><a href="cadastroSetor.php"> Cadastrar Setor</a>   </ul>  
                <ul><a href="cadastroTelefone.php"> Cadastrar Telefone</a>   </ul>
                <ul><a href="cadastroItem.php"> Cadastrar Item</a>   </ul>      
                <ul><a href="cadastroVenda.php"> Cadastrar Venda</a>   </ul>
                <br>
                <li>
            </div>
        
    
                <div class="class1" name= "editar">
                    <h1>Editar dados</h1>
                            <li> 
                                <ul><a href="Editar_dados.php"> Editar Dados</a></ul>
                            </li>
               </div>

                <div class="class1" name="Deletar dados">
                    <h1>Deletar Dados</h1>
                            <li> 
                                <ul><a href="deletar.php">Deletar</ul>
                            </li>
               </div>
               <div class="class1" name="Deletar dados">
                    <h1>Buscar Dados</h1>
                            <li> 
                                <ul><a href="Buscas.php">Buscar</ul>
                            </li>
               </div>
    </div>
</body>
</html>