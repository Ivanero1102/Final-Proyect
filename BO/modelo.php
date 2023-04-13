<?php
session_start();
include_once('../DAO/operativaOng.php');
include_once('../DAO/operativaPunto.php');
include_once('../DAO/operativaUsuario.php');
$ong = new OperativaOng();
$punto = new OperativaPunto();
$usuario = new OperativaUsuaio();

?>