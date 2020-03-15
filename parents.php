<?php include("config.php");
include 'userSignup.php';
if(empty($_SESSION['username'])) {
  header('location: index.php');
}

$pname = $_SESSION['username'];
$query3=mysqli_query($conn,"SELECT * FROM student_table WHERE parent_name = '$pname'");
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Parent's Account</title>
  <!-- Bootstrap CSS -->
  <meta http-equiv="Content-Type" content="text/html">
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">

      <script src="assets/jquery.min.js"></script>
        <script src="assets/Valid.js"></script>
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <link rel="stylesheet" href="assets/font-awesome.min.css">
      <script src="assets/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="assets/wana.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
  <link rel="shortcut icon" href="images/fav.ico" type="images/fav.ico">
  <!-- Custome styles -->
  <link rel="stylesheet" href="static/css/style.css">
              <script>$(function () {$('.dropdown-content li a').click(function (e) {$('.active').removeClass('active');});});</script>
</head>
<body>
   <div class="container">
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Parent Acccount</a>
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

  
<!--container close-->
<br/>
<br/>

<div class="container" style="height: auto; border-radius: 5px;">
    <div class="col-lm-10" style="background-color:  rgb(100, 105, 10, 0.5); height: auto; border-radius: 5px;">
        <div data-spy="scroll" class="tabbable-panel">
            <div class="tabbable-line">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#tab_default_1" data-toggle="tab">Profile</a>
                    </li>
                    <li>
                        <a href="#tab_default_2" data-toggle="tab">My Child</a>
                    </li>
                 <li>
                      <a ontoggle="myFunction()" data-toggle="tab" class="dropbtn">Messages</a>
                        <ul>
                          <div id="myDropdown" class="dropdown-content">
                            <li><a data-toggle="tab" href="#tab_default_5" data-toggle="tab">Compose</a></li>
                            <li><a href="#tab_default_6" data-toggle="tab">Inbox</a></li>
                            <li><a href="#tab_default_7" data-toggle="tab">Sent</a></li>
                          </div>
                        </ul>
                    </li>
           
      </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_default_1">
                        <div class="well well-sm">
                            <h4>Profile</h4>
                        </div>
                    <table class="table bio-table">
                        <tbody>
                            <tr>      
                                <td>Name</td>
                                <td>: XXXXX</td> 
                            </tr>
                            <tr>    
                                <td>Date of Birth</td>
                                <td>: dd mmmmmm yyyy</td>       
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>: Male</td>
                            </tr>
                            <tr>
                                <td>Work</td>
                                <td>: XXXX</td>
                            </tr>

                            <tr>
                                <td>Address</td>
                                <td>: XXXX XXXX</td>
                            </tr>
                            <tr>
                                <td>Phone No</td>
                                <td>: XXXX XXXX</td> 
                            </tr>
                            <tr>
                                <td>Citizenship</td>
                                <td>: XXXX</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                        <div class="tab-pane" id="tab_default_2">
                            <div class="well well-sm">
                                <h4>My Child</h4>
                            </div>
                                <div class="portlet-title">
                                    <div class="caption"><i class="icon-reorder"></i>My Child's Profile</div>
                                             <div style="float: right; margin-right:;">
    <a href="parentadd.php" class="btn btn-success">
      <span class="glyphicon glyphicon-plus"></span>
      Link another Student
    </a>
    </div></br>&nbsp;
                                  <?php include("messages.php") ?>
    <?php
if(mysqli_num_rows($query3)>0){
while($row = mysqli_fetch_assoc($query3)) {
echo '
<div align="center">
<table class="table table-bordered table-striped" style="width:70%; align:center;">
<thead>
          <tr>
            <th>Linked Student Name</th>
            <th>Form</th>
            <th>Details</th>
             <th>Fees Balances</th>
          </tr> 
          </thead>
        <tbody>
        <tr>
              <td>'.$row['student_name'].'</td>
              <td>'.$row['form'].'&nbsp;'.$row['Stream'].'</td>
              <td><a href="#">Check perfomance</a></td>
              <td>balances</td>
              
            </tr>
             </tbody>
      </table>
      </div>';
}
}else{
  echo "No Student linked to Your Account Yet";
}
      ?>

            </div>

  </div>
                        
<div class="tab-pane" id="tab_default_5">
<div class="well well-sm">
<h4>MESSAGES</h4>

