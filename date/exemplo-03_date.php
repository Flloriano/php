<?php

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese"); 

// Trás o dia do mês e o ano
echo strftime("%A %B");

echo "<br>";

// Mostra a primeira letra de cada palavra em maiusculo
echo ucwords(strftime("%A, %d de %B de %G"));

?>