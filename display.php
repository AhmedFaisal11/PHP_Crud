<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>User Information</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-dark">
                    <thead class="thead thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">UserName</th>
                            <th scope="col">Email</th>
                            <th scope="col">Update</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>

                    <?php
                    include 'conn.php';

                    $query = "SELECT * FROM user";
                    $result = mysqli_query($conn, $query);

                    while ($res = mysqli_fetch_array($result)) {
                    ?>
                        <tbody>
                            <tr>
                                <th scope="row"><?php echo $res['id']; ?></th>
                                <td><?php echo $res['username']; ?></td>
                                <td><?php echo $res['email'];  ?></td>
                                <td><a href="update.php?id=<?php echo $res['id']; ?>"><input class="btn btn-success" type="submit" name="update" value="Update"></a></td>
                                <td><a href="delete.php?id=<?php echo $res['id']; ?>"><input class="btn btn-danger" type="submit" name="delete"  value="Delete"></a></td>
                            </tr>
                        </tbody>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>

    <div class="button text-center">
            <a href="index.php"><input class="btn btn-primary" type="button" value="Submit Form"></a>
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