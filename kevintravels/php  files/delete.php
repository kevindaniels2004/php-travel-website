<?php
require_once('db.php');

if(isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $query = "DELETE FROM book_form WHERE id = $id";
    mysqli_query($con, $query);
    // Redirect back to the page displaying data after deletion
    header("Location: index.php");
    exit;
}
?>