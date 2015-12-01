<?php
// Sistema de notícias 1.0



// Arquivo: adcionar_noticias.php (Formulário de adção de notícias)

// Checa se o usuário esta logado no sistema
if (isset($_COOKIE['logado'])) {
 $logado = $_COOKIE['logado'];
}
else {
 header("Location:admin.php");
 exit();
}

?>

<html>
<head>
<title>Sistema de Notícias - Adcionar Notícias</title>
</head>
<?php
if (isset($_GET['msg'])) {
 echo $_GET['msg'];
}
?>
<form action="salvar_noticias.php" method="post">
<table width="311" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="95"><div align="right">Titulo::</div></td>
    <td width="216"><label>
      <div align="center">
        <input name="titulo" type="text" id="titulo">
        </div>
    </label></td>
  </tr>
  <tr>
    <td>Not&iacute;cia :: </td>
    <td rowspan="2"><div align="center">
      <label>
        <textarea name="noticia" rows="10" id="noticia"></textarea>
        </label>
    </div></td>
  </tr>
  <tr>
    <td><div align="right"></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <label>
      <input name="adcionar" type="submit" id="adcionar" value="Adicionar Notic&iacute;a">
      </label>
    </div></td>
  </tr>
</table>
</form>
<font color=#B2A978 size=2><strong>Codes BB para o Post:</strong><br>
[n]Texto[/n] - Negrito<br>
[i]Texto[/i] - Itálico<br>
[s]Texto[/s] - Sublinhado<br>
[cor="cor"]Texto[/cor] - Escreve o texto na cor digitada<br>
[url]www.link.com.br[/url] - Link<br>
[url="www.link.com.br"]Nome do Site[/url] - Link<br>
[email]email@provedor.com.br[/email] - Link de email</font>
</html>