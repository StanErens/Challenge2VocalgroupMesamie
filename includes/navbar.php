<?php 

echo "<!DOCTYPE html>";
?>
<html>
<link rel="stylesheet" href="css/navbar.css">

<div id="image"><img src="Vocalgroup_Mes_Amie_v01_DEF_KLEUR_CONTOUREN (1).png" width="17%"></div>
<div id="navbar">
    <div class="navbar">
        <a href="index.php">Home</a>
        <div class="dropdown">
            <button class="dropbtn">Over Ons
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="overons/algemeen.php">Algemeen</a>
              <a href="overons/bestuur.php">Bestuur</a>
              <a href="overons/dirigent.php">Dirigent</a>
              <a href="overons/combo.php">Combo</a>
              <a href="overons/lidworden.php">Lid Worden</a>
              <a href="overons/repetitie.php">Repetitie</a>
            </div>
          </div> 
        <div class="dropdown">
          <button class="dropbtn">Programma
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="#">2020</a>
            <a href="#">2021</a>
            <a href="#">2022</a>
          </div>
        </div> 
        <div class="dropdown">
            <button class="dropbtn">Media
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="#">Foto's</a>
              <a href="#">Filmpjes</a>
              <a href="#">Nieuwsbrieven</a>
            </div>
          </div>
          <div class="navbar">
            <a href="#home">Contact</a>
            <a href="#news">Login</a>
          </div>
      </div>
</div>
</html