<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT US</title>
    <!-- swiper cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>    
    <!-- custom css file  -->
    <link rel="stylesheet" href="style.css">
    <style>
        .booking .book-form{
            padding: 2rem;
            background:var(--light-bg)
        }
        .booking .book-form .flex{
         display:flex;
         flex-wrap:wrap;
         gap: 2rem;
        }
        .booking .book-form .flex .inputBox{
            flex:1 1 41rem;
        }
        .booking .book-form .flex .inputBox input{
            width:100%;
            padding:1.2rem 1.4rem;
            font-size:1.6rem;
            color:var(--light-black);
            text-transform:none;
            margin-top:1.5rem;
            border:var(--border);
        }
        .booking .book-form .flex .inputBox input:focus{
            background:var(--black);
            color:var(--white);

        }
        .booking .book-form .flex .inputBox input:focus::placeholder{
            color:var(--light-white);
        }
        
        .booking .book-form .flex .inputBox span{
         font-size:2rem;
         color:var(--light-black);

             
        }
        .booking .book-form .btn{
            margin-top:  2rem;
        }
        
    </style>
</head>
<body>
    <!-- header  -->
    <section class="header">
        <a href="home.php" class="logo"> KEVIN TRAVELS</a>
        <nav class="navbar">
            <a href="home.php">HOME</a>
            <a href="about.php">ABOUT</a>
            <a href="package.php">PACKAGE</a>
            <a href="book.php">BOOK</a>
        </nav> 

        <!-- menubar -->
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <div class="heading" style="background:url(kevin1.png) no-repeat">
        <h1>book now</h1>
    </div>
    <!-- booking section -->
    <section class="booking">
        <h1 class="heading-title"> book your trip </h1>
        <form action="book_form.php" method="post" class="book-form">

         <div class="flex">
            <div class="inputBox">
             <span> name:</span>   
             <input type="text" placeholder="enter your name" name="name">
            </div>
            <div class="inputBox">
             <span> email:</span>   
             <input type="email" placeholder="enter your email" name="email">
            </div>
            <div class="inputBox">
             <span> phone:</span>   
             <input type="number" placeholder="enter your number" name="phone">
            </div>
            <div class="inputBox">
             <span> address:</span>   
             <input type="text" placeholder="enter your address" name="address">
            </div>
            <div class="inputBox">
             <span> where:</span>   
             <input type="text" placeholder="place you want to visit" name="location">
            </div>
            <div class="inputBox">
             <span> how many :</span>   
             <input type="number" placeholder="number of  guests" name="guests">
            </div>
            <div class="inputBox">
             <span> arrivals:</span>   
             <input type="date"  name="arrivals">
            </div>
            <div class="inputBox">
             <span> leaving:</span>   
             <input type="date"  name="leaving">
            </div>
        </div>
            
        <!-- <input type="submit" value="submit"  class="btn" name="send"> -->
        <button onclick="alert('your tour is successfully booked')" type="submit" value="submit" class="btn" name="send">submit</button>

           <a href="crud.php" class="btn"> check your details</a>
        </form>


    </section>
    <!-- footer -->
<section class="footer">
    <div class="box-container">
        <div class="box">
           <h3> Quick links</h3>
           <a href="home.php"> <i class="fas fa-angle-right"></i>HOME</a>
           <a href="about.php"> <i class="fas fa-angle-right"></i>ABOUT</a>
            <a href="package.php"> <i class="fas fa-angle-right"></i>PACKAGE</a>
            <a href="book.php"> <i class="fas fa-angle-right"></i>BOOK</a> 
        </div>
        <div class="box">
           <h3> extra links</h3>
           <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
           <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
           <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
           <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>

        </div>
        <div class="box">
           <h3> contact info</h3>
           <a href="#"> <i class="fas fa-phone"></i> +91 7990359334</a>
           <a href="#"> <i class="fas fa-phone"></i> +91 9897929349</a>
           <a href="#"> <i class="fas fa-envelope"></i> kevindaniels2004@gmail.com</a>
           <a href="#"> <i class="fas fa-map"></i> Gujarat,India</a>
        </div>
        <div class="box">
            <h3>Follow us </h3>
            <a href="#"> <i class="fab fa-facebook"></i>Facebook</a>
            <a href="#"> <i class="fab fa-twitter"></i>Twitter</a>
            <a href="#"> <i class="fab fa-instagram"></i>Instagram</a>
            <a href="#"> <i class="fab fa-linkedin"></i>Linkedin</a>
        </div>
    </div>
    <div class="credit"> created by <span> KEVIN B </span> |ALL RIGHTS RESERVED</div>

</section>





















<!-- swiper js cdn -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- js file  -->
<script src="script.js"></script>

</body>
</html>