<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>

<main> 

    <div class="title"> <h1>Login</h1> </div>


    <form action="login.php" method="post">
        
    <div class="container">
        <div class="input">

        <label for="username" class="inputText">Usuário:</label>
        <input type="text" id="username" name="username" required>
        </div>
        
        <div class="input">
        <label for="password" class="inputText">Senha:</label>
        <input type="password" id="password" name="password" required>
        </div>
        
        <div class="submit">
        <button type="submit">Entrar</button>
        </div>
    </div>

    </form>

</main>
    
</body>
</html>