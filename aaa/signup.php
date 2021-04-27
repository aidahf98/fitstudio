<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('./includes/head.php'); ?>
    <title>Inscription</title>
</head>
<body class="sign">
  <!--------- barre de navigation --------->
  <?php include("./includes/navbar.php") ; ?>


  <!------formulaire d'inscriprion-------->

    <form action="login.php" method="post">
        <div class="form col-md-12">

          <div class="form-group col-md-4">
            <label for="cin">CIN</label>
            <input type="number" class="form-control" id="cin" placeholder="CIN">
          </div>

          <div class="form-group col-md-4">
            <label for="password">Mot de passe</label>
            <input type="password" class="form-control" id="password" placeholder="Mot de passe">
          </div>

        <div class="form-group col-md-4">
          <label for="name">Nom</label>
          <input type="text" class="form-control" id="name" placeholder="Entrer votre nom complet">
        </div>

        <div class="form-group col-md-4">
          <label for="adress">Addresse </label>
          <input type="text" class="form-control" id="adress" placeholder="00 rue xxx 0000 , tunis">
        </div>
        
        <div class="form-group col-md-4">
            <label for="birth">Date de naissance</label>
            <input type="date" class="form-control" id="birth">
          </div>
          <div class="form-group col-md-4">
            <label for="program">Programmes</label>
            <select id="program" class="form-control">
              <option value="full-prog" selected>Full program</option>
              <option value="fit">Fitness</option>
              <option value="cardio">Cardio</option>
              <option value="yoga">Yoga</option>
              <option value="muscu">Musculation</option>
            </select>
          </div>

          <div class="form-group col-md-4">
          <label for="genre">Sexe</label>
            <select id="genre" class="form-control">
              <option value="homme" selected>Homme</option>
              <option value="femme">Femme</option>
              <option value="autres">Autres</option>
            </select>
          </div>
          </div>

        <button type="submit" class="btn btn-dark col-md-12">Sign up</button>
        
      </form>
      



      <?php include('./includes/scripts.php'); ?>
</body>
</html>