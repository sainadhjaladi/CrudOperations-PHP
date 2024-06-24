<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbphp1";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
}

//Check if ID parameter is present in the URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // SQL to delete a record
    $sql = "DELETE FROM `details` WHERE `sno`='$id'";
    $result = mysqli_query($conn, $sql);

    if($result) {
        // Record deleted successfully, redirect back to Modify.php
        echo '<script>window.location.href = "/practicephp/CurdOperations/Modify.php";</script>';
        //This line can be used or the below line can also be used
        // header("Location: Modify.php");
        // exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    echo "ID parameter is missing";
}




// Close connection
mysqli_close($conn);
?>
