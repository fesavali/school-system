
<?php 
include '../config/conn.php';
include '../config/reg.php';
if(empty($_SESSION['username'])) {
  header('location: ../index.php');
}

$username = $_SESSION['username'];
$sq= "SELECT * FROM alumni_p WHERE uname = '$username'";
$sql= "SELECT * FROM alumni WHERE username = '$username'";
 $results= mysqli_query($connection,$sq);
 $result= mysqli_query($connection,$sql);
?>



<html lang="en-US">
<head>
      <title>Sheikh Khalifa School</title>
      <meta charset="utf-8">
      <meta http-equiv="Content-Type" content="text/html">
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">

      <script src="assets/jquery.min.js"></script>
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <link rel="stylesheet" href="assets/font-awesome.min.css">
      <script src="assets/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="assets/wana.css">




</head>
<body>


  <?php 
if (mysqli_num_rows($results) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($results)) {
?>

    <div class="container" style="margin-top: 30px;">
    <div class="profile-head">
        <!--col-md-4 col-sm-4 col-xs-12 close-->
        <div class="col-md- col-sm-4 col-xs-12">
            <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['location']) .'" class="img-responsive"/>
            <h6>@'.$row['fname'].'</h6>';?>
        </div>
        <!--col-md-4 col-sm-4 col-xs-12 close-->

        <div class="col-md-5 col-sm-5 col-xs-12">
            <h5>Surname Firstname</h5>
            <p>ADM No  class  house</p>
            <ul>
                <li><span class="glyphicon glyphicon-briefcase"></span> Year attended to year of completion</li>
                <li><span class="glyphicon glyphicon-map-marker"></span> County</li>
                <li><span class="glyphicon glyphicon-home"></span> District, No <br/>    P.O box Postal code</li>
                <li><span class="glyphicon glyphicon-phone"></span> <a href="#" title="call">Telephone No</a></li>
                <li><span class="glyphicon glyphicon-envelope"></span><a href="#" title="mail">email@domain.com</a></li>
            </ul>
        </div>
    </div>
    <!--profile-head close-->
</div>
<!--container close-->
<br/>
<br/>

