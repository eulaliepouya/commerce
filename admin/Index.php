<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
        .navbar {
            background-color: #f8f8f8;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
        }

        .navbar-logo {
            height: 30px;
            width: 30px;
            margin-right: 10px;
        }

        .navbar-menu {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
        }

        .navbar-menu li {
            margin-right: 10px;
        }

        .navbar-menu li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        .login-box {
            width: 300px;
            margin: 0 auto;
            background: #f1f1f1;
            padding: 20px;
            border-radius: 5px;
        }

        .login-box h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .user-box {
            position: relative;
            margin-bottom: 20px;
        }

        .user-box input {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            border: none;
            border-bottom: 1px solid #000;
            outline: none;
            background: transparent;
        }

        .user-box label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #000;
            transition: 0.5s;
            pointer-events: none;
        }

        .user-box input:focus~label,
        .user-box input:valid~label {
            top: -20px;
            left: 0;
            color: #000;
            font-size: 12px;
        }

        button[type="submit"] {
            background: #000;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <nav class="navbar">
        <div>
            <img src="logo.png" alt="Logo" class="navbar-logo">
        </div>
        <ul class="navbar-menu">
            <li><a href="index.php">Accueil</a></li>

            <li><a href="produits.php">Produits</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>

    </nav>

    </div>

</body>

</html>



<?php
// Récupérer les valeurs du formulaire
$username = $_POST['username'];
$password = $_POST['password'];

// Vérifier les informations de connexion
if ($username === 'pouyaeula' && $password === 'lala') {
    $message = 'Félicitations ! Vous êtes connecté.';
    $messageClass = 'success';
} else {
    $message = 'Échec de la connexion. Veuillez réessayer.';
    $messageClass = 'error';
}
?>

<div class="login-box">
    <h2>Connexion</h2>
    <form action="" method="post">
        <div class="user-box">
            <input type="text" name="username" required>
            <label>Nom d'utilisateur</label>
        </div>
        <div class="user-box">
            <input type="password" name="password" required>
            <label>Mot de passe</label>
        </div>
        <button type="submit">Se connecter</button>
    </form>
    <?php if (!empty($message)) : ?>
        <div class="message <?php echo $messageClass; ?>">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>
</div>

<?php
