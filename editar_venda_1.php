<?php
	  // $variavel recebe a area enviado por metodo post de index.php
	  $variavel = $_POST["param1"];

      //conecta no servidor e recebe como resposta a lista de areas xml
	  include("conexao.php");
      //$query= "select * from $variavel s inner join funcionario f on (s.coordenador = f.id) where f.cargo = 1";
	   
	   $query= "select v.*,f.nome as nomeFuncionario,cl.nome as nomeCliente from venda v inner join cliente cl on (cl.id = v.cliente) inner join caixa c on (v.caixa = c.id) inner join funcionario f on (c.funcionario = f.id)";
       $consulta = mysqli_query($conexao, $query);
	   $r_final= "<b> Venda: </b>";
       $r_final.= "<select id=";
       $r_final.="'setores' ";
       // chama e envia o latitude e longitude selecionado para a  função Dados2
       $r_final.="onchange='Dados15(this.value)'>";
       $r_final.="<option value='Escolha um cargo'> Escolha os cargos</option>";
        
	   while($result = mysqli_fetch_array($consulta))
		{	
			$id = $result['id'];
			$funcionario = $result['nomeFuncionario'];
			$cliente = $result['nomeCliente'];
			$r_final.= "<option value='$id'>$funcionario vendeu para $cliente</option'>";
		}
		
		$r_final.="</select>";
       
 	    echo $r_final;
?>