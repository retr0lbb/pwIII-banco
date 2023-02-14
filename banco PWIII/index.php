<?php

include 'Contato.class.php';

$contato = new Contato();

if($contato){
    echo "<h1> Conectado ao banco de dados </h1>";
}else{
    echo "<h1> Não foi possivel conectar </h1>";
}