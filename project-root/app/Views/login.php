<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    <form method="POST" action ="Login"></form>
        <label for="matricule">Login :</label>
        <input type="text", name="Matricule abonné" placeholder="Matricule" required><br>
        <label for="nom abonné">Abonné :</label>
        <input type="text", name = "Nom abonné" placeholder="Nom abonnée" required> <br>
        <button>Se connecter</button>
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
