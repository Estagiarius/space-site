<?php

include "conexao.php";



    $user=$_POST["txtUsernameCad"];
    $email=$_POST["txtEmailCad"];
    $pass=$_POST["txtPasswordCad"];


    $comando= "Insert into jogador(USERNAME_JOGADOR,SENHA_JOGADOR,EMAIL_JOGADOR) values ('$user', '$pass', '$email')";

    $resulta = mysqli_query($con,$comando);
   
    if ($resulta!=0) {
        echo "<script> alert('inclusão ok');</script>";
    }
    else
        echo "<script> alert('erro de inclusão');</script>";


$close = mysqli_close($con);

?>

<a href="redirecionamento.html">Redirecionar</a>