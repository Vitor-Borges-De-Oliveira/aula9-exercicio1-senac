<?php

require_once('conexao1.php');

$curso = "java";
$valor = 190.00;
$ch = "120";
$docente = "juan";

$sql = "insert into tblcursos (curso,valor,ch,docente)
        values ('$curso','$valor','$ch','$docente')";

$connect->query($sql);