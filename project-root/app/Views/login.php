<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
    <h1>Login</h1>
    <form method="POST" action="login">
        <label for="login">Login :</label>
        <input type="text" name="login"><br>
        <label for="password">Password :</label>
        <input type="password" name="password" placeholder="Nom" required> <br>
        <button value="submit">Se connecter</button>
    </form>
    <style>
        form {
            text-align: center;
            display: flex;
        }


        label {
            text-align: center;
            align-items: center;
            display: flex;
        }
    </style>
</body>


</html>