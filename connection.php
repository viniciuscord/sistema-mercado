<?php 
$servidor = "localhost";
$porta = "80";
$db = "postgres";
$usuario = "postgres";
$senha = "password"; 
$connection_string = "host={$servidor} port={$porta} dbname={$db} user={$usuario} password={$senha} ";
$conexao = pg_connect($connection_string);     

if(!$conexao) {
    die("Não foi possível se conectar ao banco de dados.");
}




// try{
// $conn = new PDO('pgsql:host=127.0.0.1;port=80;dbname=postgres', 'postgres','admin');
// if($conn) {
// echo "database conectado";
// }
// }catch (PDOException $e){
// // report error message
// echo $e->getMessage();
// }



?>