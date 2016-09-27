<html>
  <head>
      <meta charset="utf-8">
      <title>Password</title>
      <link href="css/bootstrap.css" rel="stylesheet" />
       <link href="css/loja.css" rel="stylesheet" />

  </head>

  <body>
    <div class="container">

      <div class="principal">
        <h1>Gerador de Senhas</h1>
        </br>
        </br>
        <?php
        if(isset($_POST['senha']))
        {
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
        <div class="alert alert-success" role="alert">
        <h2 class="alert-heading">A senha gerada é:</h2>
        <h2 class="text-info"> <?php echo randomPassword(); ?></h2>
        </div>

        <?php
        }
        ?>

        <form method="post" action="gerar-senha.php">
          <table class="table">
            </br>
            </br>
            </br>
            <tr>
              <td><input name="senha" class="btn btn-primary btn-lg" type="submit" value="Gerar Senha"></td>
            </tr>
          </table>
        </form>

      </div>

    </div>
  </body>
</html>
