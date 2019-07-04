<?php
	  // $variavel recebe a area enviado por metodo post de index.php
	  $variavel = $_POST["param1"];

      //conecta no servidor e recebe como resposta a lista de areas xml
	  include("conexao.php");
      
	  $query = "select * from promocao p inner join produto pr on (p.produto = pr.id) where p.id = $variavel"; 
	   
	   
       $consulta = mysqli_query($conexao, $query);
	  
	 
	   
			
	   $r_final = "<b> Resultado pesquisa </b>";
			
	
	    
       $r_final.= "<table id='setores2' border=";
       $r_final.="'1'>";
	   $r_final.= "<tr>";	   
	   $r_final.= "<td>Inicio</td>";
	   $r_final.= "<td>Fim</td>";
	   $r_final.= "<td>Nome produto</td>";
	   $r_final.= "</tr>";
	   
       while($result = mysqli_fetch_array($consulta))
		{
			$r_final.= "<tr>";
           
			$inicio = $result['inicio'];
			 $fim  = $result['fim'];
			$nome = $result['nome'];
			
			$r_final.= "<td>$inicio</td'>";
			$r_final.= "<td>$fim</td'>";
			$r_final.= "<td>$nome</td'>";			
		    $r_final.= "</tr>";
		}	   
	  
       $r_final.="</table>";
	   
	   echo $r_final;
?>