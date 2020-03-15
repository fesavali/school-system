<?php 
    set_time_limit(0);
    include("config.php"); 
    include 'userSignup.php';
    if(empty($_SESSION['username'])) {
  header('location: index.php');
}
$query4=mysqli_query($conn,"SELECT * FROM manage WHERE admin_name = '$_SESSION['username']'");
  if(mysqli_num_rows($query4)==0)) {
  header('location: index.php');
}

$message = '';
if(isset($_POST["import"]))
{
 if($_FILES["database"]["name"] != '')
 {
  $array = explode(".", $_FILES["database"]["name"]);
  $extension = end($array);
  if($extension == 'sql')
  {
   $output = '';
   $count = 0;
   $file_data = file($_FILES["database"]["tmp_name"]);
   foreach($file_data as $row)
   {
    $start_character = substr(trim($row), 0, 2);
    if($start_character != '--' || $start_character != '/*' || $start_character != '//' || $row != '')
    {
     $output = $output . $row;
     $end_character = substr(trim($row), -1, 1);
     if($end_character == ';')
     {
      if(!mysqli_query($conn, $output))
      {
       $count++;
      }
      $output = '';
     }
    }
   }
   if($count > 0)
   {
    $message = '<label class="text-danger">There is an error in Database Import</label>';
   }
   else
   {
    $message = '<label class="text-success">Database Successfully Imported</label>';
   }
  }
  else
  {
   $message = '<label class="text-danger">Invalid File</label>';
  }
 }
 else
 {
  $message = '<label class="text-danger">Please Select Sql File</label>';
 }
}
?>

<!DOCTYPE html>  
<!DOCTYPE html>
<html>
 <head>
  <title>Update students portal</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <div style = "float: right; margin: 20px;"><a class = "btn right btn-success text-danger" href= "administration.php">Back</a></div>
 <body>
  <br />
  <div class="container">
   <h2 align="center">Update current database.</a></h2>
   <br />
   <form method="post" enctype="multipart/form-data">
    <p><label>Please Select File(SQL Format only)</label>
    <input type="file" name="database" /></p>
   <?php echo $message; ?>
    <br />
    <input type="submit" name="import" class="btn btn-info" value="Import" />
   </form>
   <br />
   <h3 align="center">Current database</h3>
   <br />
   <div class="table-responsive" id="refresh">
    <table class="table table-bordered table-striped">
     <tr>
      <th>Adm No</th>
      <th>Name</th>
      <th>Admission Date</th>
      <th>DOB</th>
      <th>Parent</th>
      <th>Tel</th>
     </tr>
     <?php
//            foreach($result as $row)
//     {
      echo '
      <tr>
       <td>Nil</td>
       <td>Nil</td>
       <td>Nil</td>
       <td>Nil</td>
       <td>Nil</td>
       <td>Nil</td>
      </tr>
      ';
//     }
$message = '';
     ?>
    </table>
   </div>
  </div>
 </body>
</html>
<script>
/*$(document).ready(function(){ 
 setInterval(function(){//setInterval() method execute on every interval until called clearInterval()
  $('#refresh').load("updates.php").fadeIn("slow");
  //load() method fetch data from fetch.php page
 }, 100);
 
});
</script>