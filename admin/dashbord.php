<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
.container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 20vh;
}

.button {
  margin: 0 10px;
  width: 250px;
  height: 50px;
  font-size: 18px;
  margin-left: auto;
  margin-right: auto;
}
.td{
    border: 1px solid ;
    color: white ;
    width: "20px";
    height: "30px";
    
}
.th{
    border: 1px solid black;

}
    </style>


    
    
</head>

<body>

    <h2 style="text-align: center;"> <strong>Dashbord</strong></h2>
<hr>
<div class="container">
<button class="button"><a href="liste_produits.php">Voir la liste des produits</a></button>
  <button class="button"><a href="ajouter_produit.php">Ajouter un produit</a></button>
</div><br><br><br><br>
<div class="container">
  <button class="button"><a href="liste_ventes.php">Voir la liste des ventes</a></button>
  <button class="button"><a href="ajouter_vente.php">Ajouter une vente</a></button>
</div>

<hr>
<h2 style="text-align: left;"><Strong>Listes des produits</Strong></h2>
<br><br>

<!DOCTYPE html>
<html>
<head>
  <title>Tableau dynamique</title>
  <style>
    table {
      border-collapse: collapse;
    }
    th, td {
      border: 1px solid black;
      padding: 10px;
    }
  </style>
</head>
<body>
  <table>
    <thead>
      <tr>
      <th>ID</th>
        <th>Libellé</th>
        <th>Prix unitaire</th>
      </tr>
    </thead>
    <tbody>
      <?php
        // Données dynamiques
        $donnees = array(
            array('1', 'Café', '4500 FCFA'),
            array('2', 'Sucre', '4000 FCFA'),
            array('3', 'Lait', '4000 FCFA')
        );

        // Parcourir les données et afficher les lignes du tableau
        foreach ($donnees as $ligne) {
          echo '<tr>';
          foreach ($ligne as $colonne) {
            echo '<td>' . $colonne . '</td>';
          }
          echo '</tr>';
        }
      ?>
    </tbody>
  </table>
</body>
</html>



<hr>
<h2 class="marg">Ajout de produit</h2>
<br>
<div class="row">
    <div class="col-6">
        <label class="marg"><strong>Libellé</strong></label>
        <input class="form-control mr-sm-2" type="text" name="libelle">
    </div>
    <div class="col-6">
        <label class="marg"><strong>Prix</strong></label>
        <input class="form-control mr-sm-2" type="text" name="prix">
    </div>
</div>
<br>
<input type="submit" class="btn btn-success" value="Enregistrer">

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les valeurs du formulaire
    $libelle = $_POST['libelle'];
    $prix = $_POST['prix'];

    // Effectuer le traitement ou l'enregistrement des données ici
    // ...

    // Afficher un message de succès
    echo "<div class='alert alert-success'>Produit enregistré avec succès.</div>";
}
?>

    </div> <br>
</body>

</html>