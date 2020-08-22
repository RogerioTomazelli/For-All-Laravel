<?php
define('host','localhost');
define('usuario','root');
define('senha','');
define('db','trabalho_integrador');

$conexao = mysqli_connect(host, usuario, senha, db) or die ("Não foi possível conectar.");

?>