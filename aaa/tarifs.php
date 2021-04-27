<!DOCTYPE html>
<html lang="en">
<head>
   <?php include('./includes/head.php'); ?>
   <title>Tarifs</title>
</head>

<body>
   <?php include('./includes/navbar.php'); ?>
   
<!------Offres--------->
 
<div class="card-group">
        <div class="card">
          <img class="card-img-top " src="../aaa/img/yell.jfif" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Yellow Pass</h5>
            <p class="card-text">Le Yellow Pass vous donne accès à tous nos espaces et nos cours collectifs avec un coaching privé pendant une année.</p>
            <a href="signup.php"><button type="button" class="btn btn-dark">s'inscrire maintenant</button></a>
         </div>
        </div>
        <div class="card">
          <img class="card-img-top " src="../aaa/img/a1.jfif" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Grey Pass</h5>
            <p class="card-text">Le Grey Pass vous permet de choisir deux programmes et participer au trois cours selon votre choix chaque semaine pendant 6 mois.</p>
            <a href="signup.php"><button type="button" class="btn btn-dark">s'inscrire maintenant</button></a>
         </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="../aaa/img/minimalist.jfif" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Black Pass</h5>
            <p class="card-text">Le Black Pass est un abonnement mensuel pour un programme(selon votre choix) et ses cours collectifs.</p>
            <a href="signup.php"><button type="button" class="btn btn-dark">s'inscrire maintenant</button></a>
          </div>
        </div>
      </div>

<hr>
<h3>Nos Tarifs / Offres:</h3>

<div class="table-responsive-md">
  <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">1 MOIS</th>
      <th scope="col">3 Mois</th>
      <th scope="col">12 Mois</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Femmes</th>
      <td>65DT</td>
      <td>110DT</td>
      <td>1200DT</td>
    </tr>
    <tr>
      <th scope="row">Hommes</th>
      <td>70DT</td>
      <td>120DT</td>
      <td>1300DT</td>
    </tr>
  </tbody>
  </table>
</div>

<div class="table-responsive-md">
   
  <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Yellow Pass</th>
      <th scope="col">Grey Pass</th>
      <th scope="col">Black Pass</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td>100DT</td>
      <td>700DT</td>
      <td>1500DT</td>
    </tr>
  </tbody>
  </table>
</div>











<?php include('./includes/scripts.php'); ?>
</body>
</html>