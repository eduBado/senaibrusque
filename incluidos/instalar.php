<?php

// Sistema de notícias 1.0



// Arquivo: instalar.php (Instalador do sistema)

require("incluidos/configuracoes.php");
mysql_query("CREATE TABLE `noticias`.`noticias` (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`titulo` TEXT NOT NULL ,
`noticia` TEXT NOT NULL ,
`data` DATE NOT NULL ,
`hora` TIME NOT NULL
)");
header("Location:index.php"); 
?>