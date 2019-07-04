<!DOCTYPE html>
<html>
<head>
	
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
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
             
         //SETOR    
            if(ajax){
				if(valor == "setor")
				{
				
        
				 // chama a pagina locais1.php e informa o metodo de envio da variavel 
                ajax.open("POST", "busca_setores_1.php", true);
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
			//FIM SETOR 
			//CARGO
				if(valor == "cargo")
				{
				
			
				 // chama a pagina locais1.php e informa o metodo de envio da variavel 
                ajax.open("POST", "busca_cargos_1.php", true);
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
				//FIM CARGO
				//Fornecedores
				
				if(valor == "fornecedor")
				{
				
				
				
				 // chama a pagina locais1.php e informa o metodo de envio da variavel 
                ajax.open("POST", "busca_fornecedores_1.php", true);
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
				// fim Fornecedores
			   // cliente 
			if(valor == "cliente")
				{
				
				
				
				 // chama a pagina locais1.php e informa o metodo de envio da variavel 
                ajax.open("POST", "busca_clientes_1.php", true);
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
	           		
			//fim cliente
			//produto
			
			if(valor == "produto")
				{
				
				
				
				 // chama a pagina locais1.php e informa o metodo de envio da variavel 
                ajax.open("POST", "busca_prudutos_1.php", true);
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
			//promocao
			if(valor == "promocao")
				{
				
				
				
				 // chama a pagina locais1.php e informa o metodo de envio da variavel 
                ajax.open("POST", "busca_promocao_1.php", true);
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
			
			
            }
             
        }
		
	function Dados2(valor){
             
                  // chama a pagina locais1.php e informa o metodo de envio da variavel 
                ajax.open("POST", "busca_setores_2.php", true);
                  // recebe a area selecionada pelo usuarioa
                var params = "param1="+valor;
                 // envia a variavel params para locais1.php
                 
                //alert(params);
                ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                ajax.setRequestHeader("Content-length", params.length);
                ajax.setRequestHeader("Connection", "close");
                 
                ajax.onreadystatechange = function(){
                    if(ajax.readyState == 4  ){       
                        document.getElementById("setores2").innerHTML=ajax.responseText;
             
                    } 
                }
                 
                ajax.send(params);
            
             
        }	
	function Dados3(valor){
             
                  // chama a pagina locais1.php e informa o metodo de envio da variavel 
                ajax.open("POST", "busca_clientes_2.php", true);
                  // recebe a area selecionada pelo usuarioa
                var params = "param1="+valor;
                 // envia a variavel params para locais1.php
                 
                //alert(params);
                ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                ajax.setRequestHeader("Content-length", params.length);
                ajax.setRequestHeader("Connection", "close");
                 
                ajax.onreadystatechange = function(){
                    if(ajax.readyState == 4  ){       
                        document.getElementById("setores2").innerHTML=ajax.responseText;
             
                    } 
                }
                 
                ajax.send(params);
            
             
        }		
	function Dados4(valor){
             
                  // chama a pagina locais1.php e informa o metodo de envio da variavel 
                ajax.open("POST", "busca_prudutos_2.php", true);
                  // recebe a area selecionada pelo usuarioa
                var params = "param1="+valor;
                 // envia a variavel params para locais1.php
                 
                //alert(params);
                ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                ajax.setRequestHeader("Content-length", params.length);
                ajax.setRequestHeader("Connection", "close");
                 
                ajax.onreadystatechange = function(){
                    if(ajax.readyState == 4  ){       
                        document.getElementById("setores2").innerHTML=ajax.responseText;
             
                    } 
                }
                 
                ajax.send(params);
            
             
        }
	function Dados5(valor){
             
                  // chama a pagina locais1.php e informa o metodo de envio da variavel 
                ajax.open("POST", "busca_promocao_2.php", true);
                  // recebe a area selecionada pelo usuarioa
                var params = "param1="+valor;
                 // envia a variavel params para locais1.php
                 
                //alert(params);
                ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                ajax.setRequestHeader("Content-length", params.length);
                ajax.setRequestHeader("Connection", "close");
                 
                ajax.onreadystatechange = function(){
                    if(ajax.readyState == 4  ){       
                        document.getElementById("setores2").innerHTML=ajax.responseText;
             
                    } 
                }
                 
                ajax.send(params);
            
             
        }	
         
                 
	</script>
    <?php 
    include("conexao.php")
    ?>
</head>


<body>
   
 <form action="" method="POST" target="_self"> 
    <legend>Informar quais dados se quer pesquisar:</legend>  
    <br>
            
            
            <div class="form-group">
              <label for="inputAddress">Escolha a tabela de busca</label>
              <select name="tabela" onChange="Dados(this.value);">
			  <option value="Escolha uma tabela">Escolha uma tabela</option> 
			  <option value="setor">Pesquisar Setor</option> 
			  <option value="cargo">Pesquisar Cargo</option> 
			  <option value="fornecedor">Pesquisar Fornecedores</option>
			  <option value="cliente">Pesquisar Clientes</option> 
			  <option value="produto">Pesquisar Produtos</option>
			  <option value="promocao">Pesquisar Promoções</option>
			</select>
            </div>
			<div id="setores"></div>
			<div id="setores2"></div>
			
            
            
</form>       
</body>
</html>