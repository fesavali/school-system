<?php include("config.php");
include 'userSignup.php';
if(empty($_SESSION['username'])) {
  header('location: index.php');
}
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Admin Page</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
  <link rel="shortcut icon" href="images/fav.ico" type="images/fav.ico">
  <!-- Custome styles -->
  <link rel="stylesheet" href="static/css/style.css">
</head>
<body>
    <div class="container">
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Admin Account</a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <?php if (isset($_SESSION['username'])): ?>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <?php echo $_SESSION['username']?> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="logout.php" style="color: red;">Logout</a></li>
                </ul>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </nav>
    <?php include("messages.php") ?>
    <h1>Admin page</h1>
    Update Students details <a href="updatess.php">here</a>
    <?php include("footer.php") ?>