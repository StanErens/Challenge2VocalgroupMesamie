<?php 

echo "<!DOCTYPE html>";
include_once("includes/navbar.php");
?>

<html>

    <header>
        <link rel="stylesheet" href="css/style.css">

        <title>Vocalgroup Mes Amie</title>

    </header>

    <body>
     
    
    <br />
    <br />
    <br />
        <div class="blok1">
        <div class="welkom">Vocalgroup Mes Amie heet u welkom
            <img src="images/aktie68.png" class="img"></div>
        <div class="intro">
            is met passie muziek maken
            <br>
            is het wij-gevoel en gezelligheid
            <br>
            is streven naar uitdagingen
            <br>
            is samen durven groeien
        </div>
        </div>

        <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 5</div>
  <img src="images/01.jpg" style="width:75%">
  <div class="text">Heidag 2020</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 5</div>
  <img src="images/02.jpg" style="width:75%">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
  <img src="images/03.jpg" style="width:75%">
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 5</div>
  <img src="images/04.jpg" style="width:75%">
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 5</div>
  <img src="images/05.jpg" style="width:75%">
</div>

</div>
<br>

<div class="dots">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

    <div class="news">
        <h1>Laatste Nieuws</h1>
    </div>

    <div class="huldiging">
        <h1>Huldiging Jaarvergadering</h1>
    </div>

    </body>

    <footer>
        <div class="footer">
        Copyright &copy; Vocalgroup Mes Amie
        </div>

    </footer>
    <script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 6000); // Change image every 2 seconds
}
</script>


</html>