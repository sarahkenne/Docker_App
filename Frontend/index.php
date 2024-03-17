<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />
    <title>Formulaire html</title>
    <style>
      
      .form-container {
          background-color: #84EFF3  ; 
          border: 1px solid #dc3545; 
          border-radius: 10px; 
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Ombre */
          padding: 20px; 
          margin-top: 20px; 
      }

  </style>
</head>
<body id="body">
    <div class="contact">
        <div class="container">
            <div class="form-container">
                <h2 class="text-center">WELCOME</h2>
                <h3>Veuillez Remplir le Formulaire</h3>
                <form id="form" action="validation.php" method="post">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <label for="username">NOM:</label>
                        <input type="text" id="nom" name="nom" class="form-control" />
                        <p class="text-danger username-helper">
                            <small>Votre nom ne doit pas commencer par un chiffre et doit avoir
                                au moins 4 caractères</small>
                        </p>
                      <label for="username">PRENOM:</label>
                      <input type="text" id="prenom" name="prenom" class="form-control" />
                        <br />
                        <label for="email">ADRESSE MAIL:</label>
                        <input type="email" id="email" name="email" class="form-control" />
                        <p class="text-danger email-helper">
                            <small>Votre adress email doit être sous une forme
                                valide</small>
                        </p>
                        <select name="demande">
                          <option value="Demande d'information"> Demande d'information</option>
                          <option value="Demande de visite"> Demande de visite</option>
                          <option value="Demande d'adhésion"> Demande d'adhésion</option>
                        </select>

                        <br />

                        <br />

                    </div>

                    <button id="submit" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
