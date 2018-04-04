<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Blog">
    <meta name="author" content="nabil">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <title>Centre de formation</title>
  </head>
  <body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav">
      <li class="nav-item active"><a class="nav-link" href="app.php?module=blog">Blog</a></li>
      <li class="nav-item"><a class="nav-link" href="app.php?module=catalogue">Catalogue</a></li>
      <li class="nav-item"><a class="nav-link" href="app.php?module=contact">Contact</a></li>
    </ul>
  </div>
</nav>


    <div class="jumbotron">
      <?php echo $contenu; ?>
    </div>


  </body>
</html>
