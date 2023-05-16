<?php
$songname = filter_input(INPUT_POST,'songname');
$singer = filter_input(INPUT_POST,'singer');
$genre = filter_input(INPUT_POST,'genre');
$fullname = filter_input(INPUT_POST,'fullname');
$email = filter_input(INPUT_POST,'email');
$place = filter_input(INPUT_POST,'place');
$cardname = filter_input(INPUT_POST,'cardname');
$cardnumber = filter_input(INPUT_POST,'cardnumber');

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "index";

//Database connection
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
if(mysqli_connect_error()){
    die('Connect Error ( '.mysqli_connect_errno().')'
    . mysqli_connect_error());
}
else{
    $sql = "INSERT INTO form(songname, singer, genre, fullname, email, place, cardname, cardnumber)
        VALUES ('$songname', '$singer', '$genre', '$fullname', '$email', '$place', '$cardname', '$cardnumber')";
    
    if ($conn->query($sql)){
        echo "Your Request is Successful...";
    }
    else {"Error: ". $sql ."<br>".$conn->error;
    }
    $conn->close();
}
?>