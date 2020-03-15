<?php
//index.php
$connect = mysqli_connect("localhost", "root", "", "user-accounts");
$message = '';

if(isset($_POST["upload"]))
{
 if($_FILES['student_reg']['name'])
 {
  $filename = explode(".", $_FILES['student_reg']['name']);
  if(end($filename) == "csv")
  {
   $handle = fopen($_FILES['student_reg']['tmp_name'], "r");
   while($data = fgetcsv($handle))
   {
    $adm_no = mysqli_real_escape_string($connect, $data[0]);
    $name = mysqli_real_escape_string($connect, $data[1]);  
    $admin_date = mysqli_real_escape_string($connect, $data[2]);

    $query = "UPDATE admin SET id = '$adm_no', admin_name = '$name', password = '$admin_date'";
    $query2 = "INSERT INTO  admin (id, admin_name, password) VALUES ('$adm_no', '$name', '$admin_date', '$birthdate'";
    mysqli_query($connect, $query);
    mysqli_query($connect, $query2);
   }
   fclose($handle);
   header("location: updates.php?updation=1");
  }
  else
  {
   $message = '<label class="text-danger">Please Select CSV File only</label>';
  }
 }
 else
 {
  $message = '<label class="text-danger">Please Select File</label>';
 }
}

if(isset($_GET["updation"]))
{
 $message = '<label class="text-success">The portal has been updated</label>';
}

$query = "SELECT * FROM admin";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Update students portal</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br />
  <div class="container">
   <h2 align="center">Update Mysql Database through Upload CSV File using PHP</a></h2>
   <br />
   <form method="post" enctype='multipart/form-data'>
    <p><label>Please Select File(Only CSV Formate)</label>
    <input type="file" name="student_reg" /></p>
    <br />
    <input type="submit" name="upload" class="btn btn-info" value="Upload" />
   </form>
   <br />
   <?php echo $message; ?>
   <h3 align="center">Current database</h3>
   <br />
   <div class="table-responsive">
    <table class="table table-bordered table-striped">
     <tr>
      <th>Adm No</th>
      <th>Name</th>
      <th>admin date</th>
      <th>DOB</th>
      <th>Index No</th>
      <th>Nationality</th>
     </tr>
     <?php
     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr>
       <td>'.$row["id"].'</td>
       <td>'.$row["admin_name"].'</td>
       <td>'.$row["password"].'</td>
      </tr>
      ';
     }
     ?>
    </table>
   </div>
  </div>
 </body>
</html>