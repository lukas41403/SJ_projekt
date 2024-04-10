    <?php include 'partials/load.php'; ?>
    <?php $page = 'reservation';
    include 'partials/header.php'; ?> <!-- premenna ktora určuje classu active na zaklade podstranky na ktorej sme -->



    <!-- ***** Obsah podstránky ***** -->
    <div class="second-page-heading">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h4>Book Prefered Deal Here</h4>
            <h2>Make Your Reservation</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt uttersi labore et dolore magna aliqua is ipsum suspendisse ultrices gravida</p>
            <div class="main-button"><a href="about.php">Discover More</a></div>
          </div>
        </div>
      </div>
    </div>

    <div class="more-info reservation-info">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-6">
            <div class="info-item">
              <i class="fa fa-phone"></i>
              <h4>Make a Phone Call</h4>
              <a href="#">+123 456 789 (0)</a>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="info-item">
              <i class="fa fa-envelope"></i>
              <h4>Contact Us via Email</h4>
              <a href="#">company@email.com</a>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="info-item">
              <i class="fa fa-map-marker"></i>
              <h4>Visit Our Offices</h4>
              <a href="#">24th Street North Avenue London, UK</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ***** Obsah podstránky ***** -->



    <?php include 'partials/form.php'; ?>
    <?php include 'partials/footer.php'; ?>
    <?php include 'partials/scripts.php'; ?>


    <script>
      $(".option").click(function() {
        $(".option").removeClass("active");
        $(this).addClass("active");
      });
    </script>

    </body>

    </html>