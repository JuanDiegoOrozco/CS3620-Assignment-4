<?php
include 'dbConnect.php';
// database functions ************************************************

function fInsertToDatabase($asin,$title,$price) {

  $sql = "INSERT INTO dvdtitles (asin, title, price) VALUES ('$asin', '$title', $price)";

  // TODO: Fill in the rest of the function
    $db = fConnectToDatabase();
    $db->query($sql);
}

function fDeleteFromDatabase($deleteID) {

  $sql = "DELETE FROM dvdtitles WHERE asin = "."'".$deleteID."'";
  // TODO: Fill in the rest of the function
    $db = fConnectToDatabase();
    $db->query($sql);

}

function fListFromDatabase() {
    $db = fConnectToDatabase();
    $newLine = '<br>';
    $sql = 'SELECT * FROM dvdtitles;';
    echo ($newLine);
    $num = 1;
    echo('Showing Items in TABLE: dvdtitles');
    echo ($newLine);
    foreach($db->query($sql)as $row){
        echo('Item: '.$num);
        echo ($newLine);
        echo('-------------------------------------------');
        echo ($newLine);
        echo('ASIN:  '.$row['asin']."\t");
        echo ($newLine);
        echo('TITLE:  '.$row['title']."\t");
        echo ($newLine);
        echo('PRICE:  '.$row['price']."\t");
        echo ($newLine);
        echo('-------------------------------------------');
        echo ($newLine);
        $num++;
    }
}

function fInsertToDatabaseActors($fname,$lname) {

    $sql = "INSERT INTO dvdactors (fname, lname) VALUES ('$fname', '$lname')";

    // TODO: Fill in the rest of the function
    $db = fConnectToDatabase();
    $db->query($sql);
}

function fDeleteFromDatabaseActors($deleteID) {

    $sql = "DELETE FROM dvdactors WHERE actorID = ".$deleteID;
    // TODO: Fill in the rest of the function
    $db = fConnectToDatabase();
    $db->query($sql);

}

function fListFromDatabaseActors() {
    $db = fConnectToDatabase();
    $newLine = '<br>';
    $sql = 'SELECT * FROM dvdactors;';
    echo ($newLine);
    $num = 1;
    echo('Showing Items in TABLE: dvdactors');
    echo ($newLine);
    foreach($db->query($sql)as $row){
        echo('Item: '.$num);
        echo ($newLine);
        echo('-------------------------------------------');
        echo ($newLine);
        echo('ACTORID:  '.$row['actorID']."\t");
        echo ($newLine);
        echo('First Name:  '.$row['fname']."\t");
        echo ($newLine);
        echo('Last Name:  '.$row['lname']."\t");
        echo ($newLine);
        echo('-------------------------------------------');
        echo ($newLine);
        $num++;
    }
}