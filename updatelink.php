<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "user-accounts";


$conn = mysqli_connect("$hostname","$username","$password","$database") or die(mysql_error());

?>

<form name="import" method="post" enctype="multipart/form-data">
        <input type="file" name="file" /><br />
        <input type="submit" name="submit" value="Submit" />
</form>
<?php
if(isset($_POST["submit"]))
{
    $file = $_FILES['file']['tmp_name'];
    $handle = fopen($file, "r");
    $c = 0;
    while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
    {
        $progkey = $filesop[0];
        $grantkey = $filesop[1];
        $TOD = $filesop[2];
        $TDD=$filesop[3];
        $fund=$filesop[4];
        $orderkey=$filesop[5];
        $budget=$filesop[6];
        $precommit=$filesop[7];
        $commit=$filesop[8];
        $actuals=$filesop[9];
        $totalcommit=$filesop[10];
        $availbudget=$filesop[11];

        $sql = mysqli_query("INSERT INTO csv (FUNDED_PROG_KEY, GRANT_KEY, TOD, TDD, FUND, ORDER_KEY, BUDGET_ALLOC, PRE_COMMIT, COMMIT, ACTUALS, TOTAL_COMMIT,AVAILABLE_BUDGET) VALUES ('$progkey', '$grantkey','$TOD','$TDD','$fund','$orderkey','$budget','$precommit','$commit,'$actuals','$totalcommit','$availbudget')");


    }

        if($sql){
            echo "You database has imported successfully";
        }else{
            echo "Sorry! There is some problem.";
        }
}
?>