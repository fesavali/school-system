
<?php
//index.php
$connect = mysqli_connect("localhost", "root", "", "user-accounts");
$message = '';

if(isset($_POST["upload"]))
{
 if($_FILES['product_file']['name'])
 {
  $filename = explode(".", $_FILES['product_file']['name']);
  if(end($filename) == "csv")
  {
   $handle = fopen($_FILES['product_file']['tmp_name'], "r");
   while($data = fgetcsv($handle))
   {
    $product_id = mysqli_real_escape_string($connect, $data[0]);
    $product_category = mysqli_real_escape_string($connect, $data[1]);  
    $product_name = mysqli_real_escape_string($connect, $data[2]);
    $product_price = "1";
    $query = "
     INSERT INTO student_table 
     (adm_no, student_name, form, stream)
      VALUES 
      ('$product_id', '$product_name', '$product_price', '$product_category')";
    mysqli_query($connect, $query);
   }
   fclose($handle);
   header("location: updatest.php?updation=1");
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
 $message = '<label class="text-success">Product Updation Done</label>';
}

$query = "SELECT * FROM student_table";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Update Mysql Database through Upload CSV File using PHP</title>
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
    <input type="file" name="product_file" /></p>
    <br />
    <input type="submit" name="upload" class="btn btn-info" value="Upload" />
   </form>
   <br />
   <?php echo $message; ?>
   <h3 align="center">Deals of the Day</h3>
   <br />
   <div class="table-responsive">
    <table class="table table-bordered table-striped">
     <tr>
      <th>adm</th>
      <th>name</th>
      <th>form</th>
      <th>Stream</th>
     </tr>
    <?php
     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr>
       <td>'.$row["adm_no"].'</td>
       <td>'.$row["student_name"].'</td>
       <td>'.$row["form"].'</td>
       <td>'.$row["Stream"].'</td>
      </tr>
      ';
     }
     ?> 
         </table>
   </div>
  </div>
 </body>
</html>


