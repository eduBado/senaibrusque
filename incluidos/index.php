<!DOCTYPE html>
<?php
// Sistema de notícias 1.0


// Arquivo: index.php (Exibe as notícias)
?>
<html>
<head>
<title>Sistema de Notícias</title>
</head>
<?php
include("configuracoes.php");
mysql_connect($mysql['host'],$mysql['usuario'],$mysql['senha']);
mysql_select_db($mysql['database']);
$resultado = mysql_query("SELECT * FROM noticias ORDER BY id DESC LIMIT $noticias[max]");
while ($linha=mysql_fetch_array($resultado)) {
$titulo = $linha['titulo'];
$noticia = $linha['noticia'];
$data = $linha['data'];
$hora = $linha['hora'];
$novadata = substr($data,8,2) . "/" .substr($data,5,2) . "/" . substr($data,0,4);
$novahora = substr($hora,0,2) . ":" .substr($hora,3,2) ."";

$codebb_1 = array();
$codebb_2 = array();

$codebb_1[] = "/\[n]/sU";
$codebb_2[] = '<b>';
$codebb_1[] = "/\[\/n]/sU";
$codebb_2[] = '</b>';
$codebb_1[] = "/\[i]/sU";
$codebb_2[] = '<i>';
$codebb_1[] = "/\[\/i]/sU";
$codebb_2[] = '</i>';
$codebb_1[] = "/\[s]/sU";
$codebb_2[] = '<u>';
$codebb_1[] = "/\[\/s]/sU";
$codebb_2[] = '</u>';
$codebb_1[] = "/\[cor=(['\"]?)([a-zA-Z0-9]*)\\1](.*)\[\/cor\]/sU";
$codebb_2[] = '<font color="\\2">\\3</font>';
$codebb_1[] = "/\[url]([^;<>\*\(\)\"']*)\[\/url\]/sU";
$codebb_2[] = '<a href="//\\1" class="style4b" target="_blank">\\1</a>';
$codebb_1[] = "/\[url=(['\"]?)([^\"\(\)\?\&'<>]*)\\1](.*)\[\/url\]/sU";
$codebb_2[] = '<a href=//\\2 target="_blank" class="style4b">\\3</a>';
$codebb_1[] = "/\[email]([^;<>\*\(\)\"']*)\[\/email\]/sU";
$codebb_2[] = '<a href="mailto:\\1" style="style4b" class="style4b">\\1</a>';

$noticia = preg_replace($codebb_1, $codebb_2, $noticia);

echo '<table width="100%" border="1" cellpadding="1" cellspacing="1">
<tr>
    <td><b>'. $titulo .'</b> ('. $novadata .' - '. $novahora .')</td>
  </tr>
  <tr>
    <td>'. (nl2br($noticia)) .'</td>
  </tr>
</table>';
}
?>
</html>
