<?php include("config.php");

$query = "SELECT * FROM message WHERE message_id = (SELECT adm_no FROM student_table WHERE student_name =
 '".$_SESSION['username']."')";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

$query1 = "SELECT * FROM message WHERE message_id = 7";
$statement1 = $connect->prepare($query1);
$statement1->execute();
$result1 = $statement1->fetchAll();

$query2 = "SELECT * FROM message WHERE message_id = 11";
$statement2 = $connect->prepare($query2);
$statement2->execute();
$result2 = $statement2->fetchAll();


$output = '                                <table class="table table-bordered table-striped  table-condensed flip-content">
              <div class="responsive container" style="white-space: nowrap;overflow: hidden;text-overflow: "----";"><table class="table table-bordered table-striped table-condensed table-responsive table-hover">
                    <thead class="">
                        <tr>
                            <th style="width: 5%;">
                                <div class="checker"><span><input type="checkbox" class="mail-checkbox" name="check" onclick="return checkAll(this);"></span></div>
                            </th>
                            <th style="width: 40%;">
                              Message  
                            </th>
                            <th style="width: 17%;">
                                From
                            </th>
                            <th style="width: 17%;">
                                Subject
                            </th>
                            <th style="width: 11%;">
                                Date
                            </th>

                        </tr>
                    </thead>
';


foreach($result as $row)
{

    $output .= '
    <tr>
        <td>
            <div class="checker"><span><input type="checkbox" class="mail-checkbox" name="check" onclick=""></span></div>
        </td>
        <td>'.$row['message'].'</td>
        <td>'.$row['sender'].'</td>
        <td>'.$row['subject'].'</td>
        <td>'.$row['timestamp'].'</td>

    </tr>
    ';
}

$output .= '</table>';

foreach($result1 as $row)
{

    $output .= '
    <tr>
        <td>
            <div class="checker"><span><input type="checkbox" class="mail-checkbox" name="check" onclick=""></span></div>
        </td>
        <td>'.$row['message'].'</td>
        <td>'.$row['sender'].'</td>
        <td>'.$row['subject'].'</td>
        <td>'.$row['timestamp'].'</td>

    </tr>
    ';
}

$output .= '</table>';

foreach($result2 as $row)
{

    $output .= '
    <tr>
        <td>
            <div class="checker"><span><input type="checkbox" class="mail-checkbox" name="check" onclick=""></span></div>
        </td>
        <td>'.$row['message'].'</td>
        <td>'.$row['sender'].'</td>
        <td>'.$row['subject'].'</td>
        <td>'.$row['timestamp'].'</td>

    </tr>
    ';
}

$output .= '</table>';

echo $output;


?>