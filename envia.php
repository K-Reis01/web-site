<?php
    
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);

    $para = "destroyerexe666@gmail.com";
    $assunto = "Dúvidas - Loja Virtual";

    $corpo = "Nome: ".$nome."\n"."E-mail ".$email."\n"."Telefone ".$telefone;

    $cabeca = "From: kauareis842@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar o email");
    }

?>