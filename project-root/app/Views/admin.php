<<<<<<< HEAD
<!-- application/views/admin/dashboard.php -->
=======
<?php
// filepath: /home/letslove/Documents/TP4/project-root/app/Views/admin.php
>>>>>>> 8161708 (w)
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Projet bibliothèque - Administration</title>
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
    </style>
</head>
<body>
    <div class="header">
        <h2>Projet bibliothèque - Espace Admin</h2>
    </div>
    
    <div class="container">
        <div class="menu">
            <a href="<?= site_url('admin/abonnes') ?>">Gestion des abonnés</a>
            <a href="<?= site_url('admin/livres') ?>">Gestion des livres</a>
            <a href="<?= site_url('admin/exemplaires') ?>">Gestion des exemplaires</a>
            <a href="<?= site_url('admin/emprunts') ?>">Gestion des emprunts</a>
            <a href="<?= site_url('admin/retours') ?>">Gestion des retours</a>
            <a href="<?= site_url('admin/demandes') ?>">Gestion des demandes</a>
        </div>
        
        <div class="main">
            <?php if(isset($view_content)): ?>
                <?= $view_content ?>
            <?php else: ?>
                <h3>Bienvenue dans l'interface d'administration</h3>
                <p>Utilisez le menu à gauche pour accéder aux différentes fonctionnalités de gestion de la bibliothèque.</p>
            <?php endif; ?>
        </div>
    </div>
=======
    <title>Interface Administrateur</title>
</head>
<body>
    <h1>Bienvenue sur l'interface administrateur</h1>
    <p>Utilisez le menu pour naviguer entre les fonctionnalités.</p>
>>>>>>> 8161708 (w)
</body>
</html>