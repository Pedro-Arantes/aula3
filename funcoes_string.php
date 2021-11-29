<?php

//repete strings.
echo str_repeat("u.",10);

//caixa alta.
$nome = "pedro arantes";
echo "<hr>";
//upper case.
echo strtoupper($nome);
echo "<hr>";
//lower case.
echo strtolower("OLA GALERA!!");
echo "<hr>";
//trocar texto.
$texto = "O rei rico de roma";
echo  str_replace("rei","Rato",$texto);
echo "<hr>";
//primeira letra maiuscula.
$func = "juan pablo santos";
echo ucfirst($func);
echo "<hr>";
//tds as primeiras letras maiusculas.
echo ucwords($func);

// usuario trollando
$aluno = "juan PABLO Santos";
echo "<hr>";
echo strtolower(ucwords($aluno)) ;
echo "<hr>";

$nome = "     juan";
// esse comando tira espaço trim