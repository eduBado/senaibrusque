<?php
// Sistema de notícias 1.0



// Arquivo: salvar_noticias.php (Salva as notícias na dB)

// Checa se o usuário esta logado no sistema
if (isset($_COOKIE['logado'])) {
 $logado = $_COOKIE['logado'];
}
else {
 header("Location:admin.php");
 exit();
}

include("configuracoes.php");

session_start();
$titulo = $_POST['titulo'];
$_SESSION['titulo'] = $titulo;
$noticia = $_POST['noticia'];
$data = date("Y-m-d");
$hora = date("H:i:s");

if ($titulo != "" && $noticia != "") {

mysql_connect($mysql['host'],$mysql['usuario'],$mysql['senha']);
mysql_select_db($mysql['database']);
$sql = "INSERT INTO noticias (titulo, noticia, data, hora) VALUES ('$titulo', '$noticia', '$data', '$hora')";
//echo $sql; die;

mysql_query($sql);
header("Location:adicionar_noticias.php?msg=Noticia+adicionada+com+sucesso");
}
else {
 header("Location:adicionar_noticias.php");
 exit();
}