<div class="container" style="height: 820px;">
    <div class="col-lm-10" style="background-color:  rgb(100, 105, 10, 0.5); height: 800px;">
        <div data-spy="scroll" class="tabbable-panel">
            <div class="tabbable-line">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#tab_default_1" data-toggle="tab">Personal Info </a>
                    </li>
                    <li>
                        <a href="#tab_default_2" data-toggle="tab">For staff Education/ students Primary school</a>
                    </li>
                    <li>
                        <a href="#tab_default_3" data-toggle="tab">for staff Work Experience/ for students KCPE marks</a>
                    </li>
                    <li>
                        <a href="#tab_default_4" data-toggle="tab">Contact Details</a>
                    </li>
                    <li>
                        <a href="#tab_default_5" data-toggle="tab">Address Details</a>
                    </li>
                    <li>
                        <a href="#tab_default_6" data-toggle="tab">for staff Resume/For students blank</a>
                    </li>
                    <li>
                      <a ontoggle="myFunction()" data-toggle="tab" class="dropbtn">Messages</a>
                        <ul>
                          <div id="myDropdown" class="dropdown-content">
                            <li><a href="#tab_default_5" data-toggle="tab">Compose</a></li>
                            <li><a href="#tab_default_6" data-toggle="tab">Inbox</a></li>
                            <li><a href="#tab_default_7" data-toggle="tab">Sent</a></li>
                          </div>
                        </ul>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_default_1">
                        <div class="well well-sm">
                            <h4>PERSONAL DATA</h4>
                        </div>
                    <p align="right">
                        <button type="button" class="btn btn-default btn-sm">
                            <span class="glyphicon glyphicon-edit"></span> Edit</button>
                    </p>
                    <table class="table bio-table">
                        <tbody>
                            <tr>      
                                <td>Firstname</td>
                                <td>: XXXXX</td> 
                            </tr>
                            <tr>    
                                <td>Lastname</td>
                                <td>: XXXXX</td>
                            </tr>
                            <tr>    
                                <td>Date of Birthday</td>
                                <td>: dd mmmmmm yyyy</td>       
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>: Male</td>
                            </tr>
                            <tr>
                                <td>For teachers Spouse/ for students guardian</td>
                                <td>: XXXX</td>
                            </tr>

                            <tr>
                                <td>Father's Name</td>
                                <td>: XXXX XXXX</td>
                            </tr>
                            <tr>
                                <td>Mother's Name</td>
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
                        <h4>EDUCATIONAL BACKGROUND</h4>
                    </div>
                    <p align="right">
                        <button type="button" class="btn btn-default btn-sm">
                            <span class="glyphicon glyphicon-edit"></span> Edit</button>
                    </p>
                    <table class="table bio-table">
                        <tbody>
                            <tr>
                                <td> For staff only Primary School</td>
                                <td>: </td>
                                <td>Year Graduated</td>
                                <td>: </td> 
                            </tr>
                            <tr>
                                <td>High School</td>
                                <td>: </td>
                                <td>Year Graduated</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Under Graduate</td>
                                <td>: </td>
                                <td>Year Graduated</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Post Graduate</td>
                                <td>: </td>
                                <td>Year Graduated</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Master of Philosophy (MPhil)</td>
                                <td>: </td>
                                <td>Year Graduated </td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Doctor of Philosophy (PhD)</td>
                                <td>: </td>
                                <td>Year Graduated</td>
                                <td>: </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="tab-pane" id="tab_default_3">
                    <div class="well well-sm">
                        <h4> FOR STAFF ONLY EMPLOYMENT RECORD</h4>
                    </div>
                    <p align="right">
                        <button type="button" class="btn btn-default btn-sm">
                            <span class="glyphicon glyphicon-edit"></span> Edit</button>
                    </p>
                    <table class="table bio-table">
                        <tbody>
                            <tr>      
                                <td>Date</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Position</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Principle Activites</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Type of Activites</td>
                                <td>: </td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <br/>
                    
                    <table class="table bio-table">
                        <tbody>
                            <tr>
                                <td>Date</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Position</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Principle Activites</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Type of Activites</td>
                                <td>: </td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <br/>
                    
                    <table class="table bio-table">
                        <tbody>
                            <tr>      
                                <td>Date</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Position</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Principle Activites</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Type of Activites</td>
                                <td>: </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="tab-pane" id="tab_default_4">
                    <div class="well well-sm">
                        <h4> FOR STAFF OFFICIAL AND PERSONAL CONTACTS</h4>
                    </div>
                    <p align="right">
                        <button type="button" class="btn btn-default btn-sm">
                            <span class="glyphicon glyphicon-edit"></span> Edit</button>
                    </p>
                    <table class="table bio-table">
                        <tbody>
                            <tr>
                                <td>Office Telephone Number</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Office Mobile Phone</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Official Email Address</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Personal Mobile Phone</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Personal Email Address </td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Home Phone</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Facebook Account</td>
                                <td>: </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="tab-pane" id="tab_default_5">
                    <div class="well well-sm">
                        <h4>ADDRESS DETAILS</h4>
                    </div>
                    <p align="right">
                        <button type="button" class="btn btn-default btn-sm">
                            <span class="glyphicon glyphicon-edit"></span> Edit</button>
                    </p>
                    <table class="table bio-table">
                        <thead>
                            <tr>
                                <th colspan="2">Present Residential Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>   County</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>   Sub-county</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>   Ward</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>   Postal code</td>
                                <td>: </td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <br/>

                    <table class="table bio-table">
                        <thead>
                            <tr>
                                <th colspan="2">Permanent Residential Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>   Plot No / Door No / Part No / Block No</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>   Street Name</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>   County</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>   Sub-county</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>   Ward</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>   Postal code</td>
                                <td>: </td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
                
                <div class="tab-pane" id="tab_default_6">
                    <div class="well well-sm">
                        <h4>ADDRESS DETAILS</h4>
                    </div>
                    <p align="right">
                        <button type="button" class="btn btn-default btn-sm">
                            <span class="glyphicon glyphicon-edit"></span> Edit</button>
                    </p>
                    <div class="row">
                        <div class="col-md-5 col-md-offset-3">
                            <form class="form-horizontal" role="form">
                                <fieldset>
                                <!-- Form Name -->
                                    <legend>Address Details</legend>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-sm-5 control-label" for="textinput">County</label>
                                        <div class="col-sm-10">
                                            <input type="text" placeholder="County" class="form-control"  style="font-size: 14px;">
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-sm-10 control-label" for="textinput">Sub-county</label>
                                        <div class="col-sm-10">
                                            <input type="text" placeholder="Sub-county" class="form-control" style="font-size: 14px;">
                                        </div>
                                        <label class="col-sm-5 control-label" for="textinput">Ward</label>
                                        <div class="col-sm-10">
                                            <input type="text" placeholder="Ward" class="form-control" style="font-size: 14px;">
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-sm-10 control-label" for="textinput">Postal code</label>
                                        <div class="col-sm-10">
                                            <input type="text" placeholder="Postal code" class="form-control" style="font-size: 14px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <div class="pull-right">
                                                <button type="submit" class="btn btn-default"  style="font-size: 15px;">Cancel</button>
                                                <button type="submit" class="btn btn-primary"  style="font-size: 15px; margin-left: 10px;">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                        
                                </fieldset>
                            </form>
                        </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                    
                </div>



