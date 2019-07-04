<?php
$hostname = "127.0.0.1";;
$user = "root";
$password = "";
$database = "gsp2";
$conexao = mysqli_connect($hostname, $user, $password, $database);/* Estabelece a conexão */
if(!$conexao)
{
    echo "Falha na conexão com o BD!";/* Exibe uma mensagem de erro caso a conexão falhe */
}
?>