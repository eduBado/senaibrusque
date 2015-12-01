<?php
// Sistema de notícias 1.0



// Arquivo: logar.php (Verifica login no sistema)

include("configuracoes.php");

$login = $_POST['login']; // Campo Login do formulário
$senha = $_POST['senha']; // Compo Senha do formulário


if ($login == $admin['login'] && $senha == $admin['senha']) {
 setcookie("logado", 1);
 header("Location:adicionar_noticias.php");
 exit();	
}
else {
 header("Location:admin.php");
 exit();
}

