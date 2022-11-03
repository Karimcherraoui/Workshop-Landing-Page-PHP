<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AFFICHAGE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <h1> Informations Data </h1>
    <ul class="list">
        <li class="list-group">Nom :  <?php echo $_GET['nom']?>
        </li>
        <li class="list-group">Prneom : <?php echo $_GET['prenom']?> </li>
        <li class="list-group">age : <?php echo $_GET['age']?> </li>
        <li class="list-group">email: <?php echo $_GET['email']?> </li>
    </ul>
    <button class="btn"><a href="./index.php" class="link" style="text-decoration: none;">Back To Home</a></button>
</body>
</html>