<div class="tab-pane" id="tab_default_7">
<div class="well well-sm">
<h4>MESSAGES</h4>
<div class="panel panel-content">
    <div class="portlet-title">
        <div class="caption"><i class="icon-reorder"></i>Compose Message</div>
        <div class="tools">
            <a href="javascript:;" class="collapse" data-original-title="" title=""></a>
        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
<form action="/Messages/Create" class="form-horizontal" method="post" novalidate="novalidate"><input name="__RequestVerificationToken" type="hidden" value="">            <div class="form-body">

                <div class="form-group">
                    <div class="col-md-6">
                        <input value="J17-9401-2016" class="form-control" id="sender_id" name="sender_id" readonly="True" type="hidden">
                    </div>
                </div>
                <div class="row">
<div class="form-inline">
                <div class="form-group">
                    <label class="control-label col-md-3">Receipient:</label>
<!--  SELECT THE RECIPIENT TEACHERS CATEGORY-->
                    <div class="col-md-4">
                      <label class="" for="textinput" style="font-size: 11px;">Teachers</label>
                        <select class="form-control" id="receiver_id" name="receiver_id" required="required"><option value="0" selected="selected">Select Receipient</option>
<option value="E35-11278-2017">All Teachers</option>
<option value="E35-11278-2017">Zipporah Muthoni Mwai</option>
<option value="0086">Zipporah Mwalimu</option>
<option value="9431">Zipporah Mwende Mbithi</option>
</select>
                        <p id="demo" class="text-danger"></p>
                    </div>
<!-- END OF SELECT THE RECIPIENT TEACHERS CATEGORY-->
<!--SELECT THE RECIPIENT PARENTS CATEGORY-->
                    <div class="col-md-4">
                      <label class="" for="textinput" style="font-size: 11px;">Parents</label>
                        <select class="form-control" id="receiver_id" name="receiver_id" required="required"><option value="0" selected="selected">Select Receipient</option>
<option value="E35-11278-2017">All Parents</option>
<option value="E35-11278-2017">Zipporah Muthoni Mwai</option>
<option value="0086">Zipporah Mwalimu</option>
<option value="9431">Zipporah Mwende Mbithi</option>
</select>
                        <p id="demo" class="text-danger"></p>
                    </div>
<!-- END OF SELECT THE RECIPIENT PARENTS CATEGORY-->
<!--SELECT THE RECIPIENT STUDENTS CATEGORY-->
                    <div class="col-md-4">
                      <label class="" for="textinput" style="font-size: 11px;">Students</label>
                        <select class="form-control" id="receiver_id" name="receiver_id" required="required"><option value="0" selected="selected">Select Receipient</option>
<option value="E35-11278-2017">All Students</option>
<option value="E35-11278-2017">Zipporah Muthoni Mwai</option>
<option value="0086">Zipporah Mwalimu</option>
<option value="9431">Zipporah Mwende Mbithi</option>
</select>
                        <p id="demo" class="text-danger"></p>
                    </div>
