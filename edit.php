<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo "Update"; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>

    body {
            background-image: url('https://png.pngtree.com/background/20230525/original/pngtree-abstract-3d-modern-geometrical-wallpapers-4k-download-picture-image_2725809.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>



  </head>
<body >
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/practicephp/CurdOperations/home.php">PHP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="/practicephp/CurdOperations/Insert.php"><?php echo "InsertData"; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="/practicephp/CurdOperations/fetch.php"><?php echo "ViewData"; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/practicephp/CurdOperations/Modify.php"><?php echo "Modify"; ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "dbphp1";


                echo "<br>";
                echo '<div class="text-center">';
                echo "<h3 style='color: red;'>Update the Record Here</h3>";
                echo '</div>';
                echo "<br>";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Sorry we failed to connect: " . mysqli_connect_error());
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sno = $_POST['sno'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $sql = "UPDATE `details` SET `Name`='$name', `Email`='$email', `PhoneNumber`='$phone' WHERE `sno`='$sno'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo '<script>window.location.href = "/practicephp/CurdOperations/fetch.php";</script>'; // Redirect after success
        } else {
            echo '<div class="alert alert-danger" role="alert">Error updating record: ' . mysqli_error($conn) . '</div>';
        }
    }

    // Fetch data for pre-filling the form
    if(isset($_GET['id'])) {
        $sno = $_GET['id'];
        $sql = "SELECT * FROM `details` WHERE `sno`='$sno'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    } else {
        echo '<div class="alert alert-danger" role="alert">Invalid request</div>';
    }
    ?>


   
                    
                   
                   
                  
                  
    
    <div style="display: flex; justify-content: center; align-items: flex-start; min-height: 100vh; padding-top: 20vh;">

        <div style="background-color: #fff; padding: 40px; border-radius: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); width: 350px;">

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" style="text-align: center;">
                <input type="hidden" name="sno" value="<?php echo $row['sno']; ?>">


                <div style="margin-bottom: 20px; display: flex; justify-content: space-between; align-items: center;">
                    <label for="name" style="font-weight: bold;">Name</label>
                    <input type="text" id="name" name="name"   value="<?php echo $row['Name']; ?> "   style="border-radius: 5px; border: 1px solid #ccc; padding: 5px; width: calc(100% - 120px);">
                </div>

                <div style="margin-bottom: 20px; display: flex; justify-content: space-between; align-items: center;">
                    <label for="email" style="font-weight: bold;">Email</label>
                    <input type="email" id="email" name="email" value="<?php echo $row['Email']; ?>" style="border-radius: 5px; border: 1px solid #ccc; padding: 5px; width: calc(100% - 120px);">
                </div>

                <div style="margin-bottom: 20px; display: flex; justify-content: space-between; align-items: center;">
                    <label for="phone_number" style="font-weight: bold;">Phone number</label>
                    <input type="text" id="phone" name="phone" value="<?php echo $row['PhoneNumber']; ?>" style="border-radius: 5px; border: 1px solid #ccc; padding: 5px; width: calc(100% - 120px);">
                </div>

                <button type="submit" style="background-color: #4CAF50; color: white; padding: 8px 16px; border: none; border-radius: 5px; cursor: pointer;">Update</button>

            </form>

        </div>

    </div>
   
</body>
</html>
