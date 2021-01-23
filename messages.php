<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0096c7;">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">Acceuil</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="contact.php">Contactez moi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Messages</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="Rechercher" placeholder="Rechercher" aria-label="Rechercher">
              <button class="btn btn-outline-light" type="submit">Rechercher</button>
            </form>
          </div>
        </div>
    </nav>
    <div style="min-height: 500px;" class="body">
    <?php
          $nom; 
          $message; 
          $reseauSociaux;
          if(isset($_POST['nom']) && isset($_POST['message']) && isset($_POST['reseauxSociaux']) &&
                   $_POST['nom'] != "" && $_POST['message'] != "" && $_POST['reseauxSociaux'] != array() &&
                   $_POST['message'] != "Ajouter votre message ici" ){
            $nom = $_POST['nom'];
            $message = $_POST['message'];
            $reseauSociaux = $_POST['reseauxSociaux'];
            echo '<span class="sender">'.$nom.'</span><br>'.$message.'<br>';
            echo '<span class="info">envoyé sur : </span>';
            foreach($reseauSociaux as $reseauSocial){
                echo '<span class="info">'.$reseauSocial.' </span>';
            }
          }
    ?>
    </div>
    <div class="footer">Copyrights 2022, Imane Oumelk web site</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>