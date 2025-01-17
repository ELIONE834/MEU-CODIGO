<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $to = "elioneferreira332@gmail.com";
    $subject = "Nova inscrição MEI";
    $message = "Nome: $nome\nE-mail: $email\nTelefone: $telefone";
    $headers = "From: noreply@seusite.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Formulário enviado com sucesso!";
    } else {
        echo "Erro ao enviar o formulário.";
    }
}
?>
