<?php
echo '
   <nav class="site-header sticky-top">
        <div class="container d-flex flex-row justify-content-between text-uppercase scrollmenu">
            <a class="p-3" href="../">
              <img class="nav-logo mt-md-" src="./img/logo-solii-short.svg">
            </a>
            <a class="p-3 site-header-item" href="#!" id="showWindows">Windows</a>
            <a class="p-3 site-header-item" href="#!" id="showDoors">Doors</a>
            <a class="p-3 site-header-item" href="../about.php" id="aboutPage">About</a>
            <a class="p-3 site-header-item" href="../contact.php" id="contactPage">Contact</a>
            <a class="p-3 site-header-item" href="#!" id="">FR</a>
            <a class="p-3" href="#!" id="showSearch"><i class="fa fa-search"></i> Search</a>
        </div>
        <!-- sub menu windows -->
        <nav class="sub-menu sub-menu__1 justify-content-start justify-content-md-center pt-4 text-center d-none">
            <a href="../inswing-windows.php">
                <img class="nav-img" src="img/windows/inswing.jpg">
                <p>Inswing</p>
            </a>
            <a href="../outswing-windows.php">
                <img class="nav-img" src="img/windows/outswing.png">
                <p>Outswing</p>
            </a>
            <a href="../pushout-windows.php">
                <img class="nav-img" src="img/windows/pushout.png">
                <p>Push-Out</p>
            </a>
            <a href="../hung-windows.php">
                <img class="nav-img" src="img/windows/hung.jpg">
                <p>Hung</p>
            </a>
            <a href="../fixed-windows.php">
                <img class="nav-img" src="img/windows/fixed.jpg">
                <p>Fixed</p>
            </a>
            <a href="../specialty-windows.php">
                <img class="nav-img" src="img/windows/specialty.jpg">
                <p>Specialty</p>
            </a>
            <a href="../tilt-turn-windows.php">
                <img class="nav-img" src="img/windows/tilt-turn.jpg">
                <p>Tilt-Turn</p>
            </a>
            <a href="../wood-tilt-turn-windows.php">
                <img class="nav-img" src="img/windows/wood-tilt-turn.jpg">
                <p>Wood Tilt-Turn</p>
            </a>            
            
        </nav>
        <!-- sub menu doors -->
        <nav class="sub-menu sub-menu__2 justify-content-start justify-content-lg-center pt-4 text-center d-none">
            <a href="../single-doors.php">
                <img class="nav-img" src="img/doors/single.jpg">
                <p>Single</p>
            </a>
            <a href="../french-doors.php">
                <img class="nav-img" src="img/doors/french.jpg">
                <p>French</p>
            </a>
            <a href="../lift-and-slide-doors.php">
                <img class="nav-img" src="img/doors/lift-slide.jpg">
                <p>Lift &amp; Slide</p>
            </a>    
            <a href="../screens.php">
                <img class="nav-img" src="img/doors/screen.jpg">
                <p>Screen</p>
            </a>
            <a href="../specialty-doors.php">
                <img class="nav-img" src="img/doors/specialty.jpg">
                <p>Specialty</p>
            </a>
            <a href="../garage-doors.php">
                <img class="nav-img" src="img/doors/garage.jpg">
                <p>Garage</p>
            </a>            
            <a href="../contemporary-doors.php">
                <img class="nav-img" src="img/doors/contemporary.jpg">
                <p>Contemporary</p>
            </a>
            <a href="../tilt-and-turn-doors.php">
                <img class="nav-img" src="img/doors/tilt-turn.jpg">
                <p>Tilt-Turn</p>
            </a>
            <a href="../steel-doors.php">
                <img class="nav-img" src="img/doors/steel.jpg">
                <p>Steel Door</p>
            </a>
        </nav>
        <!-- search box  -->
        <div class="search-box d-none">
            <div class="container">
                <div class="input-group" id="searchStuff">
                    <input type="text" class="typeahead form-control" placeholder="Search Solii products..." aria-label="Search products" aria-describedby="search-products" id="autocomplete-example">
                    <a class="close-search mr-4" id="hideSearch"><i class="fal fa-times fa-2x"></i></a>
                </div>
            </div>
        </div>
        <div class="scrim d-none"></div>
    </nav>
';?>
