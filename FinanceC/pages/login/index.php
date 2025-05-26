<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>
<body>

<main> 

    <div class="title"> <h1>Cadastro</h1> </div>


    <form action="../../connection/conector.php" method="post">
        
    <div class="container">
        <div class="input">

        <label for="username" class="inputText">Nome</label>
        <input type="text" id="username" name="username" required>
        </div>
        
        <div class="input">
        <label for="email" class="inputText">Email</label>
        <input type="email" id="email" name="email" required>
        </div>

        <div class="input">
        <label for="password" class="inputText">Senha</label>
        <input type="password" id="password" name="password" required>
        </div>

         <div class="input">
        <label for="password" class="inputText">Confirme a senha</label>
        <input type="password" id="password" name="password" required>
        </div>
        
        <div class="submit">
        <button type="submit">Cadastrar</button>
        </div>
    </div>

    </form>

</main>

<?php ?>
    
</body>
</html>