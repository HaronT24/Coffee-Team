<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="includes/styles.css">
<link rel="stylesheet" href="styles.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Team</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
<?php include 'Includes/header1.php'; ?>
<?php include 'Includes/sidebar1.php'; ?>

    <div class="my-team-wrapper">
        <section class="my-team-header">
            <h1>My Team</h1>
        </section>

        <hr class="my-team-line">
        <section class="content">
            <div class="team-row">
                <!-- Block 1 -->
                <div class="team-col">
                    <div class="team-box team-bg-primary">
                        <div class="inner">
                            <h3>30</h3>
                            <p>Total Apartment Visitors</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-ios-people"></i>
                        </div>
                        <a href="visitor-mgmt.php" class="team-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- Block 2 -->
                <div class="team-col">
                    <div class="team-box team-bg-green">
                        <div class="inner">
                            <h3>40</h3>
                            <p>Today's Visitors</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-contacts"></i>
                        </div>
                        <a href="tdv1.php" class="team-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- Block 3 -->
                <div class="team-col">
                    <div class="team-box team-bg-yellow">
                        <div class="inner">
                            <h3>20</h3>
                            <p>Occupied Apartments</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="occupied.php" class="team-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- Block 4 -->
                <div class="team-col">
                    <div class="team-box team-bg-red">
                        <div class="inner">
                            <h3>60</h3>
                            <p>Available Apartments</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-home"></i>
                        </div>
                        <a href="available.php" class="team-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- Block 5 -->
                <div class="team-col">
                    <div class="team-box team-bg-orange">
                        <div class="inner">
                            <h3>10</h3>
                            <p>Overstayed Visitors</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-alert-circled"></i>
                        </div>
                        <a href="overstayed-visitors.php" class="team-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php include 'Includes/footer1.php'; ?>

</body>
</html>
