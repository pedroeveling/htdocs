<?php
	  // $variavel recebe a area enviado por metodo post de index.php
	  $variavel = $_POST["param1"];

      //conecta no servidor e recebe como resposta a lista de areas xml
	  include("conexao.php");
      
	  $query = "select * from cliente c inner join venda v on (c.id = v.cliente) inner join item i on (v.item = i.id) inner join produto p on (p.id = i.produto) where c.id = $variavel"; 
	   
	   
       $consulta = mysqli_query($conexao, $query);
	  
	 
	   
			
	   $r_final = "<b> Resultado pesquisa </b>";
			
	
	    
       $r_final.= "<table id='setores2' border=";
       $r_final.="'1'>";
	   $r_final.= "<tr>";	   
	   $r_final.= "<td>CPF</td>";
	   $r_final.= "<td>Data</td>";
	   $r_final.= "<td>Valor</td>";
	   $r_final.= "<td>Qunatidade</td>";
        $r_final.= "<td>Produto</td>";	   
	   $r_final.= "</tr>";
	   
       while($result = mysqli_fetch_array($consulta))
		{
			$r_final.= "<tr>";
           
			$cpf = $result['cpf'];
			 $data  = $result['data'];
			$valor = $result['valor'];
			$quantidade = $result['quantidade'];
			$produto = $result['nome'];
			$r_final.= "<td>$cpf</td'>";
			$r_final.= "<td>$data</td'>";
			$r_final.= "<td>$valor</td'>";
			$r_final.= "<td>$quantidade</td'>";
			$r_final.= "<td>$produto</td'>";
		    $r_final.= "</tr>";
		}	   
	  
       $r_final.="</table>";
	   
	   echo $r_final;
?>