      <script src="assets/Valid.js"></script>
 <div id="popu" class="modal fade sticky" data-backdrop="false">
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Message</h4>  
                </div>  
                <div class="modal-body" id="sent_messages"  style="font-weight: normal;">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  

  <style>tr{font-weight: normal !important;}</style>


<?php include("config.php");
include 'userSignup.php';
$from_user_id = $_SESSION['from_user_id'];
$query = "SELECT * FROM message WHERE idd IN (SELECT MAX(idd) FROM message WHERE from_user_id = '".$from_user_id."' GROUP BY id) AND destination = '0'";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();



$output = '               <div class="responsive container" style="white-space: nowrap;overflow: hidden;text-overflow: "----";">
<table class="table table-bordered table-striped table-condensed table-responsive table-hover" id="recordsTable1">
                    <thead class="">
                        <tr>
                            <th style="width: 5%;">
                                <div class="checker"><span><input type="checkbox" class="mail-checkbox" name="check" onclick="return checkAll(this);"></span></div>
                            </th>
                            <th style="width: 40%;">
                              Message  
                            </th>
                            <th style="width: 15%;">
                                To
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

    $output .= '
    <tr id = "tr_'.$row['idd'].'">
        <td>
            <div class="checker"><span><input type="checkbox" class="mail-checkbox"  id = "del_'.$row['idd'].'"></span></div>
        </td>
        <td>'.$row['message'].'</td>
        <td>'.$row['reci'].'</td>
        <td>'.$subject.'</td>
        <td>'.$row['timestamp'].'</td>
        <td><button type="button" name="view" id="'.$row['id'].';" class="pull-right view_data"><i class="glyphicon glyphicon-eye-open"></i></button></td>
    </tr>
    ';
}

$output .= '</table>';


$output .= '</table></div>
<br>
<div class="btn-group">
    <p>
        <input type="submit" value="Delete" id="trash1" class="cancel-button right delete_mess" name="trash1" onclick="return checkCheckBoxes();">
    </p>
</div>
';

echo $output;
?>

 <script>  
 $(document).ready(function(){  
      $('.view_data').click(function(){  
           var employee_id = $(this).attr("id");  
           $.ajax({  
                url:"select.php",  
                method:"post",  
                data:{employee_id:employee_id},  
                success:function(data){  
                     $('#sent_messages').html(data);  
                     $('#popu').modal("show");
                }  
           });  
      }); 




//Deleting messages

$('#trash1').click(function(){  
    var post_arr = [];
    // Get checked checkboxes
    $('#recordsTable1 input[type=checkbox]').each(function() {
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
          url: 'trash1.php',
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


 setInterval(function(){
$('#popu').on('hidden.bs.modal', function() {
  $('#default_7').load("outbox.php").fadeIn("slow");
}); 
 }, 1000);



 });
 
 </script>
