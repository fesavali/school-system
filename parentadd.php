<?php include('config.php'); 
include 'add.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add your student</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="shortcut icon" href="images/fav.ico" type="images/fav.ico">
    <!-- Custome styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
  </head>
  <body>
  <div class="container">
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Parent Account</a>
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
  </nav></div>
    <div class="container" style="margin-bottom: 150px;">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <a href="parents.php" class="btn btn-primary" style="margin-bottom: 5px;">
            <span class="glyphicon glyphicon-chevron-left"></span>
            Back
          </a>
          <br>
          <form class="form" action="parentadd.php" method="post" enctype="multipart/form-data">
              <h2 class="text-center">Create Admin user</h2>
            <hr>
              <!-- display form error messages  -->
          <?php include("messages.php") ?>
            <div class="form-group <?php echo isset($errors['username']) ? 'has-error' : '' ?>">
              <label class="control-label">Student Adm no.</label>
              <input type="text" name="username" class="form-control" placeholder="Your Child Adm No.">
              <?php if (isset($errors['username'])): ?>
                <span class="help-block"><?php echo $errors['username'] ?></span>
              <?php endif; ?>
            </div>
              <div class="form-group <?php echo isset($errors['passwordOld']) ? 'has-error' : '' ?>">
                <label class="control-label">Student Form</label>
                <input type="text" name="class" class="form-control" placeholder="Child form">
                <?php if (isset($errors['passwordOld'])): ?>
                  <span class="help-block"><?php echo $errors['passwordOld'] ?></span>
                <?php endif; ?>
              </div>
            <div class="form-group <?php echo isset($errors['password']) ? 'has-error' : '' ?>">
              <label class="control-label">Student stream</label>
              <input type="text" name="stream" class="form-control" style="text-transform:uppercase" placeholder="Child Stream">
              <?php if (isset($errors['password'])): ?>
                <span class="help-block"><?php echo $errors['password'] ?></span>
              <?php endif; ?>
            </div>
           
           
                <button type="submit" name="save_user" class="btn btn-success btn-block btn-lg">Link Student</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  <?php include("footer.php") ?>
<script type="text/javascript" src="../../assets/js/display_profile_image.js"></script>
</body>
</html>