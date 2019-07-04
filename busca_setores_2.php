<?php
	  // $variavel recebe a area enviado por metodo post de index.php
	  $variavel = $_POST["param1"];

      //conecta no servidor e recebe como resposta a lista de areas xml
	  include("conexao.php");
      $query= "select * from funcionario f where f.setor = $variavel";
	  $query2 = "select * from setor s inner join funcionario f on (f.id = s.coordenador) where s.id = $variavel"; 
	   
	   
       $consulta = mysqli_query($conexao, $query);
	   $consulta2 = mysqli_query($conexao, $query2);
	 
	    while($result2 = mysqli_fetch_array($consulta2))
		{
			$coordenador  = $result2['nome'];
			 $r_final = "<b> Trabalhadores do setor selecionadoque possuem como coordenador $coordenador </b>";
			
		}
	    
       $r_final.= "<table id='setores2' border=";
       $r_final.="'1'>";
	   $r_final.= "<tr>";
	   $r_final.= "<td>Nome</td>";
	   $r_final.= "<td>CPF</td>";
	   $r_final.= "<td>Telefone</td>";
	    $r_final.= "<td>Endereço</td>";
	   $r_final.= "</tr>";
	   
       while($result = mysqli_fetch_array($consulta))
		{
			$r_final.= "<tr>";
            $nome  = $result['nome'];
			$cpf = $result['cpf'];
			$telefone = $result['telefone'];
			$endereco = $result['endereco'];
			$r_final.= "<td>$nome</td'>";
			$r_final.= "<td>$cpf</td'>";
			$r_final.= "<td>$telefone</td'>";
			$r_final.= "<td>$endereco</td'>";
		    $r_final.= "</tr>";
		}	   
	  
       $r_final.="</table>";
	   
	   echo $r_final;
?>