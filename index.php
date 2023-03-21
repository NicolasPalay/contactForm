<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<form action="thank.php" method="post">

    <label for="nom">Votre nom</label>
    <input type="text" id="nom" name="nom">

    <label for="prenom">Votre prénom</label>
    <input type="text" id="prenom" name="prenom">

    <label for="email">Votre e-mail</label>
    <input type="email" id="email" name="email">

    <label for="sujet">Quel est le sujet</label>

    <input type="text" id="sujet" name="sujet">
    <label for="tel">Votre numéro de téléphone</label>
    <input type="tel" id="tel" name="tel">

    <label for="message">Votre message</label>
    <textarea id="message" name="message"></textarea>

    <button type="submit">Envoyer mon message</button>

</form>
</body>
</html>