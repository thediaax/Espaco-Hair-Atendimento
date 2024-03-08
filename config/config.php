<?php
#Caminhos absolutos
$dirInt="espaco_hair";
define('DIRPAGE', "http://{$_SERVER['HTTP_HOST']}/{$dirInt}");
$bar=(substr($_SERVER['DOCUMENT_ROOT'], -1)=='/')?"":"/";
define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}{$bar}{$dirInt}");

#Banco de dados
define('HOST', 'localhost');
define('DB', 'espacohair_db');
define('USER', 'root');
define('PASS', '');
//$sql = new mysqli('localhost', 'root', '', 'espacohair_db');

#Incluir Arquivos
include(DIRREQ.'/lib/composer/vendor/autoload.php');