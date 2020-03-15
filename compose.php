<script>
function disableMenu1(){
  if(document.getElementById("receiver_id1").value!="0"){
      document.getElementById("receiver_id2").disabled = true;
      document.getElementById("receiver_id3").disabled = true;
  }
  else
  {
      document.getElementById("receiver_id1").disabled = false;
      document.getElementById("receiver_id2").disabled = false;
      document.getElementById("receiver_id3").disabled = false;
  }
}
function disableMenu2(){
  if (document.getElementById("receiver_id2").value!="0"){
      document.getElementById("receiver_id1").disabled = true;
      document.getElementById("receiver_id3").disabled = true;
  }
  else
  {
      document.getElementById("receiver_id1").disabled = false;
      document.getElementById("receiver_id2").disabled = false;
      document.getElementById("receiver_id3").disabled = false;
  }
}
function disableMenu3(){
  if (document.getElementById("receiver_id3").value!="0") {
      document.getElementById("receiver_id1").disabled = true;
      document.getElementById("receiver_id2").disabled = true;
  }
  else
  {
      document.getElementById("receiver_id1").disabled = false;
      document.getElementById("receiver_id2").disabled = false;
      document.getElementById("receiver_id3").disabled = false;
  }
}
</script>
 <div id="popupi" class="modal fade sticky" data-backdrop="false" style="">
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal" onclick="function start()">&times;</button>
                <progress id="progress" value="0"></progress>
                <div></div>
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal" onclick="function start()">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
<?php 
error_reporting(0);
include("config.php"); 
include 'userSignup.php';
$query = "SELECT * FROM student_table WHERE adm_no != '".$_SESSION['from_user_id']."' ORDER BY student_name ASC";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

$query1 = "SELECT * FROM teacher_table WHERE teacher_no != '".$_SESSION['from_user_id']."' ORDER BY Name ASC";
$statement1 = $connect->prepare($query1);
$statement1->execute();
$result1 = $statement1->fetchAll();


$query2 = "SELECT * FROM parent_table WHERE parent_no != '".$_SESSION['from_user_id']."' ORDER BY parent_name ASC";
$statement2 = $connect->prepare($query2);
$statement2->execute();
$result2 = $statement2->fetchAll();

$output = '

 <div class="form-body">
                <div class="form-group flex">
                    <label class="control-label col-md-3" style="margin-top: 23px;">Receipient:</label>
<!--  SELECT THE RECIPIENT TEACHERS CATEGORY-->
                    <div class="col-sd-10">
                      <label class="" for="textinput" style="font-size: 11px;">Teachers/Staff</label>
                        <select class="form-control" id="receiver_id1" required="required" onchange="disableMenu1();">
                        <option value="0" selected="selected">Select Recipient</option>
                        <option value="9">All Staff</option>
                        <option value="10">Teachers</option>
                        <option value="13">Non-Teaching Staff</option>
';
                        foreach($result1 as $row)
                        {

                            $output .= '
                                                <option value="'.$row['teacher_no'].'">'.$row['Name'].'</option>

                            ';
                        }

                        $output .= '</select>
                        <p id="demo" class="text-danger"></p>
                    </div>
<!-- END OF SELECT THE RECIPIENT TEACHERS CATEGORY-->
<!--SELECT THE RECIPIENT PARENTS CATEGORY-->
                    <div class="col-sd-10">
                      <label class="" for="textinput" style="font-size: 11px;">Parents</label>
                        <select class="form-control" id="receiver_id2" required="required" onchange="disableMenu2();">
                        <option value="0" selected="selected">Select Recipient</option>
                        <option value="12">All Parents</option>
                        <option value="1">Form 1 Parents</option>
                        <option value="2">Form 2 Parents</option>
                        <option value="3">Form 3 Parents</option>
                        <option value="4">Form 4 Parents</option>';
                        foreach($result2 as $row)
                        {

                            $output .= '
                                                <option value="'.$row['parent_no'].'">'.$row['parent_name'].'</option>
                            ';
                        }

                        $output .= '</select>
                        <p id="demo" class="text-danger"></p>
                    </div>
