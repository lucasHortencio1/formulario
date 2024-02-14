<?php
$nome = filter_input(INPUT_POST , "nome", FILTER_SANITIZE_STRING );
$telefone = filter_input(INPUT_POST , "telefone", FILTER_VALIDATE_INT);
$msg = filter_input(INPUT_POST, "msg",FILTER_SANITIZE_STRING);

#variaveis para enviar um email
$to = "claudio.pereiradasilva@gmail.com";
$subject = "Novo contato pelo site";
$message = "nome : $nome
            telefone : $telefone
            mensage : $msg";
$headers = "from : robertobolanhos@gmail.com";
#enviando para o email

try {
    mail($to , $subject , $message , $headers);
    echo "obrigado, em breve entraremos em contato";
}catch(Exception $error){
    echo "erro ao enviar o seu contato, tente novamente mais tarde";
}