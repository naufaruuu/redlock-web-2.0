<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Employees Table</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .container {
            margin-top: 20px;
            text-align: center;
        }

        .table-container {
            margin-top: 20px;
        }

        .header {
            text-align: center;
            margin: auto;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
    <a class="navbar-brand" href="#">
    <img src="https://static.wikia.nocookie.net/love-live/images/e/e3/Setsuna_Logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
    PT Naufal Sinergi Berkualitas
  </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link">Employee List<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="count.php">Employee Count<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <h1>Employees List</h1>
        <div class="table-container">
            <?php include('db.php'); ?>
        </div>
    </div>

    <footer class="text-center text-white fixed-bottom" style="background-color: #343a40;">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0);">
    <a class="text-white" href="https://www.linkedin.com/in/ahmad-naufal-abdurrohman-alfadli-84a824190/">Ahmad Naufal Abdurrohman Alfadli</a>
    - 2502014652
    </div>
    <!-- Copyright -->
  </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>