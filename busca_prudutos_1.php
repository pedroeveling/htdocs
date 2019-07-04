<?php
	  // $variavel recebe a area enviado por metodo post de index.php
	  $variavel = $_POST["param1"];

      //conecta no servidor e recebe como resposta a lista de areas xml
	  include("conexao.php");
      //$query= "select * from $variavel s inner join funcionario f on (s.coordenador = f.id) where f.cargo = 1";
	   
	   $query= "select * from $variavel";
       $consulta = mysqli_query($conexao, $query);
	   $r_final= "<b> Produtos: </b>";
       $r_final.= "<select id=";
       $r_final.="'setores' ";
       // chama e envia o latitude e longitude selecionado para a  função Dados2
       $r_final.="onchange='Dados4(this.value)'>";
       $r_final.="<option value='Escolha um cliente'> Escolha um dos produtos para acessar mais informações</option>";
        
	   while($result = mysqli_fetch_array($consulta))
		{	
			$id = $result['id'];
			$descricao = $result['nome'];
			$r_final.= "<option value='$id'>$descricao</option'>";
		}
		
		$r_final.="</select>";
       
 	    echo $r_final;
?>