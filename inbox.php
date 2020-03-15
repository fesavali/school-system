<?php
ob_start();
include('select1.php');
echo $row['id'];
ob_end_clean();
?>
<script src="assets/Valid.js"></script>
 <div id="popup" class="modal fade sticky" data-backdrop="false">
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Message</h4>  
                </div>  
                <div class="modal-body" id="employee_detail" style="font-weight: normal;">  
                </div><br><br>
                <form action="#" id="message_send" name="message_send" class="form-horizontal" method="POST" novalidate="novalidate">
                <div class="form-body" style="width: 100%; margin: 5px;">
                <div class="form-group">
                    <div class="col-md-6" style="width: 98%;">
                        <textarea style="width: 97%; margin: 3px;" class="form-control" cols="20" id="message2" name="message2" rows="6"></textarea>
                        <span class="field-validation-valid" data-valmsg-for="body" data-valmsg-replace="true"></span>
                    </div>
                </div>
              <div class="form-actions fluid left">
                    <div class="col-md-offset-3 col-md-9 left">
                     <input style="margin: 3px;"  id="reply" type="submit" value=" Reply " class="btn btn-success sendmessage left"/>
                    </div>
                </div>
              </div>
                </form><br><br>  
                <div class="modal-footer"  style="position: relative;">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>  
           </div>  
      </div> 
 </div>

  <style>tr{font-weight: normal;}</style>  

<?php include("config.php");
include 'userSignup.php';
$cat2 = 'message';
$from_user_id = $_SESSION['from_user_id'];
$query = "SELECT * FROM `{$cat2}` WHERE status = '1' AND idd IN (SELECT MAX(idd) FROM message WHERE to_user_id = '".$from_user_id."' GROUP BY id)";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();


$output = '               <div class="responsive container" style="white-space: nowrap;overflow: hidden;text-overflow: "----";">
<table class="table table-bordered table-striped table-condensed table-responsive table-hover" id="recordsTable">
                    <thead class="">
                        <tr>
                            <th style="width: 5%;">
                                <div class="checker"><span><input type="checkbox" class="mail-checkbox" name="check" onclick="return checkAll(this);"></span></div>
                            </th>
                            <th style="width: 40%;">
                              Message  
                            </th>
                            <th style="width: 15%;">
                                From
                            </th>
                            <th style="width: 15%;">
                                Subject
                            </th>
                            <th style="width: 10%;">
                                Date
                            </th>

                            <th style="width: 5%; class="pull-right"">
                            View
                            </th>

                        </tr>
                    </thead>
';


foreach($result as $row)
{
    if ($row['isread'] == '0') {
      $quer = "UPDATE message SET isread = '0' WHERE id = '".$row['id']."'";
      mysqli_query($conn, $quer);
    }
  
    if ($row['subject'] == 'rep14ly1')
    {
      $query1 = "SELECT * FROM message WHERE subject != 'rep14ly1' AND id = '".$row['id']."' AND (from_user_id = '".$from_user_id."' OR to_user_id = '".$from_user_id."')";
      $statement1 = $connect->prepare($query1);
      $statement1->execute();
      $result1 = $statement1->fetchAll();
      foreach($result1 as $row1)
      {
      $subject = $row1['subject'];
      }
    }
    else{
      $subject = $row['subject'];
    }

    $bold = ($row['isread'] == 1 ? 'font-weight: bolder;  color: rgb(10, 30, 90);' : '');
    $output .= '
    <tr id = "tr_'.$row['idd'].'" style="'.($row['isread'] ? 'font-weight:bold;' : '').'">
        <td>
            <div class="checker"><span><input type="checkbox" class="mail-checkbox"  id = "del_'.$row['idd'].'"></span></div>
        </td>
        <td style="' . $bold . '">'.$row['message'].'</td>
        <td style="' . $bold . '">'.$row['sender'].'</td>
        <td style="' . $bold . '">'.$subject.'</td>
        <td style="' . $bold . '">'.$row['timestamp'].'</td>
        <td><button type="button" name="view" id="'.$row['id'].';" class="pull-right view_data"><i class="glyphicon glyphicon-eye-open"></i></button></td>
    </tr>
    ';
}

$output .= '</table>';


$output .= '</table></div>
<br>
<div class="btn-group">
    <p>
        <input type="submit" value="Mark as Read" class="submit-button" id = "command" name="command">
        <input type="submit" value="Delete" id="trash2" class="cancel-button delete_mess" name="trash2">
    </p>
</div>
';

echo $output;
?>

 <script>  
 $(document).ready(function(){
  
      $('.view_data').click(function(){  
           var employee_id = $(this).attr("id");  
           var post_id = $(this).attr("id");  
           $.ajax({  
                url:"select1.php",  
                method:"post",  
                data:{employee_id:employee_id},  
                success:function(data){  
                     $('#employee_detail').html(data);
                     $('#reply').attr('id', employee_id);  
                     $('#popup').modal("show");
                }  
           });
      }); 

//Deleting messages

$('#trash2').click(function(){  
    var post_arr = [];
    // Get checked checkboxes
    $('#recordsTable input[type=checkbox]').each(function() {
      if (jQuery(this).is(":checked")) {
        var id = this.id;
        var splitid = id.split('_');
        var postid = splitid[1];
        post_arr.push(postid);
      }
    });

    if(post_arr.length > 0){
if(confirm("Are you sure you want to delete this message?"))
{
        // AJAX Request
        $.ajax({
          url: 'trash.php',
          type: 'POST',
          data: { post_id: post_arr},
          success: function(response){
             $.each(post_arr, function( i,l ){

                // Remove row
                $("#tr_"+l).remove();
             });
          }
        });
      }
    }
else
{
    alert("Please select atleast one Message!");
}

  }); 




//Marking as read
      $('#command').click(function(){  
    var post_arr = [];
    // Get checked checkboxes
    $('#recordsTable input[type=checkbox]').each(function() {
      if (jQuery(this).is(":checked")) {
        var id = this.id;
        var splitid = id.split('_');
        var postid = splitid[1];
        post_arr.push(postid);
      }
    });

    if(post_arr.length > 0){
if(confirm("Mark as read?"))
{
        // AJAX Request
        $.ajax({
          url: 'read.php',
          type: 'POST',
          data: { post_id: post_arr},
          success: function(response){
             $.each(post_arr, function( i,l ){
             });
          }
        });
      }
    }
else
{
    alert("Please select atleast one Message!");
}

      }); 





// Replying the message
      $('#reply').click(function(event){
        event.preventDefault();
           var message_id = $(this).attr("id");
           var message = $('#message2').val();
        if($.trim($("#message2").val()) == '')
            {
                alert("You cannot send an empty message.");
                return false;
            }
            else
            {
           $.ajax({  
                url:"reply.php",  
                method:"post",  
                data:{message_id:message_id, message:message},  
                success:function(data){
                alert('Message sent successfully! \n'  + message_id + '\n'  + message); 
                },
                error: function(xhr, textStatus, error) {
                 alert('Message sending failed! \n'  + xhr.statusText + "!\n" + error + "!\n" + textStatus);
               }
           });
           }  
      }); 

 setInterval(function(){
$('#popup').on('hidden.bs.modal', function() {
 $('#default_6').load("inbox.php").fadeIn("slow");
}); 
 }, 1000);

 });
 
 </script>
