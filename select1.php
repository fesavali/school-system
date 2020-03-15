<?php  
 if(isset($_POST["employee_id"]))  
 {  
      $output = '';  
      include("config.php");
      include 'userSignup.php';

      $query = "SELECT * FROM message WHERE id = '".$_POST["employee_id"]."'";  
      $result = mysqli_query($conn, $query);
      $query1 = "UPDATE message SET isread = '0' WHERE id = '".$_POST["employee_id"]."' AND to_user_id = '".$_SESSION['from_user_id']."'";
      mysqli_query($conn,$query1);
      $output .= '  
      <div class="table-responsive" style="text-align: left;">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           if ($row['subject'] != 'rep14ly1')
           {
           $output .= '  
            <b><h4>From&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp; </b>'.$row['sender'].'</h4>
            <b><h4>Subject&nbsp;:&nbsp;&nbsp; </b>'.$row['subject'].'</h4>
            <br>
            <u><h4><b>BODY</b></h4></u>
            <p style = "margin-left:40px; font-weight: normal;">'.$row['message'].'</p>
        <div align="right" style="float:right; margin-bottom:0px; margin-right:0px;">
          <small><em>'.$row['timestamp'].'</em></small>
        </div><hr><br>
                ';
          }
          else
          {
            if ($row['from_user_id']!=$_SESSION['from_user_id']) {
              $sender = $row['sender'];
            }
            else {
              $sender = 'You';
            }
           $output .= '  
            <h5><b><i>'.$sender.'</i></b></h5><br>
            <p style = "margin-left:40px; font-weight: normal;">'.$row['message'].'</p>
        <div align="right" style="float:right; margin-bottom:0px; margin-right:0px;">
          <small><em>'.$row['timestamp'].'</em></small>
        </div><hr><br>
                ';
          }
      }  
      $output .= "</table></div>";  
      echo $output;  
 }

 ?>
