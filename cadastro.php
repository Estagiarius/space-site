<?php

//String para conexão do banco de dados
include "conexao.php";


    //Informações de Login e Senha vindas do formulário de Cadastro
    $user=$_POST["txtUsernameCad"];
    $email=$_POST["txtEmailCad"];
    $pass=$_POST["txtPasswordCad"];

    //String de cadastro
    $comando= "Insert into jogador(USERNAME_JOGADOR,SENHA_JOGADOR,EMAIL_JOGADOR) values ('$user', '$pass', '$email')";

    $resulta = mysqli_query($con,$comando);
   
    //Confirmação de cadastro
    if ($resulta!=0) {
        header('Location: redirecionamento.php');
    }
    else
        echo "<script> alert('erro de inclusão');</script>";


$close = mysqli_close($con);

?>

<!-- Redirecionamento para página de cadastro -->