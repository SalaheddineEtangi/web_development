<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez moi</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">   
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0096c7;">
        <div class="container-fluid">
          <a href="images/logo.PNG"><img src="images/logo.PNG" alt="logo Imane Oumelk"></a>
          <a class="navbar-brand" href="index.php">Acceuil</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Contactez moi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="messages.php">Messages<span class="badge bg-danger">!</span></a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="Rechercher" placeholder="Rechercher" aria-label="Rechercher">
              <button class="btn btn-outline-light" type="submit">Rechercher</button>
            </form>
          </div>
        </div>
    </nav>
    <div class="body">
        <form action="http://localhost:41137/udemy/web_development/messages.php" method="POST">
            <p>
                <b>Nom</b><br>
                <input type="text" name="nom">
            </p>
            <p>
                <b>Email</b><br>
                <input type="email" name="email" style="width: 350px;">
            </p>
            <p>
                <b>Message</b><br>
                <textarea name="message" style="width:30%; height:150px">Ajouter votre message ici</textarea>
            </p>
            <p>
                <b>Choisissez vos réseaux sociaux préférés</b><br>
                <select name="reseauxSociaux[]" size="4" multiple="true">
                  <option id="social_media_1" value="Facebook">Facebook</option>
                  <option id="social_media_2" value="Instagram">Instagram</option>
                  <option id="social_media_3" value="WhatsApp">WhatsApp</option>
                  <option id="social_media_4" value="LinkedIn">LinkedIn</option>
                  <option id="social_media_5" value="Gmail">Gmail</option>
                </select>
            </p>
            <p>
                <b>Envoyer le message</b><br>
                <label><input type="radio" name="type_envoi" id="type_envoi_1" value="maintenant">Maintenant</label><br>
                <label><input type="radio" name="type_envoi" id="type_envoi_2" value="Apres_une_heure">Après une heure</label>
            </p>
            <p>
                <b>Prenez un RDV</b><br>
                <input type="date">
            </p>
            <p>
                <input type="submit" class="btn" style="background-color: #0096c7;">
            </p>
        </form>
    </div>
    <div class="footer">Copyrights 2022, Imane Oumelk web site</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>