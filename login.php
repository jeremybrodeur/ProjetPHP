<!doctype html>
<html lang="en">
  <head>
    <title>NotIndeed</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
          height: 100%;
        }
        .container {
            position: relative;
        }
        .card {
          top:200%;
          left:50%;
          border-radius: 25px;
          z-index: 2;
          box-shadow: 10px 10px 5px #ccc;
        -moz-box-shadow: 10px 10px 5px #ccc;
      -webkit-box-shadow: 10px 10px 5px #ccc;
      -khtml-box-shadow: 10px 10px 5px #ccc;
        }
        img {
          position: absolute;
          height:400px;
          width:200px;

          z-index: 1;
        }
        .btn{
          box-shadow: 10px 10px 5px #ccc;
        -moz-box-shadow: 10px 10px 5px #ccc;
      -webkit-box-shadow: 10px 10px 5px #ccc;
      -khtml-box-shadow: 10px 10px 5px #ccc;
        }
      </style>
  </head>
  <body>
    <div class="container  d-flex justify-content-center"><img src="img/Indeed_logo.svg" alt="logo"/></div>
    <div class="container justify-content-center">
    
    <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body mx-auto">
          <h5 class="card-title">À la recherche d'un emploi?</h5>
          <p class="card-text">Ne perdez pas de temps et commencez à appliquer dès maintenant!</p>
          <div class="d-flex justify-content-between">
          <a href="loginApplicant.php" class="btn btn-primary">Se connecter</a>
          <a href="creerApplicant.php" class="btn btn-success" >Créer un compte</a>
          </div>
        </div>
    </div>
    </div>
    
    </div>
    <div class="row mt-5">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">À la recherche d'employé?</h5>
          <p class="card-text">Publier vos offres d'emploi dès maintenant!</p>
          <div class="d-flex justify-content-between">
          <a href="loginEmployeur.php" class="btn btn-primary">Se connecter</a>
          <a href="creerEmployeur.php" class="btn btn-success">Créer un compte</a>
          </div>
        </div>
    </div>
    </div>
  </div>
   
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>