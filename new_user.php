<?php 

    require './file_functions.php'; // throws an error
    require './users_functions.php';
    require './form_functions.php';
    require './auth_functions.php';
    
    checkAuth();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sedmica 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="./style.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
</head>
<body>

    <div class="container pt-5">
      
      <div class="row">
          <div class="col-10 offset-1">
        
          <h2 class="text-center mt-3 mb-3">Dodavanje novog korisnika</h2>
          <hr>

          <form action="./add_new_user.php" method="POST">
                <div class="row">
                    <div class="col-3">
                        <input type="text" name="first_name" class="form-control" placeholder="Unesite ime">
                    </div>
                    <div class="col-3">
                        <input type="text" name="last_name" class="form-control" placeholder="Unesite prezime">
                    </div>
                    <div class="col-3">
                        <input type="email" name="email" class="form-control" placeholder="Unesite e-mail adresu">
                    </div>
                    <div class="col-3">
                        <input type="password" name="password" class="form-control" placeholder="Unesite lozinku">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-4 offset-4">
                        <button class="btn btn-success w-100">Dodaj korisnika</button>
                    </div>
                </div>
            </form>

          </div>
      </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>