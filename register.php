<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4RouesMotrices</title>
    <link rel="icon" href="Image/Logo.jpg" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="stylesheetREG.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
</head>
<body>
<div id="main">
        <div class="container" id="container">
            <div class="form-container créer-compte">
                <form action="#">
                    <h1>Créer un compte</h1>
                        <input type="text" placeholder="Nom" required>
                        <input type="text" placeholder="Pseudonyme" required>
                        <input type="date" placeholder="Date de naissance" required>
                        <div class="genre-selector">
                            <input type="radio" id="genre_homme" name="gender" value="homme" checked>
                            <label for="genre_homme" class="genre-label">• Homme</label><br>

                            <input type="radio" id="genre_femme" name="gender" value="femme">
                            <label for="genre_femme" class="genre-label">• Femme</label><br>

                            <input type="radio" id="genre_autre" name="gender" value="autre">
                            <label for="genre_autre" class="genre-label">• Autre</label><br>
                        </div>
                        <input type="gmail" placeholder="Email" required>
                        <input type="password" placeholder="Mot de passe" required>
                        <button>Créer compte</button>
                        <p>Déjà un compte ? <a href="login.html">Connectez-vous ici</a>.</p>
                    </div>
                </form>
            </div>
        </div>
    </div>    
</body>
</html>