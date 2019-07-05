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
				
        
				 // chama a pagina locais1.php e informa o metodo de envio da variavel 
                ajax.open("POST", "editar_caixa_1.php", true);
                  // recebe a area selecionada pelo usuarioa
                var params = "param1="+valor;
                 // envia a variavel params para locais1.php
                 
                //alert(params);
                ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                ajax.setRequestHeader("Content-length", params.length);
                ajax.setRequestHeader("Connection", "close");
                 
                ajax.onreadystatechange = function(){
                    if(ajax.readyState == 4  ){       
                        document.getElementById("setores").innerHTML=ajax.responseText;
             
                    } 
                }
                 
                ajax.send(params);
            	
					
				}
				//fim caixa
				
				if(valor == "cargo")
				{
				
        
				 // chama a pagina locais1.php e informa o metodo de envio da variavel 
                ajax.open("POST", "editar_cargo_1.php", true);
                  // recebe a area selecionada pelo usuarioa
                var params = "param1="+valor;
                 // envia a variavel params para locais1.php
                 
                //alert(params);
                ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                ajax.setRequestHeader("Content-length", params.length);
                ajax.setRequestHeader("Connection", "close");
                 
                ajax.onreadystatechange = function(){
                    if(ajax.readyState == 4  ){       
                        document.getElementById("setores").innerHTML=ajax.responseText;
             
                    } 
                }
                 
                ajax.send(params);
            	
					
				}
			
			if(valor == "cliente")
				{
				
        
				 // chama a pagina locais1.php e informa o metodo de envio da variavel 
                ajax.open("POST", "editar_cliente_1.php", true);
                  // recebe a area selecionada pelo usuarioa
                var params = "param1="+valor;
                 // envia a variavel params para locais1.php
                 
                //alert(params);
                ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                ajax.setRequestHeader("Content-length", params.length);
                ajax.setRequestHeader("Connection", "close");
                 
                ajax.onreadystatechange = function(){
                    if(ajax.readyState == 4  ){       
                        document.getElementById("setores").innerHTML=ajax.responseText;
             
                    } 
                }
                 
                ajax.send(params);
            	
					
				}

				//fornecedor
			if(valor == "fornecedor")
				{
				
        
				 // chama a pagina locais1.php e informa o metodo de envio da variavel 
                ajax.open("POST", "editar_fornecedor_1.php", true);
                  // recebe a area selecionada pelo usuarioa
                var params = "param1="+valor;
                 // envia a variavel params para locais1.php
                 
                //alert(params);
                ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                ajax.setRequestHeader("Content-length", params.length);
                ajax.setRequestHeader("Connection", "close");
                 
                ajax.onreadystatechange = function(){
                    if(ajax.readyState == 4  ){       
                        document.getElementById("setores").innerHTML=ajax.responseText;
             
                    } 
                }
                 
                ajax.send(params);
            	
					
				}	
				//fim fornecedor
				//produto
				if(valor == "produto")
				{
				
        
				 // chama a pagina locais1.php e informa o metodo de envio da variavel 
                ajax.open("POST", "editar_produto_1.php", true);
                  // recebe a area selecionada pelo usuarioa
                var params = "param1="+valor;
                 // envia a variavel params para locais1.php
                 
                //alert(params);
                ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                ajax.setRequestHeader("Content-length", params.length);
                ajax.setRequestHeader("Connection", "close");
                 
                ajax.onreadystatechange = function(){
                    if(ajax.readyState == 4  ){       
                        document.getElementById("setores").innerHTML=ajax.responseText;
             
                    } 
                }
                 
                ajax.send(params);
            	
					
				}	
				//fim produto
				//compra
				if(valor == "compra")
				{
				
        
				 // chama a pagina locais1.php e informa o metodo de envio da variavel 
                ajax.open("POST", "editar_compra_1.php", true);
                  // recebe a area selecionada pelo usuarioa
                var params = "param1="+valor;
                 // envia a variavel params para locais1.php
                 
                //alert(params);
                ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                ajax.setRequestHeader("Content-length", params.length);
                ajax.setRequestHeader("Connection", "close");
                 
                ajax.onreadystatechange = function(){
                    if(ajax.readyState == 4  ){       
                        document.getElementById("setores").innerHTML=ajax.responseText;
             
                    } 
                }
                 
                ajax.send(params);
            	
					
				}	
					//fim compra
					//estoque
				if(valor == "estoque")
				{
				
        
				 // chama a pagina locais1.php e informa o metodo de envio da variavel 
                ajax.open("POST", "editar_estoque_1.php", true);
                  // recebe a area selecionada pelo usuarioa
                var params = "param1="+valor;
                 // envia a variavel params para locais1.php
                 
                //alert(params);
                ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                ajax.setRequestHeader("Content-length", params.length);
                ajax.setRequestHeader("Connection", "close");
                 
                ajax.onreadystatechange = function(){
                    if(ajax.readyState == 4  ){       
                        document.getElementById("setores").innerHTML=ajax.responseText;
             
                    } 
                }
                 
                ajax.send(params);
            	
					
				}	
					//fim estoque
				//funcionario
			if(valor == "funcionario")
				{
				
        
				 // chama a pagina locais1.php e informa o metodo de envio da variavel 
                ajax.open("POST", "editar_funcionario_1.php", true);
                  // recebe a area selecionada pelo usuarioa
                var params = "param1="+valor;
                 // envia a variavel params para locais1.php
                 
                //alert(params);
                ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                ajax.setRequestHeader("Content-length", params.length);
                ajax.setRequestHeader("Connection", "close");
                 
                ajax.onreadystatechange = function(){
                    if(ajax.readyState == 4  ){       
                        document.getElementById("setores").innerHTML=ajax.responseText;
             
                    } 
                }
                 
                ajax.send(params);
            	
					
				}						
				//fim funcionario
					//Promocao
			if(valor == "promocao")
				{
				
        
				 // chama a pagina locais1.php e informa o metodo de envio da variavel 
                ajax.open("POST", "editar_promocao_1.php", true);
                  // recebe a area selecionada pelo usuarioa
                var params = "param1="+valor;
                 // envia a variavel params para locais1.php
                 
                //alert(params);
                ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                ajax.setRequestHeader("Content-length", params.length);
                ajax.setRequestHeader("Connection", "close");
                 
                ajax.onreadystatechange = function(){
                    if(ajax.readyState == 4  ){       
                        document.getElementById("setores").innerHTML=ajax.responseText;
             
                    } 
                }
                 
                ajax.send(params);
            	
					
				}						
				//fim promocao	
				//salario
			if(valor == "salario")
				{
				
        
				 // chama a pagina locais1.php e informa o metodo de envio da variavel 
                ajax.open("POST", "editar_salario_1.php", true);
                  // recebe a area selecionada pelo usuarioa
                var params = "param1="+valor;
                 // envia a variavel params para locais1.php
                 
                //alert(params);
                ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                ajax.setRequestHeader("Content-length", params.length);
                ajax.setRequestHeader("Connection", "close");
                 
                ajax.onreadystatechange = function(){
                    if(ajax.readyState == 4  ){       
                        document.getElementById("setores").innerHTML=ajax.responseText;
             
                    } 
                }
                 
                ajax.send(params);
            	
					
				}						
				//fim salario
					//setor
			if(valor == "setor")
				{
				
        
				 // chama a pagina locais1.php e informa o metodo de envio da variavel 
                ajax.open("POST", "editar_setor_1.php", true);
                  // recebe a area selecionada pelo usuarioa
                var params = "param1="+valor;
                 // envia a variavel params para locais1.php
                 
                //alert(params);
                ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                ajax.setRequestHeader("Content-length", params.length);
                ajax.setRequestHeader("Connection", "close");
                 
                ajax.onreadystatechange = function(){
                    if(ajax.readyState == 4  ){       
                        document.getElementById("setores").innerHTML=ajax.responseText;
             
                    } 
                }
                 
                ajax.send(params);
            	
					
				}				
			
			//fim setor
				//telefone
			if(valor == "telefone")
				{
				
        
				 // chama a pagina locais1.php e informa o metodo de envio da variavel 
                ajax.open("POST", "editar_telefone_1.php", true);
                  // recebe a area selecionada pelo usuarioa
                var params = "param1="+valor;
                 // envia a variavel params para locais1.php
                 
                //alert(params);
                ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                ajax.setRequestHeader("Content-length", params.length);
                ajax.setRequestHeader("Connection", "close");
                 
                ajax.onreadystatechange = function(){
                    if(ajax.readyState == 4  ){       
                        document.getElementById("setores").innerHTML=ajax.responseText;
             
                    } 
                }
                 
                ajax.send(params);
            	
					
				}				
			
			//fim telefone
			//item
			if(valor == "item")
				{
				
        
				 // chama a pagina locais1.php e informa o metodo de envio da variavel 
                ajax.open("POST", "editar_item_1.php", true);
                  // recebe a area selecionada pelo usuarioa
                var params = "param1="+valor;
                 // envia a variavel params para locais1.php
                 
                //alert(params);
                ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                ajax.setRequestHeader("Content-length", params.length);
                ajax.setRequestHeader("Connection", "close");
                 
                ajax.onreadystatechange = function(){
                    if(ajax.readyState == 4  ){       
                        document.getElementById("setores").innerHTML=ajax.responseText;
             
                    } 
                }
                 
                ajax.send(params);
            	
					
				}				
			
			//fim item
			
			//venda
			if(valor == "venda")
				{
				
        
				 // chama a pagina locais1.php e informa o metodo de envio da variavel 
                ajax.open("POST", "editar_venda_1.php", true);
                  // recebe a area selecionada pelo usuarioa
                var params = "param1="+valor;
                 // envia a variavel params para locais1.php
                 
                //alert(params);
                ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                ajax.setRequestHeader("Content-length", params.length);
                ajax.setRequestHeader("Connection", "close");
                 
                ajax.onreadystatechange = function(){
                    if(ajax.readyState == 4  ){       
                        document.getElementById("setores").innerHTML=ajax.responseText;
             
                    } 
                }
                 
                ajax.send(params);
            	
					
				}				
			
			//fim venda
			//endereco
			if(valor == "endereco")
				{
				
        
				 // chama a pagina locais1.php e informa o metodo de envio da variavel 
                ajax.open("POST", "editar_endereco_1.php", true);
                  // recebe a area selecionada pelo usuarioa
                var params = "param1="+valor;
                 // envia a variavel params para locais1.php
                 
                //alert(params);
                ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                ajax.setRequestHeader("Content-length", params.length);
                ajax.setRequestHeader("Connection", "close");
                 
                ajax.onreadystatechange = function(){
                    if(ajax.readyState == 4  ){       
                        document.getElementById("setores").innerHTML=ajax.responseText;
             
                    } 
                }
                 
                ajax.send(params);
            	
					
				}				
			
			//fim endereco
			}

				
		
				
}

