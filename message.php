<!DOCTYPE html>
<html>
<head>
<title>Blog</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Cabin Sketch' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Alegreya Sans' rel='stylesheet'>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>


img {
  width: 100%;
  height: 100%;
}
body {
  margin: 0;
  background-color: #f1f1f1;
  font-family: Arial, Helvetica, sans-serif;
}

#navbar {
font-family: 'Alegreya Sans';font-size: 22px;
  background-color: #333;
  position: fixed;
  top: -50px;
  width: 97.5%;
  display: block;
  transition: top 0.3s;
background-image: linear-gradient(to bottom, #4285F4,cyan);
border: 3px solid #000000;
  border-radius: 25px;
margin-left: auto;
  margin-right: auto;
 
}

#navbar a {
  float: left;
  display: block;
  color: #000000;
  text-align: center;
  padding: 15px;
  text-decoration: none;
  font-size: 17px;
}

#navbar a:hover {
  background-color: #ffffff;
  color: black;
border-radius: 25px;
font-family: 'Cabin Sketch';font-size: 22px;
}



* {
  box-sizing: border-box;
}

/* Add a gray background color with some padding */
body {
  font-family: Arial;
  padding: 20px;
  background-image: linear-gradient(to right, #4285F4,cyan);
}

/* Header/Blog Title */
.header {
  padding: 30px;
  font-size: 40px;
  text-align: center;
  background: white;
  border-radius: 25px;
  background: #787878;
  border: 3px solid #ffffff;
  padding: 20px; 
 
  margin-left: auto;
  margin-right: auto;
  font-family: 'Cabin Sketch';font-size: 22px;
  font-size: 22px;
  background-image: linear-gradient(to top, white,#4285F4);
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  padding-left: 20px;
}

/* Fake image */


/* Add a card effect for articles */
.card {
   background-color: white;
   padding: 20px;
   margin-top: 20px;
   border-radius: 25px;
   border: 3px solid #C0C0C0;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 30px;
  font-size: 40px;
  text-align: center;
  background: white;
  border-radius: 25px;
  background: #787878;
  border: 3px solid #ffffff;
  padding: 20px; 
  margin-left: auto;
  margin-right: auto;
  margin-top: 20px;
  margin-bottom: 20px;
font-family: 'Alegreya Sans';font-size: 22px;
  font-size: 22px;
  background-image: linear-gradient(to top, white,#4285F4);
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}
#rcorners {
  border-radius: 25px;
  background: #787878;
  border: 5px solid #505050;
  padding: 20px; 
  width: 80%;
  height: 100%;
  margin-left: auto;
  margin-right: auto;
  font-family: "Sofia";
  font-size: 22px;
  background-image: linear-gradient(to bottom, white,#787878); 
}
</style>
</head>
<body>
<div id="navbar">
  <a href="Home.html"><i class="fa fa-globe"> Home</i></a>
  <a href="Blog.html"><i class="fa fa-align-left"> Blog</i></a>
  <a href="message.php"><i class="fa fa-align-center"> User's Blog</i></a>
  <a href="contact.php"><i class="fa fa-align-right"> Write something!</i></a>
  <a href="#"><i class="fa fa-angle-double-up">Back to top</i></a>

</div>




<div class="header">
  <h2>BLOG POST</h2>
</div>



<?php include("config.php") ?>
<body>
    <div class="card">
               <h1 style="color:#00000;font-weight: bold;font-size:40px"><center><u>User's Blog </u></center></h1>
               <div class="row">
                  <form method="get">
                     <div class="col-md-5 col-sm-5 col-xs-12 gutter modal-sm " >
                        <div class="container" >
                              <?php include("display_msg.php") ?>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>







<div class="footer">
     <footer class="text-light" >
    <div class="container" style="top:2000px">
        <div class="row">
            <div class="col-md-3 col-lg-4 col-xl-3">
                <h5>About</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <p class="mb-0">
 Publish your passions, your way
Create a unique and beautiful blog. It’s easy and free.
                </p>
            </div>
        </div>
    </div>
</footer>
</div>



<script>
// When the user scrolls down 20px from the top of the document, slide down the navbar
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-50px";
  }
}
</script>
<?php
include('config.php');

?>

</body>
</html>
