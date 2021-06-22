<?php
include 'conn.php';


if (count($_POST) != 0) {
    extract($_POST);
    // making sql query
    $query = "INSERT INTO user (username,email) VALUES ('$username','$email')";
    // executing the query
    $result = mysqli_query($conn, $query);

    if ($result == true) {
        echo "inserted Successfully";
    } else {
        die('not inserted successfully');
    }
}


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>PHP Curd Operations</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <form method="post">
                    <div class="card">
                        <div class="card-header bg-dark">
                            <h1 class="text-center text-white">Insert Operation</h1>
                        </div> <br>
                        <div class="form-group">
                            <label for="username">Username : </label>
                            <input type="text" class="form-control" name="username" id="username" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email : </label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div> <br>
                        <button type="submit" name="submit" class="btn btn-success">submit</button>
                    </div>
                </form>
                <h5><a href="display.php"><input type="button" class="btn btn-primary" value="View User"></a></h5>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>