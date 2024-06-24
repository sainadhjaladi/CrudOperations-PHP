<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo "Curd Operations" ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Custom CSS */
        .custom-table {
            max-width: 80%; /* Adjust the width as needed */
            margin: 0 auto; /* Center the table */
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            border-radius: 10px;
            overflow: hidden;
            border-collapse: collapse; /* Ensure borders are collapsed */
        }

        .custom-table th, .custom-table td {
            border: 1px solid #000; /* Add borders to cells */
            padding: 8px; /* Add padding for better spacing */
        }

        .custom-table th {
            background-color: #4CAF50;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
        }

        .custom-table tbody tr:nth-child(odd) {
            background-color: #f8e9d9;
        }

        .custom-table tbody tr:nth-child(even) {
            background-color: #e9d8c4;
        }

        .custom-table tr:hover {
            background-color: #e0e0e0;
        }

        body {
            background-image: url('https://i.pinimg.com/736x/1f/82/c5/1f82c5dfd94d16698a99a37c4dc3805c.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }


    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/practicephp/CurdOperations/home.php"><?php echo "PHP"; ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/practicephp/CurdOperations/Insert.php"><?php echo "InsertData"; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/practicephp/CurdOperations/fetch.php"><?php echo "ViewData"; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/practicephp/CurdOperations/Modify.php"><?php echo "Modify"; ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-10">
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
                    } else {
                        // Fetching the records from the database using SQL command
                        $sql = "SELECT * FROM `details`";
                        $result = mysqli_query($conn, $sql);

                        // Find the number of records returned
                        $num = mysqli_num_rows($result);
                        echo "<br>";
                        echo '<div class="text-center">';
                        echo "<h3 style='color: red;'>No. of records present in the database is: $num</h3>";
                        echo '</div>';
                        echo "<br>";

                        // Display the rows returned by the SQL query in a table
                        if ($num > 0) {
                            echo '<div class="table-responsive">';
                            echo '<table class="table custom-table">';
                            echo '<thead><tr><th>Sno</th><th>Name</th><th>Email</th><th>PhoneNumber</th><th>Update</th></tr></thead>';
                            echo '<tbody>';
                            $count = 0;
                            while ($row = mysqli_fetch_assoc($result)) {
                                $count++;
                                echo '<tr>';
                                echo '<td>' . $row['sno'] . '</td>';
                                echo '<td>' . $row['Name'] . '</td>';
                                echo '<td>' . $row['Email'] . '</td>';
                                echo '<td>' . $row['PhoneNumber'] . '</td>';
                                // Edit button
                                echo '<td>';
                                echo '<a href="/practicephp/CurdOperations/edit.php?id=' . $row['sno'] . '" class="btn btn-info btn-sm me-2">Edit</a>';
                                // Delete button
                                echo '<a href="/practicephp/CurdOperations/delete.php?id=' . $row['sno'] . '" class="btn btn-danger btn-sm">Delete</a>';
                                echo '</td>';
                                echo '</tr>';
                            }
                            echo '</tbody></table></div>';
                        } else {
                            echo "No records to display";
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
