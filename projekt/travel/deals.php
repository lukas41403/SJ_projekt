    <?php include 'partials/load.php'; ?>
    <?php $page = 'deals';
    include 'partials/header.php'; ?> <!-- premenna ktora určuje classu active na zaklade podstranky na ktorej sme -->



    <!-- ***** Obsah podstránky ***** -->
    <div class="page-heading">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h4>Discover Our Weekly Offers</h4>
            <h2>Amazing Prices &amp; More</h2>
            <div class="border-button"><a href="about.php">Discover More</a></div>
          </div>
        </div>
      </div>
    </div>

    <div class="search-form">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <form id="search-form" name="gs" method="submit" role="search" action="#">
              <div class="row">
                <div class="col-lg-2">
                  <h4>Sort Deals By:</h4>
                </div>
                <div class="col-lg-4">
                  <fieldset>
                    <select name="Location" class="form-select" aria-label="Default select example" id="chooseLocation" onChange="this.form.click()">
                      <option selected>Destinations</option>
                      <option type="checkbox" name="option1" value="Italy">Italy</option>
                      <option value="France">France</option>
                      <option value="Switzerland">Switzerland</option>
                      <option value="Thailand">Thailand</option>
                      <option value="Australia">Australia</option>
                      <option value="India">India</option>
                      <option value="Indonesia">Indonesia</option>
                      <option value="Malaysia">Malaysia</option>
                      <option value="Singapore">Singapore</option>
                    </select>
                  </fieldset>
                </div>
                <div class="col-lg-4">
                  <fieldset>
                    <select name="Price" class="form-select" aria-label="Default select example" id="choosePrice" onChange="this.form.click()">
                      <option selected>Price Range</option>
                      <option value="100">$100 - $250</option>
                      <option value="250">$250 - $500</option>
                      <option value="500">$500 - $1,000</option>
                      <option value="1000">$1,000 - $2,500</option>
                      <option value="2500+">$2,500+</option>
                    </select>
                  </fieldset>
                </div>
                <div class="col-lg-2">
                  <fieldset>
                    <button class="border-button">Search Results</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- ***** Obsah podstránky ***** -->


    <?php include 'partials/container.php'; ?>
    <?php include 'partials/footer_alfa.php'; ?>
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