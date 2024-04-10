<?php
include 'inc/database.php';

$sql = "SELECT title, info, days, daily_places, description, image_path FROM Offers"; //tento príkaz nám vyberie všetky stlpce z tabulky


$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    $imagePath = $row['image_path'];
    $offerTitle = $row['title'];
    $offerInfo = $row['info'];                      //cyklusom prejdeme stlpce a zobrazime jednotlive ponuky
    $days = $row['days'];
    $dailyPlaces = $row['daily_places'];
    $description = $row['description'];
?>

    <div class="col-lg-6 col-sm-6">
        <div class="item">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image">
                        <img src="<?php echo $imagePath ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="content">
                        <span class="info"><?php echo $offerInfo ?></span>
                        <h4><?php echo $offerTitle ?></h4>
                        <div class="row">
                            <div class="col-6">
                                <i class="fa fa-clock"></i>
                                <span class="list"><?php echo $days ?> Days</span>              <!-- toto je len sablona ktora je prekopirovana raz a pomocou while cyklu sa zopakuje požadovaný počet krát -->
                            </div>
                            <div class="col-6">
                                <i class="fa fa-map"></i>
                                <span class="list"><?php echo $dailyPlaces ?> Daily Places</span>
                            </div>
                        </div>
                        <p><?php echo $description ?></p>
                        <div class="main-button">
                            <a href="reservation.php">Make a Reservation</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
}

$conn->close();
?>