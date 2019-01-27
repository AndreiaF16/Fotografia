<?php
header('Content-Type: text/html; charset=utf-8');

$expire=time()+60*60*24*30; 
setcookie("user", "Andreia Fernandes", $expire);

setcookie("data", "12-12-2012", $expire);

setcookie("cor_favorita", "azul", $expire);

echo $_COOKIE["user"]; echo '<br>';
echo $_COOKIE['data']; echo '<br>';
echo $_COOKIE['cor_favorita']; echo '<hr>';

print_r($_COOKIE); echo '<hr>';

if ($_COOKIE['cor_favorita'] == "azul") {
echo ' <body style="background-color:#306EFF">';
echo '</body>';
echo 'A cor da tua formatação de fundo é: Azul';
}
else {
echo 'A tua cor escolhida não é azul';
}
