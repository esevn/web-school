<?php 

$server = 'localhost';
$username = 'root';
$pass = '';
$database = 'blog_school';


$con = mysqli_connect($server, $username, $pass, $database);

if(!$con){
    echo mysqli_connect_error();
}

function getData($query) {
    global $con;
    $results = mysqli_query($con, $query);

    $rows = [];
    while($row = mysqli_fetch_assoc($results)){
        $rows[] = $row;
    };
    
    return $rows;
}

?>