
<?php
if(isset($_POST['sub'])) {
    include 'localhost.php';
    $tex = $_POST['text'];
    $query = "INSERT INTO suggestionsite (sugg) VALUES ('$tex')";
    
    $query_run = mysql_query($query);
    if($query_run) {
       header('location:index2.php'); 
    }
}


?>