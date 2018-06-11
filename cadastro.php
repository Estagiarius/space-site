<?php

//String para conexão do BD
include "conexao.php";


    if(isset($_POST['btnCadastro'])){

        //Informações de Login e Senha do Formulário de Cadastro
        $user=$_POST["txtUsernameCad"];
        $email=$_POST["txtEmailCad"];
        $pass=$_POST["txtPasswordCad"];
        $confpass=$_POST["txtConfPasswordCad"];

        if($user != "" && $email != "" && $pass != "" && $confpass != ""){   
            //Confirmação das Senhas Digitadas
            if($pass != $confpass){
                echo '<script type="text/javascript">
            alert("As senhas não conferem!");
            location="login.php";
            </script>';
            }
            else{
                //Acesso do Cadastro ao BD
                $comando= "Insert into jogador(USERNAME_JOGADOR,SENHA_JOGADOR,EMAIL_JOGADOR) values ('$user', '$pass', '$email')";
                $resulta = mysqli_query($con,$comando);

                //Confirmação do Cadastro no BD
                if 
                    ($resulta!=0) header('Location: redirecionamento.php');
                else
                    echo "Erro na inclusão do banco de dados: " ;
            }
        }
        else{
            echo '<script type="text/javascript">
            alert("Preencha todos os campos!");
            location="login.php";
            </script>';
        }    
    }

    if(isset($_POST['btnCadastroDoacao'])){

            if($user != "" && $email != "" && $pass != "" && $confpass != ""){
            //Informações de Login e Senha do Formulário de Cadastro
            $user=$_POST["txtUsernameCad"];
            $email=$_POST["txtEmailCad"];
            $pass=$_POST["txtPasswordCad"];
            $confpass=$_POST["txtConfPasswordCad"];

            //Confirmação das Senhas Digitadas
            if($pass != $confpass){
                echo "<script type='text/javascript'> alert('As senhas não conferem!'); </script>" ;
                header('Location: login.php');
            }
            else{
                //Acesso do Cadastro ao BD
                $comando= "Insert into jogador(USERNAME_JOGADOR,SENHA_JOGADOR,EMAIL_JOGADOR) values ('$user', '$pass', '$email')";
                $resulta = mysqli_query($con,$comando);

                //Confirmação do Cadastro no BD
                if 
                    ($resulta!=0) header('Location: redirecionamento.php');
                else
                    echo "<script> alert('erro de inclusão');</script>";
            }
        }
        else{
            echo '<script type="text/javascript">
            alert("Preencha todos os campos!");
            location="login.php";
            </script>';
        }
    }



    //Fechamento do BD
    $close = mysqli_close($con);
?>

<!-- Redirecionamento para página de cadastro -->