<!--eND OF SELECT THE RECIPIENT-->
                </div>
              </div>
            </div>

                <div class="form-group">
                    <label class="control-label col-md-3">Subject:</label>
                    <div class="col-md-4">
                        <input class="form-control" id="subject" name="subject" type="text">
                        <span class="field-validation-valid" data-valmsg-for="subject" data-valmsg-replace="true"></span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3">Message Content:</label>
                    <div class="col-md-6">
                        <textarea class="wysihtml5 form-control" cols="20" id="body" name="body" rows="6"></textarea>
                        <span class="field-validation-valid" data-valmsg-for="body" data-valmsg-replace="true"></span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6">
                        <input value="06/11/2019 09:45:13" class="form-control" data-val="true" data-val-date="The field created_at must be a date." data-val-required="The created_at field is required." id="created_at" name="created_at" readonly="True" type="hidden">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3">Mark Important:</label>
                    <div class="col-md-6">
                        <select class="list-box tri-state" id="is_important" name="is_important"><option selected="selected" value="">Not Set</option>
<option value="true">True</option>
<option value="false">False</option>
</select>
                        <span class="field-validation-valid" data-valmsg-for="is_important" data-valmsg-replace="true"></span>
                    </div>
                </div>

                <div class="form-actions fluid">
                    <div class="col-md-offset-3 col-md-9">
                        <input type="submit" value="Send Message" class="btn blue" onclick="validateField()">
                        <a href="#tab_default_8" class="btn red">Back to Inbox</a>
                    </div>
                </div>
            </div>
</form>
    </div>
</div>
</div>
</div>



<div class="tab-pane" id="tab_default_8">
<div class="well well-sm">
<h4>MESSAGES</h4>
    <style>
        .portlet tr i.icon-star {
            color: #eceef0 !important;
        }

        .unread {
            font-weight: 800;
        }

        .portlet tr i.important {
            color: #fd7b12 !important;
        }
    </style>
    <div class="portlet box red">
        <div class="portlet-title">
            <div class="caption"><i class="icon-cogs"></i>My Inbox</div>
            <div class="tools">
                <a href="javascript:;" class="collapse" data-original-title="" title=""></a>
            </div>
        </div>
        <div class="portlet-body flip-scroll">
            <form action="/Messages/Multiplecommands" class="form-horizontal" enctype="multipart/form-data" id="form1" method="post">                <p>
                    <a href="#tab_default_7" class="btn blue"><i class="icon-edit"></i> Compose</a>
                </p>
                <table class="table table-bordered table-striped table-condensed flip-content">
                    <thead class="flip-content">
                        <tr>
                            <th class="inbox-small-cells">
                                <div class="checker"><span><input type="checkbox" class="mail-checkbox" name="check" onclick="return checkAll(this);"></span></div>
                            </th>
                            <th></th>
                            <th class="view-message hidden-xs">
                                From
                            </th>
                            <th class="view-message">
                                Subject
                            </th>
                            <th class="view-message text-left">
                                Date
                            </th>

                        </tr>
                    </thead>

                </table>
                <br>
                <div class="btn-group">
                    <p>
                        <input type="submit" value="Mark as Read" class="btn blue" name="command" onclick="return checkCheckBoxes();">
                        <input type="submit" value="Move to Trash" class="btn red" name="command" onclick="return checkCheckBoxes();">
                    </p>
                </div>
</form>        </div>
    </div>

    <script>
        function checkCheckBoxes() {
            var c = document.getElementsByTagName('input');
            for (var i = 0; i < c.length; i++) {
                if (c[i].type == 'checkbox' && c[i].checked == true) {
                    return true;
                }
            }
            // Nothing has been checked
            alert("Please select atleast one Message:");
            return false;
        }
        function checkAll(bx) {
            var cbs = document.getElementsByTagName('input');
            for (var i = 0; i < cbs.length; i++) {
                if (cbs[i].type == 'checkbox') {
                    cbs[i].checked = bx.checked;
                }
            }
        }
    </script>
</div>
</div>



<div class="tab-pane" id="tab_default_9">
<div class="well well-sm">
<h4>MESSAGES</h4>
<style>
    .portlet tr i.icon-star {
        color: #eceef0 !important;
    }
