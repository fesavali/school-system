<?php include('config.php'); ?>
<?php 
include 'userSignup.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Sign up</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
  <link rel="shortcut icon" href="images/fav.ico" type="images/fav.ico">
  <!-- Custom styles -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body style="
  background-image: url('images/sch.jpg');
  background-size: cover;
  background-position: fixed;
  background-repeat: no-repeat;
">
  <?php include("navbar.php");?>

  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <form class="form" action="signup.php" method="post" enctype="multipart/form-data" style="background-color: rgb(147,187,197,0.9);">
         <div align="center">
            <h3><b>Register</b></h3>
          </div>
          <hr>
           <!-- display form error messages  -->
          <?php include("messages.php") ?>
         <div class="form-group <?php echo isset($errors['username']) ? 'has-error' : '' ?>">
  <label class="control-label">User Number</label>
  <input type="text" name="username" class="form-control" placeholder="Adm no./Teacher no./Parent no.">
  <?php if (isset($errors['username'])): ?>
    <span class="help-block"><?php echo $errors['username'] ?></span>
  <?php endif; ?>
</div>
<div class="form-group <?php echo isset($errors['password']) ? 'has-error' : '' ?>">
  <label class="control-label">Password</label>
  <input type="password" name="password" class="form-control" placeholder="Choose Password">
  <?php if (isset($errors['password'])): ?>
    <span class="help-block"><?php echo $errors['password'] ?></span>
  <?php endif; ?>
</div>
<div class="form-group <?php echo isset($errors['passwordConf']) ? 'has-error' : '' ?>">
  <label class="control-label">Confirm Password</label>
  <input type="password" name="passwordConf" class="form-control" placeholder="Confirm Password">
  <?php if (isset($errors['passwordConf'])): ?>
    <span class="help-block"><?php echo $errors['passwordConf'] ?></span>
  <?php endif; ?>
</div>
          <div class="form-group">
            <button type="submit" name="signup_btn" class="btn btn-success btn-block">Sign up</button>
          </div>
          <p>Aready have an account? <a href="index.php"><font color="green">Log in</font></a></p>
        </form>
      </div>
    </div>
  </div>
<?php include("footer.php") ?>
<script type="text/javascript" src="assets/js/display_profile_image.js"></script>
