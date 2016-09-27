<html>
  <head>
      <title>Gerador de Senha</title>
      <meta charset="utf-8">
      <link href="css/bootstrap.css" rel="stylesheet" />
      <link href="css/loja.css" rel="stylesheet" />

  </head>

  <body>
      <div class="container">

          <div class="principal">
            <?php
            function randomPassword() {
                $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
                $pass = array(); //remember to declare $pass as an array
                $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
                for ($i = 0; $i < 8; $i++) {
                    $n = rand(0, $alphaLength);
                    $pass[] = $alphabet[$n];
                }
                return implode($pass); //turn the array into a string
            }
            ?>
          </br>
          </br>
          </br>
          </br>
          <h1> <p class="alert-success">  A senha gerada é: <?php echo randomPassword(); ?> </p> </h1>

          </div>

      </div>
  </body>

</html>