</style>
<div class="portlet box red">
    <div class="portlet-title">
        <div class="caption"><i class="icon-cogs"></i>My Outbox</div>
        <div class="tools">
            <a href="javascript:;" class="collapse" data-original-title="" title=""></a>
        </div>
    </div>
    <div class="portlet-body flip-scroll">
        <form action="/Messages/Sentcommands" class="form-horizontal" enctype="multipart/form-data" id="form1" method="post">                <p>
                    <a href="#tab_default_7" class="btn blue"><i class="icon-edit"></i> Compose</a>
                </p>
                <table class="table table-bordered table-striped table-condensed flip-content">
                    <thead class="flip-content">
                        <tr>
                            <th class="inbox-small-cells">
                                <div class="checker"><span><input type="checkbox" class="mail-checkbox" name="check" onclick="return checkAll(this);"></span></div>
                            </th>
                            <th></th>
                            <th class="view-message hidden-xs">
                                To
                            </th>
                            <th class="view-message">
                                Subject
                            </th>
                            <th class="view-message text-left">
                                Date
                            </th>

                        </tr>
                    </thead>

                </table>
                <br>
                <div class="btn-group">
                    <p>
                        <input type="submit" value="Move to Trash" class="btn red" name="command" onclick="return checkCheckBoxes();">
                    </p>
                </div>
</form>    </div>
</div>
<script>
    function checkCheckBoxes() {
        var c = document.getElementsByTagName('input');
        for (var i = 0; i < c.length; i++) {
            if (c[i].type == 'checkbox' && c[i].checked == true) {
                return true;
            }
        }
        // Nothing has been checked
        alert("Please select atleast one Message:");
        return false;
    }
    function checkAll(bx) {
        var cbs = document.getElementsByTagName('input');
        for (var i = 0; i < cbs.length; i++) {
            if (cbs[i].type == 'checkbox') {
                cbs[i].checked = bx.checked;
            }
        }
    }
</script>
</div>
</div>



                
            </div>
        </div>
    </div>
</div>


<div class="col-sm-4">
    <div class="panel panel-default">
        <div class="menu_title">
            <b>Employee Info</b>
            <p>Sheikh Khalifa Bin Zayed Al Nahyan Sec and Tech School</p>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="email">Name:</label>
                        <p>XXXX XXXX </p>
                    </div>
                    <div class="form-group">
                        <label for="email">Emp ID:</label>
                        <p>0000</p>
                    </div>
                    <div class="form-group">
                        <label for="email">Data of Joining:</label>
                        <p>dd-mm-yyyy</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<script>  
    function validateField() {
    var x, text;
        x = document.getElementById("receiver_id").value;

    if (x == "" || x == null) {
        text = "Please fill in this field.";
    }
    document.getElementById("demo").innerHTML = text;
   
    }
</script>

</div><!--END CONTAINER-->

    <!-- BEGIN FOOTER -->
    <div class="page-footer" style="background-color: #2e3091;">
        <div class="page-footer-inner">
            <p style="color: white;">© 2019 - Skyrank Limited</p>
        </div>
        <div class="footer-tools">
            <span class="go-top">
                <i class="icon-angle-up"></i>
            </span>
        </div>
    </div>
    <!-- END FOOTER -->

<script>
    jQuery(document).ready(function () {
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        //QuickSidebar.init(); // init quick sidebar
        //Demo.init(); // init demo features
        ComponentsPickers.init();
        ComponentsDropdowns.init();
    });
    var timer = 0;
    function set_interval() {
        timer = setInterval("auto_logout()", 9000000000);
        // the figure '10000' above indicates how many milliseconds the timer be set to.
        // Eg: to set it to 5 mins, calculate 5min = 5x60 = 300 sec = 300,000 millisec.
        // So set it to 300000
    }

    function reset_interval() {
        if (timer != 0) {
            clearInterval(timer);
            timer = 0;
            timer = setInterval("auto_logout()", 900000);
        }
    }

    function auto_logout() {
        document.getElementById('logoutForm').submit();
    }

</script>


<script type="text/javascript">
     function preventBack() {
         window.history.forward();
     }
     setTimeout("preventBack()", 0);

     window.onunload=function() {
         null
     };

 </script> 

</body>
</html>