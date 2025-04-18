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
        <label for="matricule">Login :</label>
        <input type="text"><br>
        <label for="nom abonné">Password :</label>
        <input type="text" , name="Nom abonné" placeholder="Nom" required> <br>
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