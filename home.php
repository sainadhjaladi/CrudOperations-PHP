<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo "Curd Operations" ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-image: url('https://img.freepik.com/free-photo/abstract-digital-grid-black-background_53876-97647.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        /* Added CSS for centering the card */
        .center-card {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh; /* Adjust as needed */
        }
        /* Added CSS for smaller image size */
        .small-image {
            max-width: 70%; /* Change this value to adjust the size */
            height: auto;
        }
        /* Added CSS to make the card rectangular */
        .rectangular-card {
            width: 400px; /* Set a fixed width */
            max-width: 100%; /* Ensure it stays within container */
            overflow: hidden; /* Hide content that exceeds the dimensions */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/practicephp/CurdOperations/home.php"><?php echo"PHP"; ?></a>
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
                        <a class="nav-link" aria-current="page" href="/practicephp/CurdOperations/Modify.php"><?php echo "Modify"; ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container center-card">
        <div class="card text-center rectangular-card"> <!-- Added rectangular-card class -->
            <div class="card-body">
                <h3 class="card-title">CRUD Operations using PHP</h3>
            </div>
            <div class="container mt-4">
                <img src="php.jpg" alt="Your Image" class="img-fluid small-image">
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
