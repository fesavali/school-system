<div class="container">
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">UserAccounts</a>
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
        <?php else: ?>
          <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </nav>