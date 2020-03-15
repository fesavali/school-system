<?php include('config.php');

include 'userSignup.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
  <link rel="shortcut icon" href="images/fav.ico" type="images/fav.ico">
  <!-- Custome styles -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body style="
  background-image: url('images/sch.jpg');
  background-size: cover;
  background-position: fixed;
  background-repeat: no-repeat;
">
  <?php include("navbar.php") ?>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <form class="form" action="index.php" method="post" style="background-color: rgb(147,187,197,0.9);">
          <div align="center"><h2><b><i><img src="images/apple-touch.png" style="max-height: 35%; max-width: 35%; margin-left:;"></i></b></h2>
            <h4><b>Login</b></h4>
          </div>

          <hr>
          <!-- display form error messages  -->
          <?php include("messages.php") ?>
          <div class="form-group <?php echo isset($errors['username']) ? 'has-error' : '' ?>">
            <label class="control-label">User Number</label>
            <input type="text" name="username" id="password" v class="form-control" placeholder="Adm no./Teacher no./Parent no.">
            <?php if (isset($errors['username'])): ?>
              <span class="help-block"><?php echo $errors['username'] ?></span>
            <?php endif; ?>
          </div>
          <div class="form-group <?php echo isset($errors['password']) ? 'has-error' : '' ?>">
            <label class="control-label">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password">
            <?php if (isset($errors['password'])): ?>
              <span class="help-block"><?php echo $errors['password'] ?></span>
            <?php endif; ?>
          </div>
          <div class="form-group">
            <button type="submit" name="login_btn" class="btn btn-success">Login</button>
          </div>
          <p>Don't have an account? <a href="signup.php"><font color="green">Sign up</font></a></p>
        </form>
      </div>
    </div>
  </div>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
  <link rel="shortcut icon" href="images/fav.ico" type="images/fav.ico">
  <link rel="stylesheet" href="assets/css/style.css">
<?php include("footer.php") ?>