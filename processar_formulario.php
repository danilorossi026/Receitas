<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $cep = $_POST['cep'];

    $email_destino = "https://formsubmit.co/danilo26rossi@gmail.com";
    $assunto = "Novo cadastro no site";

    $mensagem = "Novo cadastro recebido:\n\n";
    $mensagem .= "Nome: $nome\n";
    $mensagem .= "E-mail: $email\n";
    $mensagem .= "Rua: $rua\n";
    $mensagem .= "Número: $numero\n";
    $mensagem .= "Complemento: $complemento\n";
    $mensagem .= "Bairro: $bairro\n";
    $mensagem .= "Cidade: $cidade\n";
    $mensagem .= "Estado: $estado\n";
    $mensagem .= "CEP: $cep\n";

    $headers = "From: danilo26rossi@gmail.com" . "\r\n" . "Reply-To: $email" . "\r\n" . "X-Mailer: PHP/" . phpversion();

    if (mail($email_destino, $assunto, $mensagem, $headers)) {
        echo "Formulário enviado com sucesso!";
    } else {
        echo "Erro ao enviar o formulário.";
    }
}
?>