<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="assets/images/logo.png" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="index.php" class="<?php if($page =='home'){echo 'active';}?>">Home</a></li>
                        <li><a href="about.php" class="<?php if($page =='about'){echo 'active';}?>">About</a></li>
                        <li><a href="deals.php" class="<?php if($page =='deals'){echo 'active';}?>">Deals</a></li>          <!-- tieto podmienky sluzia na aktivovanie classy pre jednotlive menu polozky -->
                        <li><a href="reservation.php" class="<?php if($page =='reservation'){echo 'active';}?>">Reservation</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->            <!--šablona na header-->