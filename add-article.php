<?php 
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once 'includes/head.php' ?>
    <link rel="stylesheet" href="public/css/add-article.css">
    <title>Créer un article</title>
</head>
<body>
    <div class="container">
        <?php require_once 'includes/header.php' ?>
        <div class="content">
            <div class="block p-20 form-container">
                <h1>Ecrire un article</h1>
                <form action="/add-article.php" method="POST">
                    <div class="form-control">
                        <label for="title">Titre</label>
                        <input type="text" name="title" id="title">
                        <p class="text-error"></p>
                    </div>
                    <div class="form-control">
                        <label for="image">Images</label>
                        <input type="text" name="image" id="image">
                        <p class="text-error"></p>
                    </div>
                    <div class="form-control">
                        <label for="category">Categorie</label>
                        <select name="category" id="category">
                            <option value="Technologie">Technologie</option>
                            <option value="Nature">Nature</option>
                            <option value="Politique">Politique</option>
                        </select>
                        <p class="text-error"></p>
                    </div>
                    <div class="form-control">
                        <label for="title">Contenu</label>
                        <textarea name="content" id="content"></textarea>
                        <p class="text-error"></p>
                    </div>
                    <div class="form-action">
                        <a href="/" class="btn btn-secondary" type="button">Annuler</a>
                        <button class="btn btn-primary">Publier</button>
                    </div>
                </form>
            </div>
        </div>
        <?php require_once 'includes/footer.php' ?>
    </div>
</body>
</html>