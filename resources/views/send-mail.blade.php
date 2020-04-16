<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];

        require 'vendor/autoload.php';

        $from = new SendGrid\Email(null, "migrajobscontato@gmail.com");
        $subject = "Mensagem de contato";
        $to = new SendGrid\Email(null, "migrajobscontato@gmail.com");
        $content = new SendGrid\Content("text/html", "Olá, <br><br>Nova mensagem de contato<br><br>Nome: $nome<br>Email: $email<br>Mensagem: $mensagem");
        $email = new SendGrid\Mail($from, $subject, $to, $content);

        // Necessário inserir a chave
        $apiKey = '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
';
        $sg = new \SendGrid($apiKey);

        $response = $sg->client->mail()->send()->post($mail);
        echo "Mensagem enviada com sucesso!";


    ?>
</body>
</html>
