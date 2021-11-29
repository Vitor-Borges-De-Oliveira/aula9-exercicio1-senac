<?php

require_once('conexao1.php');

$sql = "delete from tblcursos where idcurso=8";

$connect->query($sql);