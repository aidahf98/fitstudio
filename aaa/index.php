<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('./includes/head.php'); ?>
    <title>Home</title>
</head>
<body>
    <!--------- barre de navigation --------->
    <?php include("./includes/navbar.php") ; ?>



     <!-----Inscription------>

     <div class="jumbotron">
         <div onmouseover="mOver(this)" onmouseout="mOut(this)">
         <h1>HELPING YOU BE THE BEST YOU CAN BE </h1>
         </div>
         <script>
            function mOver(obj) {
              obj.innerHTML = "SUBSCRIBE NOW FOR FREE! "
              
            }
            
            function mOut(obj) {
              obj.innerHTML = "HELPING YOU BE THE BEST YOU CAN BE"
            }
            </script>
          <a class="btn btn-lg" href="signup.php" role="button">Inscritption</a>
      </div>


    <!-------Presentation--------->
    <div class="legend">
    <h1>A propos </h1>
    <p>Profitez d'un cadre agréable, des espaces aérés et climatisés, des équipements de pointe et des coachs qualifiés pour vous encadrer, vous motiver et vous soutenir. 
    Fitstudio est une salle de sport et de fitness qui vous propose des cours variés dans un espace de Fitness destiné aux adultes, ados et enfants. 
    Vous trouverez tous ce qu'il vous faut dans nos espaces de musculation et Cardio Training avec un matériel de qualité.</p>

    </div>



       <!--------------Carousel--------------->


    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <h1> Nos éspaces </h1>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="../aaa/img/cardio.jfif" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Circuit zone</h5>
                <p>Il s’agit d’une salle technique exclusivement équipée de machines de cardio-training et de musculation. Le Circuit Zone est dédié aux activités sportives individuelles ou en petits groupes, guidés par un coach sportif.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="../aaa/img/workout.jfif" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Studio</h5>
                <p>Il s’agit du format essentiellement conçu pour des petits espaces. Le Studio est dédié aux activités sportives collectives ou de bien-être, avec des équipements adaptés à l’entrainement fonctionnel.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="../aaa/img/muscu.jfif" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Full gym</h5>
                <p>Combinaison du Studio et du Circuit Zone, l’Espace Full Gym rassemble les activités collectives de cours sportifs et de bien-être et les activités individuelles sur les machines de cardio-training et musculation et les équipements d’entrainement fonctionnel.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="../aaa/img/yoga1.jfif" alt="Fifth slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Yoga space</h5>
                <p>C’est là que la méditation et le yoga entrent en jeu. Parfaites pour cultiver la paix intérieure, ces activités permettent de se recentrer</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


























    <?php include('./includes/scripts.php'); ?>
</body>
</html>