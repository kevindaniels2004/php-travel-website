<?php
// connecting website to our data base

$connection = mysqli_connect('localhost','root','','book_db');
// connected sucessfully access granted 
// conditions to check all data redirect to form  
if(isset($_POST['send'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $address=$_POST['address'];
  $location =$_POST['location'];
  $guests=$_POST['guests'];
  $arrivals=$_POST['arrivals'];
  $leaving=$_POST['leaving'];
  
  $request="insert into book_form(name , email , phone , address , location , guests , arrivals , leaving) values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving')";
  
  mysqli_query($connection,$request);
  header('location:book.php');
  echo'YOUR TRIP IS BOOKED SUCCESSFULLY';
}

if (isset($_POST['submit'])) { 
  echo "your trip is sucessfully booked"; 
} 
?>