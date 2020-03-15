
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
                    <div class="nav-item dropdown">
                      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown tab" style="background: #DADADA; height: 42.5px;box-shadow: inset 0 -8px 7px -9px rgba(0,0,0,.4),-2px -2px 5px -2px rgba(0,0,0,.4);">Messages</a>
                        <div class="dropdown-menu" style=" font-size: 15px;">
                            <a href="#tab_default_7" data-toggle="tab" class="dropdown-item">Compose</a>
                            <a href="#tab_default_8" data-toggle="tab" class="dropdown-item">Inbox</a>
                            <a href="#tab_default_9" data-toggle="tab" class="dropdown-item">Sent</a>
                        </div>
                    </div>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_default_1">
                        <div class="well well-sm">
                            <h4>Registratiom Info</h4>
                        </div>
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
                                <td>Date of Birth</td>
                                <td>: dd mmmmmm yyyy</td>       
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>: Male</td>
                            </tr>
                            <tr>
                                <td>Guardian</td>
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
                <select  class="form-control year" id="ddlacyear" name="AcademicYear" onchange="$:populateCitiesDropdown()"><option value="" selected="selected">--Select Academic Year--</option>
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
        <a href="http://portal.mksu.ac.ke/Student/PrintFeestructure" class="cancel-button right">Export to Pdf</a>
        </p></div>
    </div>
    </div>
    </div>
<script src="assets/jquery-1.js"></script>
<script type="text/javascript">
    $('#ddlacyear').change(function () {
        $('#ddlterms').empty();
            $.ajax({
                type: "POST",
                url: "/Student/Gettermsbyacy",
                datatype: "Json",
                data: { acyId: $('#ddlacyear').val() },
                success: function (data) {
                    var ddterms = $('#ddlterms');
                    ddterms.append("<option SELECTED DISABLED>--SELECT SESSION--</option>");
                    $.each(data, function (index, value) {
                       ddterms.append('<option value="' + value.names + '">' + value.names + '</option>');
                    });
                }
            });
    });
    $(document).ready(function () {
        $("#ddlterms").change(function () {
            $("#log").ajaxError(function (event, jqxhr, settings, exception) {
                alert(exception);
            });
            var yearSelected = $('#ddlacyear').val();
            var termSelected = $('#ddlterms').val();
            $.get('/Student/Resultsbyterm',
                { id: termSelected, ac: yearSelected}, function (data) {
                    $("#target").html(data);
                });
             });
        });
</script>
                

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
                                        <table class="table table-bordered table-striped table-condensed flip-content">
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
                
                <div class="tab-pane" id="tab_default_4">
                    <div class="well well-sm">
                        <h4>ADDRESS DETAILS</h4>
                    </div>
                    <table class="table bio-table">
                        <tbody>
                            <tr>
                                <td>   County:</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>   Sub-county:</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>   Ward:</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>   Postal code:</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>   Telephone No:</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>   Mobile No:</td>
                                <td>: </td>
                            </tr>
                        </tbody>
                    </table>
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


<form action="/Messages/Create" class="form-horizontal" method="post" novalidate="novalidate"><input name="__RequestVerificationToken" type="hidden" value="vkz0DhS4caQ5RX5Pzv-lspvy7oxXSt5jdCQNzRyaKwxXt5ZwsGuZW-HftFWMeTYTzKDIaddHhlPcDGEswQpfhgNserIvvJTyoSpFNvhPWbJ1u0jOXBrol5XhxUq8Vq8PjewmUcqTScBpmELL8LN1DQ2">            <div class="form-body">

                <div class="form-group">
                    <div class="col-md-6">
                        <input value="J17-9401-2016" class="form-control" id="sender_id" name="sender_id" readonly="True" type="hidden">
                    </div>
                </div>

                <div class="form-group flex">
                    <label class="control-label col-md-3" style="margin-top: 23px;">Receipient:</label>
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
                        <input value="06/13/2019 16:19:01" class="form-control" data-val="true" data-val-date="The field created_at must be a date." data-val-required="The created_at field is required." id="created_at" name="created_at" readonly="True" type="hidden">
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
                        <input type="submit" value="Send Message" class="submit-button" onclick="validateField()">
                        <a href="http://portal.mksu.ac.ke/Messages/Index" class="cancel-button">Back to Inbox</a>
                    </div>
                </div>
            </div>
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
            <form action="/Messages/Multiplecommands" class="form-horizontal" enctype="multipart/form-data" id="form1" method="post">
                <p></p><a href="#tab_default_5" class="submit-button left"><i class="icon-edit"></i> Compose</a></p>
                
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
                        <input type="submit" value="Mark as Read" class="submit-button" name="command" onclick="return checkCheckBoxes();">
                        <input type="submit" value="Move to Trash" class="cancel-button" name="command" onclick="return checkCheckBoxes();">
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
        <form action="/Messages/Sentcommands" class="form-horizontal" enctype="multipart/form-data" id="form1" method="post">                               
          <p></p><a href="#tab_default_5" class="submit-button left"><i class="icon-edit"></i> Compose</a></p>

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
                        <input type="submit" value="Move to Trash" class="cancel-button" name="command" onclick="return checkCheckBoxes();">
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

<?php }} ?>    

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

 //    Page.ClientScript.RegisterStartupScript(this.GetType(),"cle","windows.history.clear",true);
 </script> 
<!-- END JAVASCRIPTS -->  

</body>

</html>
