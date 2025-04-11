<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><strong> Bibliothèque MLV </strong></title>
    <meta name="description" content="Explorez un monde de connaissances à la bibliothèque">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
</head>
<body>

<header>
    <div class="container">
        <h1>Bibliothèque</h1>
    </div>
</header>

<main>
    <section class="hero">
        <div class="container">
            <h2>Bienvenue à la Bibliothèque MLV </h2>
            <p>Découvrez notre espace de connaissances open-source</p>
            <a href="login" class="btn">Se connecter</a>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <h2>Nos Services</h2>
            <div class="service-list">
                <div class="service-item">
                    <h3>Prêt de livres</h3>
                    <p>Empruntez vos livres préférés pour une durée déterminée.</p>
                </div>
                <div class="service-item">
                    <h3>Accès numérique</h3>
                    <p>Accédez à des milliers de ressources en ligne, y compris des e-books et des articles.</p>
                </div>
            </div>
        </div>
    </section>
</main>

<footer>
    <p>&copy; <?= date('Y') ?> Bibliothèque = Nous sommes cooked</p>
</footer>

</body>


    <!-- STYLES -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            color: #333;
        }

        header {
            background:rgb(0, 0, 0);
            color: #fff;
            padding: 1rem 0;
        }

        header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        header h1 {
            margin: 0;
        }

        header nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        header nav ul li {
            margin-left: 20px;
        }

        header nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        .hero {
            background: #f4f4f4;
            padding: 2rem 0;
            text-align: center;
        }

        .hero h2 {
            margin: 0 0 1rem;
        }

        .hero .btn {
            display: inline-block;
            background:rgb(0, 0, 0);
            color: #fff;
            padding: 0.5rem 1rem;
            text-decoration: none;
            border-radius: 5px;
        }

        .hero .btn:hover {
            background:rgb(0, 0, 0);
        }

        .services {
            padding: 2rem 0;
            background: #fff;
        }

        .services .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .services h2 {
            text-align: center;
            margin-bottom: 2rem;
        }

        .service-list {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .service-item {
            background: #f4f4f4;
            padding: 1rem;
            border-radius: 5px;
            text-align: center;
            flex: 1;
        }

        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 1rem 0;
        }
    </style>
</html>