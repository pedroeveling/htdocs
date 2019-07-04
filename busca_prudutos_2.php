<?php
	  // $variavel recebe a area enviado por metodo post de index.php
	  $variavel = $_POST["param1"];

      //conecta no servidor e recebe como resposta a lista de areas xml
	  include("conexao.php");
      
	  $query = "select * from produto p inner join fornecedor f on (p.fornecedor = f.id) inner join endereco e on (f.endereco = e.id)  where p.id = $variavel"; 
	   
	   
       $consulta = mysqli_query($conexao, $query);
	  
	 
	   
			
	   $r_final = "<b> Resultado pesquisa </b>";
			
	
	    
       $r_final.= "<table id='setores2' border=";
       $r_final.="'1'>";
	   $r_final.= "<tr>";	   
	   $r_final.= "<td>Preço</td>";
	   $r_final.= "<td>Nome Fornecedor</td>";
	   $r_final.= "<td>CNPJ Fornecedor</td>";
	   $r_final.= "<td>Telefone Fornecedor</td>";
        $r_final.= "<td>Rua Fornecedor</td>";
		$r_final.= "<td>Número Fornecedor</td>";
	$r_final.= "<td>Complemento Fornecedor</td>";
$r_final.= "<td>Bairro Fornecedor</td>";
$r_final.= "<td>Cidade Fornecedor</td>";
$r_final.= "<td>UF Fornecedor</td>";
$r_final.= "<td>CEP Fornecedor</td>";	
	   $r_final.= "</tr>";
	   
       while($result = mysqli_fetch_array($consulta))
		{
			$r_final.= "<tr>";
           
			$preco = $result['preco'];
			 $nome  = $result['nome'];
			$cnpj = $result['cnpj'];
			$telefone = $result['telefone'];
			$rua = $result['rua'];
			$numero = $result['numero'];
			$complemento = $result['complemento'];
			$bairro = $result['bairro'];
			$cidade = $result['cidade'];
			$uf = $result['uf'];
			$cep = $result['cep'];
			$r_final.= "<td>$preco</td'>";
			$r_final.= "<td>$nome</td'>";
			$r_final.= "<td>$cnpj</td'>";
			$r_final.= "<td>$telefone</td'>";
			$r_final.= "<td>$rua</td'>";
			$r_final.= "<td>$numero</td'>";
			$r_final.= "<td>$complemento</td'>";
			$r_final.= "<td>$bairro </td'>";
			$r_final.= "<td>$cidade</td'>";
			$r_final.= "<td>$uf</td'>";
			$r_final.= "<td>$cep</td'>";
		    $r_final.= "</tr>";
		}	   
	  
       $r_final.="</table>";
	   
	   echo $r_final;
?>