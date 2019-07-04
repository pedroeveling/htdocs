<?php
	  // $variavel recebe a area enviado por metodo post de index.php
	  $variavel = $_POST["param1"];

      //conecta no servidor e recebe como resposta a lista de areas xml
	  include("conexao.php");
      $query= "select * from $variavel";
	  
	   
	   
       $consulta = mysqli_query($conexao, $query);
	   
	   $r_final = "<b> Informações sobre os cargos</b>";
			
	
	    
       $r_final.= "<table id='setores2' border=";
       $r_final.="'1'>";
	   $r_final.= "<tr>";
	   $r_final.= "<td>Nome</td>";
	   $r_final.= "<td>Horas</td>";
	   $r_final.= "<td>Salario</td>";	   
       while($result = mysqli_fetch_array($consulta))
		{
			$r_final.= "<tr>";
            $nome  = $result['nome'];
			$horas = $result['horas'];
			$salario = $result['salario'];
			$r_final.= "<td>$nome</td'>";
			$r_final.= "<td>$horas</td'>";
			$r_final.= "<td>$salario</td'>";
		    $r_final.= "</tr>";
		}	   
	  
       $r_final.="</table>";
	   
	   echo $r_final;
?>