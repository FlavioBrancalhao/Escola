<?php

include 'db.php';

$nome_usuario = $_POST['nome_usuario'];

$senha = md5($_POST['senha']);

$query = "INSERT INTO USUARIOS(usuario, senha) VALUE ('$nome_usuario', '$senha')";

$_SESSION['login']=false;
mysqli_query($conexao, $query);

header('location:index.php?pagina=home');