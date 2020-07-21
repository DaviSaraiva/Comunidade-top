<?php 


define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'comunidadetop');
try
{
    $PDO = new PDO( 'mysql:host=' .HOST . ';dbname=' .DB, USUARIO, SENHA);
}
catch ( PDOException $e )
{
    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
}


?>