<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption"><i class="icon-reorder"></i>Compose Message</div>
        <div class="tools">
            <a href="javascript:;" class="collapse" data-original-title="" title=""></a>
        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->


<form action="messaging.php" id="sending" class="form-horizontal" method="post" novalidate="novalidate">
<?php include 'compose.php';?>
</form>
    </div>
</div>
</div>
</div>



<div class="tab-pane" id="tab_default_6">
<div class="well well-sm">
<h4>MESSAGES</h4>
    <style>
        .portlet tr i.icon-star {color: #eceef0 !important;}
        .unread {font-weight: 800;}
        .portlet tr i.important {color: #fd7b12 !important;}
    </style>
    <div class="portlet box green">
        <div class="portlet-title">
            <div class="caption"><i class="icon-cogs"></i>My Inbox</div><br><br><br>
            <div class="tools">
                <a href="javascript:;" class="collapse" data-original-title="" title=""></a>
            </div>
        </div>
        <div class="portlet-body flip-scroll">
            <form action="#" class="form-horizontal" enctype="multipart/form-data" id="form1" method="post">
                <p></p><a data-toggle="tab" href="#tab_default_5" class="submit-button left">Compose</a></p><br>
                
 <?php include 'inbox.php'; ?>
                </table>
                <br>
                <div class="btn-group">
                    <p>
                        <input type="submit" value="Mark as Read" class="submit-button" name="command" onclick="return checkCheckBoxes();">
                        <input type="submit" value="Move to Trash" id="trash" class="cancel-button" name="trash" onclick="return checkCheckBoxes();">
                    </p>
                </div>
</form>        </div>
    </div>

</div>
</div>



<div class="tab-pane" id="tab_default_7">
<div class="well well-sm">
<h4>MESSAGES</h4>
<style>
    .portlet tr i.icon-star {
        color: #eceef0 !important;
    }
</style>
<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption"><i class="icon-cogs"></i>My Outbox</div>
        <div class="tools">
            <a href="javascript:;" class="collapse" data-original-title="" title=""></a>
        </div>
    </div>
    <div class="portlet-body flip-scroll">
        <form action="#" class="form-horizontal" enctype="multipart/form-data" id="form1" method="post">                               
          <p></p><a data-toggle="tab" href="#tab_default_5" class="submit-button left">Compose</a></p>

<?php include 'outbox.php'; ?>                <br>
                <div class="btn-group">
                    <p>
                        <input type="submit" value="Move to Trash" id="trash" class="cancel-button" name="trash" onclick="return checkCheckBoxes();">
                    </p>
                </div>
</form>    </div>
</div>
</div>
</div>



                
            </div>
        </div>
    </div>
</div>

</div><!--END CONTAINER-->
  </div>

   </br>&nbsp;
<footer>
                  <style style="text/css">
.bounce {
 height: 40px;  
 overflow: hidden;
 position: relative;
 background: #12170e;
 border-radius: 15px;
 float: center;
 color: white;
 border: 3px solid black;
}
.bounce p {
 position: absolute;
 width: 100%;
 height: 100%;
 margin: 0;
 line-height: 50px;
 text-align: center;
 /* Starting position */
 -moz-transform:translateX(50%);
 -webkit-transform:translateX(50%); 
 transform:translateX(50%);
 /* Apply animation to this element */  
 -moz-animation: bouncing-text 10s linear infinite alternate;
 -webkit-animation: bouncing-text 10s linear infinite alternate;
 animation: bouncing-text 10s linear infinite alternate;
}
/* Move it (define the animation) */
@-moz-keyframes bouncing-text {
 0%   { -moz-transform: translateX(50%); }
 100% { -moz-transform: translateX(-50%); }
}
@-webkit-keyframes bouncing-text {
 0%   { -webkit-transform: translateX(50%); }
 100% { -webkit-transform: translateX(-50%); }
}
@keyframes bouncing-text {
 0%   { 
 -moz-transform: translateX(50%); /* Browser bug fix */
 -webkit-transform: translateX(50%); /* Browser bug fix */
 transform: translateX(50%);    
 }
 100% { 
 -moz-transform: translateX(-50%); /* Browser bug fix */
 -webkit-transform: translateX(-50%); /* Browser bug fix */
 transform: translateX(-50%); 
 }
}
</style>

<div class="bounce">
<p>Made by Skyrank limited contact:info@skyrank.co.ke </p>
</div>
</footer>
    
   </body></html> <?php include("footer.php") ?>