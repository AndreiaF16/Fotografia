<html>

<head>
	<title> Fotografia </title>
	<link rel="stylesheet" type="text/css" href="css/pag_principal.css">
	
</head>

<body>
<audio controls>
  <source src="Free Radicals.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>

<section class="menu">
	<ul>
		<li><a href="html/comosurgiu.html"> Como Surgiu a Fotografia </a> </li> 
		<li><a href="html/fotcolorida.html"> Fotografia Colorida </a> </li> 
		<li><a href="html/pretoebranco.html"> Fotografia a Preto e Branco </a> </li> 
		<li><a href="html/fotodigital.html"> Fotografia Digital </a> </li>
		<li><a href="html/tiposfoto.html"> Tipos de Fotografia </a> </li> 
		<li><a href="html/fototodos.html"> Fotografia Para Todos </a> </li>
		<li><a href="html/3D.html"> Fotografia em 3D </a> </li>
		<li><a href="html/galeria.php">  Galeria </a> </li> 
		<li><a href="html/contactos.html"> Contactos </a> </li> 
		<li><a href="html/formulario.html"> Formul&aacuterio </a> </li>
	</ul>
</section>
<br>
<br>
<br>
<br>

<span style="color: rgb(0, 190);"><marquee behavior=scroll> BEM VINDO!!</marquee></span>
<section class="a">
	<p class="p1"> "Fotografar, &eacute colocar na mesma linha, <br> a cabe&ccedila, o olho e o cora&ccedil&atildeo." <br> Henri Cartier-Bresson </p> <br> <br>
	<p class="p2">"A fotografia &eacute uma forma de fic&ccedil&atildeo. <br> &Eacute ao mesmo tempo um registo da realidade e um auto-retrato, <br> porque s&oacute o fot&oacutegrafo v&ecirc aquilo daquela maneira." <br> G&eacuterard Castello Lopes </p>
</section>
<br>
<br>
<hr>
<?php
echo "Hoje &eacute " . date("Y/m/d") . "<br>";
echo "Hoje &eacute " . date("l");
?>
<br>
<hr>

<?php

session_start();

header('Content-Type: text/html; charset=utf-8');


echo 'Faz refresh consecutivo &agrave p&aacutegina para verificar a atualiza&ccedil&atildeo dos hits';

echo '<br> <hr>';

if(isset($_SESSION['views']))
{
 
 echo ("Ol&aacute " . $_SESSION['user']);
 
 echo (" J&aacute atualizaste a p&aacutegina " . $_SESSION['views']);
 
 echo (" vezes");
 
 $_SESSION['views']=$_SESSION['views']+1;
}

else
{
 
 $_SESSION['views']=1;
 
 echo "Visitas = " . $_SESSION ['views'];
 
 echo ("<br>");
 
 $_SESSION['user']="Andreia"; 

 echo $_SESSION['user'];
 }



echo '<hr>' ;

echo ' <form action="php/close.php">';

echo ' <input type="submit" value="Fechar Sessao" />';

echo '</form>';
$expire=time()+60*60*24*30; 
setcookie("user", "Andreia Fernandes", $expire);

setcookie("data", "04-04-2015", $expire);

setcookie("cor_favorita", "azul claro", $expire);

echo $_COOKIE["user"]; echo '<br>';
echo $_COOKIE['data']; echo '<br>';
echo $_COOKIE['cor_favorita']; echo '<hr>';

print_r($_COOKIE); echo '<hr>';

if ($_COOKIE['cor_favorita'] == "azul claro") {
echo ' <body style="background-color:#87CEEB">';
echo '</body>';
echo 'A cor da tua formata&ccedil&atildeo de fundo &eacute: azul claro';
}
else {
echo 'A tua cor escolhida n&atildeo &eacute azul claro';
}

function inverte($x) {
 if (!$x) {
 throw new Exception('Divis&atildeo por zero');
 }
 else {
 return 1/$x;
 }
}

try
{
 echo inverte(10) . "\n";
 echo inverte(0) . "\n"; 
} catch (Exception $e)
{
 echo '<hr>';
 echo "Exce&ccedil&atildeo tratada: ", $e->getMessage(), "\n";
 }


echo '<hr>';
echo 'Assim o programa continua a sua execu&ccedil&atildeo....';
echo '<br>';
echo 'E n&atildeo fica bloqueado...'
?>
</body>

</html>