function Dados2(valor){
					
					location.href="editar_caixa_2.php?caixa="+valor;
      }
function Dados3(valor){
					
					location.href="editar_cargo_2.php?caixa="+valor;
      }
function Dados4(valor){
					
					location.href="editar_cliente_2.php?caixa="+valor;
      }

function Dados5(valor){
					
					location.href="editar_fornecedor_2.php?caixa="+valor;
      }
function Dados6(valor){
					
					location.href="editar_produto_2.php?caixa="+valor;
      }
function Dados7(valor){
					
					location.href="editar_compra_2.php?caixa="+valor;
      }	
function Dados8(valor){
					
					location.href="editar_estoque_2.php?caixa="+valor;
      }	 
function Dados9(valor){
					
					location.href="editar_funcionario_2.php?caixa="+valor;
      }
function Dados10(valor){
					
					location.href="editar_promocao_2.php?caixa="+valor;
      }
function Dados11(valor){
					
					location.href="editar_salario_2.php?caixa="+valor;
      }
function Dados12(valor){
					
					location.href="editar_setor_2.php?caixa="+valor;
      }	
function Dados13(valor){
					
					location.href="editar_telefone_2.php?caixa="+valor;
      }	
function Dados14(valor){
					
					location.href="editar_item_2.php?caixa="+valor;
      }

function Dados15(valor){
					
					location.href="editar_venda_2.php?caixa="+valor;
      }	

function Dados16(valor){
					
					location.href="editar_endereco_2.php?caixa="+valor;
      }	  
</script>	
</head>
<body>
   <form action="" method="POST" target="_self"> 
      <legend align="center">Informar em qual tabela se quer cadastrar:</legend>  
    <div class="container6">
            
            <label for="inputAddress">Escolha a tabela de busca</label>
            <div class="form-group">
			<?php 
            $query= "show tables";
            $consulta = mysqli_query($conexao, $query);
            ?>
              <div class="select">
              <select name="tabela" onChange="Dados(this.value);">
			  <option value="Escolhas uma tabela">Escolhas uma tabela</option>
			  <?php
            while($result = mysqli_fetch_array($consulta))
            {
              $id = $result['Tables_in_gsp2'];
              
              echo "<option value='$id'>$id</option'>";
            }
            ?>  
			</select>
            </div>
			</div>
		
			<div class="select"><div id="setores"></div></div>
			<div class="select"><div id="setores2"></div></div>
			
          </div>  
            
</form>     
</body>
</html>