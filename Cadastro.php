<!DOCTYPE html>
<html>
<head>
    <?php 
    include("conexao.php")
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="interface2.css">
    
<script language="JavaScript">
function Dados(valor){
             
            // verifica se a aplicação tem suporte ajax
            try {
                    ajax = new ActiveXObject("Microsoft.XMLHTTP");
                } 
                 
            catch(e) {
                         try {
                                     ajax = new ActiveXObject("Msxml2.XMLHTTP");
                             }
            catch(ex) {
                         try {
                                     ajax = new XMLHttpRequest();
                             }
            catch(exc) {
                        alert("Esse browser não tem recursos para uso do Ajax");
                        ajax = null;
                 }
               }
            } 
             
         //caixa    
            if(ajax){
				if(valor == "caixa")
				{				
				location.href="cadastroCaixa.php";
				}
				//fim caixa
				
				if(valor == "cargo")
				{
				  location.href="cadastroCargo.php"; 
				}
			
			if(valor == "cliente")
				{
				
        
				location.href="cadastroCliente.php";  
					
				}

				//fornecedor
			if(valor == "fornecedor")
				{
				  location.href="cadastroFornecedor.php";  
        
					
				}	
				//fim fornecedor
				//produto
				if(valor == "produto")
				{
				
                     location.href="cadastroProduto.php";  
					
				}	
				//fim produto
				//compra
				if(valor == "compra")
				{
				      location.href="cadastroCompra.php";
					
				}	
					//fim compra
					//estoque
				if(valor == "estoque")
				{
				
                        location.href="cadastroEstoque.php";  
					
				}	
					//fim estoque
				//funcionario
			if(valor == "funcionario")
				{
				
					location.href="cadastroFuncionario.php";
				}						
				//fim funcionario
					//Promocao
			if(valor == "promocao")
				{
				
         location.href="cadastroPromocao.php";
					
				}						
				//fim promocao	
				//salario
			if(valor == "salario")
				{
				
        location.href="cadastroSalario.php";
            	
					
				}						
				//fim salario
					//setor
			if(valor == "setor")
				{
				
         location.href="cadastroSetor.php";
					
				}				
			
			//fim setor
				//telefone
			if(valor == "telefone")
				{
				location.href="cadastroTelefone.php"; 
				}				
			
			//fim telefone
			//item
			if(valor == "item")
				{
					location.href="cadastroItem.php";
				}				
			
			//fim item
			
			//venda
			if(valor == "venda")
				{
			location.href="cadastroVenda.php";
				}				
			
			//fim venda
			//endereco
			if(valor == "endereco")
				{
				location.href="cadastroEndereco.php";
				}				
			
			//fim endereco
			}

				
		
				
}

</script>	
</head>
<body>


    <legend align="center">Informar em qual tabela se quer cadastrar:</legend>  
<div class="container6">    
	<?php 
            $query= "show tables";
            $consulta = mysqli_query($conexao, $query);
            ?>
               <div class="select">
              <select name="cidade" onChange="Dados(this.value);" id="slct">
			  <option value="Escolhas uma tabela" name="cidade">Escolhas uma tabela</option>
			  <?php
            while($result = mysqli_fetch_array($consulta))
            {
              $id = $result['Tables_in_gsp2'];
              
              echo "<option value='$id' name='cidade'>$id</option'>";
            }
            ?> 
			
			</select>
			</div>
	</div>
	
	
	
	
            
           
 
   
</body>
</html>