<?php 

echo "<!DOCTYPE html>";
?>
<html>
<link rel="stylesheet" href="../css/navbar.css">

<div id="image"><a href="../index/index.php"><img src="../Vocalgroup_Mes_Amie_v01_DEF_KLEUR_CONTOUREN (1).png" width="17%"></a></div>

<div id="navbar">
    <div class="navbar">
        <a href="../index/index.php">Home</a>
        <div class="dropdown">
            <button class="dropbtn">Over Ons
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="../overons/algemeen.php">Algemeen</a>
              <a href="../overons/bestuur.php">Bestuur</a>
              <a href="../overons/dirigent.php">Dirigent</a>
              <a href="../overons/combo.php">Combo</a>
              <a href="../overons/lidworden.php">Lid Worden</a>
              <a href="../overons/repetitie.php">Repetitie</a>
            </div>
          </div> 
        <div class="dropdown">
          <button class="dropbtn">Programma
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="../#">2020</a>
            <a href="../#">2021</a>
            <a href="../#">2022</a>
          </div>
        </div> 
        <div class="dropdown">
            <button class="dropbtn">Media
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="media/fotos.php">Foto's</a>
              <a href="media/filmpjes.php">Filmpjes</a>
              <a href="media/nieuwsbrieven.php">Nieuwsbrieven</a>
            </div>
          </div>
          <div class="navbar">
            <a href="../media/contact.php">Contact</a>
            <a href="../login/logout.php">Logout</a>
          </div>
      </div>
</div>
</html>