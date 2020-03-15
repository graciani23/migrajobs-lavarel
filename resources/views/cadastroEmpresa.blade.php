<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <title>Cadastro e Login - Empresa</title>
</head>
<body>
    <?php
        require('.public/assets/includes/isamenuNavResponsivo.php');
    ?>
    <div class="corpo-form">
        <form method="POST">
            <h2><strong>Cadastre sua empresa</strong></h2>
            <input type="text" id="inputName" placeholder="Nome da empresa">
            <input type="number" id="inputCNPJ" placeholder="Informe seu CNPJ">        
            <input type="email" id="inputEmail" placeholder="Email de acesso">
            <input type="password" id="inputPassword" placeholder="Senha">
            <input type="password" id="inputConfirmPassword" placeholder="Confirme sua senha">
    
            <button type="submit" class="btn btn-light">Entrar</button>
        </form>
    </div>

    <div class="corpo">
        
    </div>
    

    <?php
        require '.public/assets/includes/footer.php';
    ?>
    
    <link rel="stylesheet" href="public/assets/css/estiloCadUsuarioEmpresa.css">
    <link rel="stylesheet" href=".public/assets/css/estilofooterqs.css">
    <link rel="stylesheet" href="public/assets/css/estiloMenuNav.css">
</body>
</html>