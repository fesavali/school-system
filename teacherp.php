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
  <!-- Bootstrap CSS -->
   <meta http-equiv="Content-Type" content="text/html">
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Teachers Page</title>
      <link rel="stylesheet" type="text/css" href="assets/wana.css">
      <script src="assets/jquery.min.js"></script>
      <script src="assets/Valid.js"></script>
      <link href="assets/font-awesome.min.css" rel="stylesheet" >
      <link href="static/css/style.css" rel="stylesheet" >
      <script src="assets/bootstrap.min.js"></script>
      <link href="images/fav.ico" rel="shortcut icon" type="images/fav.ico">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <!-- Custome styles -->
  <script>$(function () {$('.dropdown-content li a').click(function (e) {$('.active').removeClass('active');});});var doSth = function () { var $md = $("#my_div");}; setInterval(doSth, 1000)</script>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  
 </head>
<body>
 <div class="container">
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Teacher Account</a>
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
    <div class="container" style="margin-top: 30px;">
    <div class="profile-head">
        <!--col-md-4 col-sm-4 col-xs-12 close-->
        <div class="col-md- col-sm-4 col-xs-12">
            <img src="image/" class="img-responsive"/>
            <h6>@<?php
            $output1 = '';
            $output2 = '';
            $output3 = '';
            include("config.php");
            $query = "SELECT * FROM teacher_table WHERE teacher_no = '".$_SESSION['from_user_id']."'";
            $statement = $connect->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();
            foreach($result as $row){  $from_user_id = $row['teacher_no'];
            $string = $row['Name']; $substring = explode(" ", $string); $stringg = array_pop($substring); $substring = implode(' ', $substring); $str = mb_strtolower($stringg, "UTF-8"); echo $str; ?></h6>
        </div>
        <!--col-md-4 col-sm-4 col-xs-12 close-->
            <?php  $designation = $row['Designation']; $split1 = explode("/", $designation); $subject1 = array_pop($split1); $split1 = implode('/', $split1);
            $split2 = explode(" ", $split1); $subject2 = array_pop($split2); $split2 = implode(' ', $split2);
            ?>

        <div class="col-md-5 col-sm-5 col-xs-12">
            <?php $output1 .= '<h5>'.$row['Name'].'</h5>
            <p>'.$row['teacher_no'].'  '.$row['Name'].''.$split2.'</p>
            <ul>
                <li><span class="glyphicon glyphicon-briefcase"></span> '.$subject1.' and '.$subject2.'</li>
                <li><span class="glyphicon glyphicon-map-marker"></span>'.$row['Town'].'</li>
                <li><span class="glyphicon glyphicon-home"></span>P.O box '.$row['Box'].'</li>
                <li><span class="glyphicon glyphicon-phone"></span> <a href="#" title="call">'.$row['Tel'].'</a></li>
                <li><span class="glyphicon glyphicon-envelope"></span><a href="#" title="mail">'.$row['Mail'].'</a></li>
            </ul>';
echo $output1;
            ?>
        </div>
    </div>
    <!--profile-head close-->
</div>
<!--container close-->
<br/>
<br/>

<div class="container" style="height: auto;">
    <div class="col-lm-10" style="background-color:  rgb(100, 105, 10, 0.5); height: auto;">
        <div data-spy="scroll" class="tabbable-panel">
            <div class="tabbable-line">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#tab_default_1" data-toggle="tab">Registration Info </a>
                    </li>
                    <li>
                        <a href="#tab_default_2" data-toggle="tab">Academic Details</a>
                    </li>
                    <li>
                        <a href="#tab_default_3" data-toggle="tab">Fees Reports</a>
                    </li>
                    <li>
                        <a href="#tab_default_4" data-toggle="tab">Address Details</a>
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
                <div class="tab-content ">
                    <div class="tab-pane active" id="tab_default_1">
                        <div class="well well-sm">
                            <h4>Registration Info</h4>
                        </div>
                    <table class="table bio-table">
                        <tbody>
                            <tr>      
                                <td>Firstname</td>
                                <td>: <?php $string = $row['Name']; $substring = explode(" ", $string); $stringg = array_pop($substring); $substring = implode(' ', $substring); echo $substring;?></td> 
                            </tr>
                            <tr>    
                                <td>Lastname</td>
                                <td>: <?php  echo $stringg; ?></td>
                            </tr>
                            <?php $gender = ''; $male = $row['Male']; if ($male == 1){$gender = 'Male';} elseif ($male == 0) {$gender = 'Female';} else {$gender = 'Not specified';} $output2 .= ' <tr>    
                                <td>Date of Birth</td>
                                <td>: '.$row['BirthDate'].'</td>       
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>: '.$gender.'</td>
                            </tr>
                            <tr>
                                <td>Guardian</td>
                                <td>: '.$row['Name'].'</td>
                            </tr>
                            <tr>
                                <td>Parent&#39;s Name</td>
                                <td>: '.$row['Name'].'</td></td>
                            </tr>
                            <tr>
                                <td>Citizenship</td>
                                <td>: '.$row['Initials'].'</td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>';
echo $output2;
            ?>                
                <div class="tab-pane" id="tab_default_2">
                    <div class="well well-sm">
                        <h4>Academic details</h4>
                    </div>
                    <div class="portlet box green">
    <div class="portlet-title">
        <div class="caption"><i class="icon-reorder"></i>My Result Slip</div>
        <div class="tools">
            <a href="javascript:;" class="collapse" data-original-title="" title=""></a>
        </div>
    </div>
    <div class="portlet-body">
<form action="/" class="form-horizontal" method="get">
    <div class="form-body">
            <div class="form-group">
            <label class="control-label col-md-3">Academic Year</label>
            <div class="col-md-4">
                <select  class="form-control year" id="ddlacyear" name="AcademicYear" onchange="$:populateCitiesDropdown()">
                    <option value="" selected="selected">Year 8</option>
                    <option value="" selected="selected">Year 7</option>
                    <option value="" selected="selected">Year 6</option>
                    <option value="" selected="selected">Year 5</option>
                    <option value="" selected="selected">Year 4</option>
                    <option value="" selected="selected">Year 3</option>
                    <option value="" selected="selected">Year 2</option>
                    <option value="" selected="selected">Year 1</option>
                    <option value="" selected="selected">--Select Academic Year--</option>
</select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Term</label>
            <div class="col-md-4">
                <select class="form-control" id="ddlterms" name="Terms"><option value="" selected="selected">--Select Term--</option>
                <option value="Term1">First Term</option>
                <option value="Term2">Second Term</option>
                <option value="Term3">Third Term</option>
</select>
            </div>
        </div>
        </div>
</form>        <br>
        <div id="log">
        </div>
        <div id="target">
        </div>
        <div class="flex">
        <p>
        <input type="submit" value="View Result" class="submit-button">
        </p>
        </form>
        <p>
        <a href="" class="cancel-button right">Export to Pdf</a>
        </p></div>
  <br /><br />
  <div class="container" style="width:900px;">
   <h2 align="center">Morris.js chart with PHP & Mysql</h2>
   <h3 align="center">Last 10 Years Profit, Purchase and Sale Data</h3>   
   <br /><br />
   <div id="chart"></div>
  </div>




    </div>
    </div>
    </div>
                

                <div class="tab-pane" id="tab_default_3">
                    <div class="well well-sm">
                        <h4> FEES REPORTS</h4>
                    </div>
                            <div class="portlet box green">
                                <div class="portlet-title">
                                    <div class="caption"><i class="icon-cogs"></i>Fees Structure</div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse" data-original-title="" title=""></a>
                                    </div>
                                </div>
                                <div class="portlet-body flip-scroll">

                            <form action="/Student/LoadFeestructure" class="form-horizontal" method="get">            <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3" for="Stage">Stage</label>
                                                        <div class="col-md-6">
                                                            <select class="form-control" id="Stage" name="Stage"><option value="" selected="selected">-select- </option>
                                                              <option>FORM 1</option>
                                                              <option>FORM 2</option>
                                                              <option>FORM 3</option>
                                                              <option>FORM 4</option>
                                                                </select>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3" for="Semester">Term</label>
                                                        <div class="col-md-6">
                                                            <select class="form-control" id="semester" name="semester"><option value="" selected="selected">-select- </option>
                                                                <option>Whole Year</option>
                                                                <option>First Term</option>
                                                                <option>Second Term</option>
                                                                <option>Third Term</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <p>
                                                <input type="submit" value="View Fees" class="submit-button">
                                            </p>
                                        </div>
                            </form>
                                        <p>
                                            <a href="http://portal.mksu.ac.ke/Student/PrintFeestructure" class="cancel-button">Export to Pdf <i class="m-icon-swapright m-icon-white"></i></a>
                                        </p>
                                        <table class="table table-bordered table-striped  table-condensed flip-content">
                                            <thead class="flip-content">
                                                <tr>
                                                    <th>ACCOUNT</th>
                                                    <th>AMOUNT</th>
                                                </tr>
                                            </thead>



                                            <tbody><tr>
                                                <td><p><b>Total Amount:</b></p></td>
                                                <td colspan="3" class="text-right"><p><b>0.00</b></p></td>
                                            </tr>

                                        </tbody></table>

                                </div>
                            </div>
                    
                </div>
                
                <?php $output3 .= '<div class="tab-pane" id="tab_default_4">
                    <div class="well well-sm">
                        <h4>ADDRESS DETAILS</h4>
                    </div>
                    <table class="table bio-table">
                        <tbody>
                            <tr>
                                <td>   District</td>
                                <td>: '.$row['District'].'</td>
                            </tr>
                            <tr>
                                <td>   Town</td>
                                <td>: '.$row['Town'].'</td>
                            </tr>
                            <tr>
                                <td>   Location</td>
                                <td>: '.$row['Town'].'</td>
                            </tr>
                            <tr>
                                <td>   Sub-Location</td>
                                <td>: '.$row['TSCNo'].'</td>
                            </tr>
                            <tr>
                                <td>   Village</td>
                                <td>: '.$row['Other'].'</td>
                            </tr>
                            <tr>
                                <td>   Postal code</td>
                                <td>: '.$row['Box'].'</td>
                            </tr>
                            <tr>
                                <td>   Telephone No</td>
                                <td>: '.$row['Position'].'</td>
                            </tr>
                            <tr>
                                <td>   Mobile No</td>
                                <td>: '.$row['Family'].'</td>
                            </tr>
                        </tbody>
                    </table>
                </div>';
echo $output3;
            ?>                

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


<form action="messaging.php" id="sending" class="form-horizontal" method="POST"novalidate="novalidate">
<?php   $from_user_id = $row['teacher_no']; include 'compose.php';?>
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
                <p></p><a data-toggle="tab" href="#tab_default_5" class="submit-button left">Compose</a></p><br><br>
                <?php include 'inbox.php'; ?>
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
          <p></p><a data-toggle="tab" href="#tab_default_5" class="submit-button left">Compose</a></p><br>

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


<?php } ?>
                
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

</body></html>    <?php include("footer.php") ?>

<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'year',
 ykeys:['profit', 'purchase', 'sale'],
 labels:['Profit', 'Purchase', 'Sale'],
 hideHover:'auto',
 stacked:true
});
</script>