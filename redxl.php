<?php
 
    include 'simplexlsx.class.php';
 
    $xlsx = new SimpleXLSX( 'ggaalink.xlsx' );
    try {
       $conn = new PDO( "mysql:host=localhost;dbname=user-accounts", "root", "");
       $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }
    fopen($xlsx, "r");
    $stmt = $conn->prepare( "INSERT INTO countries (rank, country, population) VALUES (?, ?, ?, ?, ?)");
    $stmt->bindParam( 1, $rank);
    $stmt->bindParam( 2, $country);
    $stmt->bindParam( 3, $population);
    foreach ($xlsx->rows() as $fields)
    {
        $rank = $fields[0];
        $country = $fields[1];
        $population = $fields[2];
        $stmt->execute();
    }