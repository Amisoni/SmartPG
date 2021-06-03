<?php
include './sidebar.php';
include './header.php';
?>

<div class="ks-column ks-page">
    <div class="ks-page-header">
        <section class="ks-title-and-subtitle">
            <div class="ks-title-block">
                <h3 class="ks-main-title">Dashboard</h3>
            </div>
        </section>
    </div>
    <div class="ks-page-content">
        <div class="ks-page-content-body">
            <div class="ks-dashboard-tabbed-sidebar">
                <div class="ks-dashboard-tabbed-sidebar-widgets">
                    <div class="row">

                        <div class="col-lg-6 col-md-6">
                            <div class="card ks-widget-payment-simple-amount-item ks-orange">
                                <a href="showPG.php"><div class="payment-simple-amount-item-icon-block">
                                        <span class="la la-th-list ks-icon"></span>
                                    </div></a>
                                <a href="showPG.php">
                                    <div class="payment-simple-amount-item-body">
                                        <div class="payment-simple-amount-item-amount">
                                            <span class="ks-amount"> 
                                                <?php
                                                include './includes/connection.php';
                                                $query = "select count(*) as count from add_pg_detail";
                                                $result = mysqli_query($con, $query);
                                                if ($result) {
                                                    $row = mysqli_fetch_assoc($result);
                                                    echo $row['count'];
                                                }
                                                ?>
                                            </span>
                                        </div>
                                        <div class="payment-simple-amount-item-description">
                                            Total PG
                                        </div>
                                    </div></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card ks-widget-payment-simple-amount-item ks-orange">
                                <a href="bookPG.php"><div class="payment-simple-amount-item-icon-block">
                                        <span class="la la-home ks-icon"></span>
                                    </div></a>
                                <a href="bookPG.php">
                                    <div class="payment-simple-amount-item-body">
                                        <div class="payment-simple-amount-item-amount">
                                            <span class="ks-amount">
                                            <!--<span class="ks-amount-icon ks-icon-circled-up-right"></span>-->
                                                <?php
                                                include './includes/connection.php';
                                                $query = "select count(*) as count from add_pg_detail where status = 'UnAvailable'";
                                                $result = mysqli_query($con, $query);
                                                if ($result) {
                                                    $row = mysqli_fetch_assoc($result);
                                                    echo $row['count'];
                                                }
                                                ?>
                                            </span>
                                        </div>

                                        <div class="payment-simple-amount-item-description">
                                           Book PG
                                            <!--<span class="ks-progress-type">(+$1.89)</span>-->
                                        </div>
                                    </div></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="card ks-widget-payment-simple-amount-item ks-orange">
                                    <a href="users.php"><div class="payment-simple-amount-item-icon-block">
                                            <span class="ks-icon-user ks-icon"></span>
                                        </div></a>
                                    <a href="users.php">
                                        <div class="payment-simple-amount-item-body">
                                            <div class="payment-simple-amount-item-amount">
                                                <span class="ks-amount"> <?php
                                                    include './includes/connection.php';
                                                    $query = "select count(*) as count from registration where user_id !=1";
                                                    $result = mysqli_query($con, $query);
                                                    if ($result) {
                                                        $row = mysqli_fetch_assoc($result);
                                                        echo $row['count'];
                                                    }
                                                    ?></span>
                                            </div>
                                            <div class="payment-simple-amount-item-description">
                                                Total Users 
                                            </div>
                                        </div></a>
                                </div>
                            </div>
                            <!--</div>-->
                            <div class="col-lg-6 col-md-6">
                                <div class="card ks-widget-payment-simple-amount-item ks-orange">
                                    <a href="feedback.php"><div class="payment-simple-amount-item-icon-block">
                                            <span class="la la-pencil-square ks-icon ks-icon"></span>
                                        </div></a>
                                    <a href="feedback.php">
                                        <div class="payment-simple-amount-item-body">
                                            <div class="payment-simple-amount-item-amount">
                                                <span class="ks-amount">
                                                <!--<span class="ks-amount-icon ks-icon-circled-up-right"></span>-->
                                                    <?php
                                                    include './includes/connection.php';
                                                    $query = "select count(*) as count from feedback";
                                                    $result = mysqli_query($con, $query);
                                                    if ($result) {
                                                        $row = mysqli_fetch_assoc($result);
                                                        echo $row['count'];
                                                    }
                                                    ?>
                                                </span>
                                            </div>
                                            <div class="payment-simple-amount-item-description">
                                                FeedBack
                                                <!--<span class="ks-progress-type">(+$1.89)</span>-->
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                    </div>
<!--                    <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="card ks-widget-payment-simple-amount-item ks-orange">
                                    <a href="amenities.php"><div class="payment-simple-amount-item-icon-block">
                                            <span class="la la-bed ks-icon ks-icon"></span>
                                        </div></a>
                                    <a href="amenities.php">
                                        <div class="payment-simple-amount-item-body">
                                            <div class="payment-simple-amount-item-amount">
                                                <span class="ks-amount">
                                                <span class="ks-amount-icon ks-icon-circled-up-right"></span>
                                                    <?php
                                                    include './includes/connection.php';
                                                    $query = "select count(*) as count from amenities";
                                                    $result = mysqli_query($con, $query);
                                                    if ($result) {
                                                        $row = mysqli_fetch_assoc($result);
                                                        echo $row['count'];
                                                    }
                                                    ?>
                                                </span>
                                            </div>
                                            <div class="payment-simple-amount-item-description">
                                             Amenities
                                                <span class="ks-progress-type">(+$1.89)</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                    </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--</div>-->