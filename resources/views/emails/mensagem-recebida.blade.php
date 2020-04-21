<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8" />
  </head>
  <body>
    <h2>Mensagem Recebida</h2>

    <p>Você recebeu uma mensagem de: {{ $msg['nome'] }} - {{ $msg['email'] }}</p>
    <p><strong>Conteúdo:</strong> {{ $msg['mensagem'] }}

  </body>
</html>

