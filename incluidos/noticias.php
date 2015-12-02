<!DOCTYPE html>

<?php
// Sistema de notícias 1.0


// Arquivo: index.php (Exibe as notícias)
?>
<html>

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


<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">
              <?php 
             echo $titulo;
?>
          </h4>
        </div>
        <div class="modal-body">
            <p><?php echo $noticia; ?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>
