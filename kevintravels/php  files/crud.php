<?php
require_once('db.php');

// Fetch data from the database
$query = "SELECT * FROM book_form";
$result = mysqli_query($con, $query);

// Check if form is submitted for deletion
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $deleteQuery = "DELETE FROM book_form WHERE id = $id";
    mysqli_query($con, $deleteQuery);
    // Redirect back to this page after deletion
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetching data from travel website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center"></h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr class="bg-dark text-white">
                                <td>Id</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Phone</td>
                                <td>Address</td>
                                <td>Where</td>
                                <td>How many</td>
                                <td>Arrivals</td>
                                <td>Leaving</td>
                                <td>Update</td>
                                <td>Deleting</td>
                            </tr>
                            <?php
                            while($row=mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><?php echo $row['id'];?></td>
                                <td><?php echo $row['name'];?></td>
                                <td><?php echo $row['email'];?></td>
                                <td><?php echo $row['phone'];?></td>
                                <td><?php echo $row['address'];?></td>
                                <td><?php echo $row['location'];?></td>
                                <td><?php echo $row['guests'];?></td>
                                <td><?php echo $row['arrivals'];?></td>
                                <td><?php echo $row['leaving'];?></td>
                                <td><a href="update.php?id=<?php echo $row['id'];?>" class="btn btn-primary">Edit</a></td>
                                <td><a href="?deleteid=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
