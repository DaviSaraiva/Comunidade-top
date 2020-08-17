<?php 


define('HOST', 'localhost');
define('USUARIO', 'u374028211_comunidade');
define('SENHA', ':v28oavH');
define('DB', 'u374028211_comunidadetop');
try
{
    $PDO = new PDO( 'mysql:host=' .HOST . ';dbname=' .DB, USUARIO, SENHA);
}
catch ( PDOException $e )
{
    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
}


?>