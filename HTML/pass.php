<?php

header('Content-Type: text/html');

$control = "ko"; 

$pass = md5(htmlspecialchars(filter_input(INPUT_POST, 'pass')));

$fh = fopen('password.txt','r');    
$line = fgets($fh);                            
fclose($fh);

echo $line;
echo "<hr>";
echo $pass;  
                     
if ($line == $pass){ 
header("Location: http://www.cpf.pt/");

}
else { 
 echo '<script type = "text/javascript">';
 echo "alert('Login Incorrecto')";
 echo "</script>";
 $control = "ok";
 }


if ($control == 'ok') 
{
 echo '<br> <hr>';
 echo '<a href="formulario.html" target="_blank">Pagina de Autenticacao</a>';
}
?>