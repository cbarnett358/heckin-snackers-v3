<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Heckin Snackers</title>
    <base href="/HECKIN-SNACKERS/"> <!-- This is is so the css can be found on each page without needing ../ -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://use.typekit.net/xgk8yrx.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,1,0" /><body>
</head>
    <header>
        <div class="header-content">
            <img src="./assets/images/hs-logo.png" alt="Hcekin Snackers Logo" class="hs-logo">
            <div class="header-content-right">
                <!-- material icon shopping cart -->

                <div> 
                <div id="main">
                        <span class="material-symbols-outlined">search</span>        
                        <span class="material-symbols-outlined" onclick="openNav()">shopping_basket</span>
                </div>
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <a href="#">About</a>
                        <a href="#">Services</a>
                        <a href="#">Clients</a>
                        <a href="#">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    

    
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>