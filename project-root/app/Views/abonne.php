<!-- filepath: c:\Projects\TP4\project-root\app\Views\abonne.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet bibliothèque - Abonné</title>
    <style>
        /* Mise en page de base */
        body { font-family: Arial, sans-serif; margin: 0; padding: 10px; }
        
        /* En-tête */
        .header { background: #eee; padding: 10px; text-align: center; }
        
        /* Structure principale */
        .container { display: flex; margin-top: 10px; }
        .menu { width: 200px; padding-right: 15px; }
        .main { flex: 1; padding-left: 15px; border-left: 1px solid #ddd; }
        
        /* Boutons du menu */
        .menu a { 
            display: block; 
            padding: 8px; 
            margin-bottom: 5px; 
            background: #f8f8f8; 
            border: 1px solid #ddd; 
            text-decoration: none;
            color: #333;
        }
        .menu a:hover {
            background: #ddd;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>Projet bibliothèque - Espace Abonné</h2>
    </div>
    <div class="container">
        <div class="menu">
            <a href="<?= site_url('abonne/profil') ?>">Mon Profil</a>
            <a href="<?= site_url('abonne/mes-abonnements') ?>">Mes Abonnements</a>
            <a href="<?= site_url('abonne/emprunts') ?>">Mes Emprunts</a>
            <a href="<?= site_url('abonne/retours') ?>">Mes Retours</a>
            <a href="<?= site_url('abonne/demandes') ?>">Mes Demandes</a>
            <a href="<?= site_url('abonne/logout') ?>">Se Déconnecter</a>
        </div>
        
        <div class="main">
            <h3>Bienvenue, <?= session()->get('abonne_nom') ?></h3>
            <p>Utilisez le menu à gauche pour accéder aux différentes fonctionnalités de votre espace abonné.</p>
        </div>
    </div>
</body>
</html>