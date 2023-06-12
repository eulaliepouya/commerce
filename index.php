<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <style>
    /* Styles pour la navbar */
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

    /* Styles pour la mise en page */


    .container {
      display: flex;
      align-items: center;
    }

    .text {
      flex: 1;
      padding: 20px;
    }

    .image {
      flex: 1;
      text-align: right;
      max-width: 300px;

    }

    .card-img-top {
      width: 300px;
      height: 270px;

    }

    .card {
      width: 300px;
      height: 300px;
      margin-left: 100px;

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



  <div class="container">
    <div class="row">
      <div class="col">
        <h2><strong> A propos</strong></h2>
        <hr>
        <div class="container">
          <div class="text">

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a massa ut enim ullamcorper maximus nec vitae nisl. Sed sed massa sed lacus faucibus ultricies non a velit. Mauris id hendrerit dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a massa ut enim ullamcorper maximus nec vitae nisl. Sed sed massa sed lacus faucibus ultricies non a velit. Mauris id hendrerit dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a massa ut enim ullamcorper maximus nec vitae nisl. Sed sed massa sed lacus faucibus ultricies non a velit. Mauris id hendrerit dolor.</p>
          </div>
          <div class="image">
            <img src="image.jpg" alt="Votre image">
          </div>
        </div>
      </div>
    </div>
  </div>
  <br><br><br>



  <h2 style="text-align: left;"><strong>Produits</strong></h2>

  <hr>
  <div class="container">


  </div>


  </div>
  <div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
      <div class="card">
        <img src="cafe.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Café, 45OOFCFA</h5>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="sucre.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Sucre, 900FCFA</h5>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="lait.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Lait, 400FCFA</h5>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="miel.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Miel, 7000FCFA</h5>
        </div>
      </div>
    </div>
    <br><br><br>

    
  </div>
  <h2 style="text-align: left;"><strong>Contact</strong></h2>
    <hr style="color: black;">
  </div>

  </div>
  <footer>
   <p  style="text-align: center;"><strong> 72 30 02 05</strong></p>
   <p  style="text-align: left;"> commerce/index.php</p>

  </footer>
  <script src="chemin/vers/votre/script.js"></script>
  </html>