<?php
require_once('db.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Fetch the record to be updated
    $query = "SELECT * FROM book_form WHERE id = $id";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
}

// Check if form is submitted for update
if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];
    
    // Update the record in the database
    $updateQuery = "UPDATE book_form SET 
                    name = '$name', 
                    email = '$email', 
                    phone = '$phone', 
                    address = '$address', 
                    location = '$location', 
                    guests = '$guests', 
                    arrivals = '$arrivals', 
                    leaving = '$leaving' 
                    WHERE id = $id";
    mysqli_query($con, $updateQuery);
    
    // Redirect back to the display page after update
    header("Location: display.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center">Update Form</h2>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name']; ?>">
                            </div>
                            <!-- Add fields for other form elements (email, phone, etc.) here -->
                            <button type="submit" name="update" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