<!-- END OF SELECT THE RECIPIENT PARENTS CATEGORY-->
<!--  SELECT THE RECIPIENT STUDENTS CATEGORY-->
                    <div class="col-sd-10">
                      <label class="" for="textinput" style="font-size: 11px;">Students</label>
                        <select class="form-control" style="size:inherit;" id="receiver_id3" required="required" onchange="disableMenu3();">
                        <option value="0" selected="selected">Select Recipient</option>
                        <option value="11">All Students</option>
                        <option value="5">Form 1 Students</option>
                        <option value="6">Form 2 Students</option>
                        <option value="7">Form 3 Students</option>
                        <option value="8">Form 4 Students</option>';
                        foreach($result as $row)
                        {

                            $output .= '
                                                <option value="'.$row['adm_no'].'">'.$row['student_name'].'</option>

                            ';
                        }

                        $output .= '</select>
                        <p id="demo" class="text-danger"></p>
                    </div>
<!-- END OF SELECT THE RECIPIENT STUDENTS CATEGORY-->
<!--eND OF SELECT THE RECIPIENT-->
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3">Subject:</label>
                    <div class="col-md-4">
                        <input class = "form-control" id="subject" name="subject" type="text">
                        <span class="field-validation-valid" data-valmsg-for="subject" data-valmsg-replace="true"></span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3">Message Content:</label>
                    <div class="col-md-6">
                        <textarea class="form-control" cols="20" id="message" name="message" rows="6"></textarea>
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
                        <input type="submit" value="Send Message" class="submit-button sendmessage" id="tuma"/>
                        <a href="#tab_default_6" data-toggle="tab" class="cancel-button">Back to Inbox</a>
                    </div>
                </div>
            </div>
';


echo $output;
?>

 <script>  
$(document).ready(function(){
    $('#sending').on('submit', function(event){
        event.preventDefault();
        var makeAjaxCall = false;
        if( ($('#receiver_id1').val() == '0') && 
            ($('#receiver_id2').val() == '0') && 
            ($('#receiver_id3').val() == '0'))
        {
            alert("Please fill in the recipient!");
            return false;
        }

        if($.trim($("#message").val()) == '') {
                alert("You cannot send an empty message.");
                return false;
         }

        if($.trim($('#subject').val()) == '') {
         makeAjaxCall = confirm("Are you sure to send a message without a subject?");
        }
        else {makeAjaxCall = true}

        if(makeAjaxCall){
        // do your ajax call
              var receiver_id1 = $('#receiver_id1 :selected').val();
              var receiver_id2 = $('#receiver_id2 :selected').val();
              var receiver_id3 = $('#receiver_id3 :selected').val();
              var receiver_name1 = $('#receiver_id1 :selected').text();
              var receiver_name2 = $('#receiver_id2 :selected').text();
              var receiver_name3 = $('#receiver_id3 :selected').text();
              var from_user_name =  '<?php echo $from_user_name;?>';
              var from_user_id =  '<?php echo $from_user_id;?>';
              var subject = $.trim($("#message").val());
              var message = $('#message').val();
               $.ajax({
                url:"messaging.php",
                method:"POST",
                data:{receiver_id1:receiver_id1, receiver_id2:receiver_id2, receiver_id3:receiver_id3, receiver_name1:receiver_name1, receiver_name2:receiver_name2, receiver_name3:receiver_name3, from_user_name:from_user_name, from_user_id:from_user_id, subject:subject, message:message},
                  success:function(data){  
                       location.reload();
                       $('#employee_d').html(data);  
                       alert("Message sent successfully!");
                   },
                 error: function(xhr, textStatus, error) {
                     alert('Message sending failed! \n'  + xhr.statusText + "!\n" + error + "!\n" + textStatus + "!\nRecipient 1 : " + receiver_id1 + "\nRecipient 2 : " + receiver_id2 + "\nRecipient 3 : " + receiver_id3 + "\nRecipient name 1 : " + receiver_name1 + "\nRecipient name 2 : " + receiver_name2 + "\nRecipient name 3 : " + receiver_name3 + "\nMy Name : " + from_user_name + "\nMy No : " + from_user_id + "\nSubject : " + subject + "\nMessage : " + message);
                    }
                  });

        }
        return false;
    });

});
</script>
