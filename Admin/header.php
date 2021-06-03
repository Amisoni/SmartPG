
<?php
session_start();
include './includes/connection.php';
?>
<!DOCTYPE html>
<html lang="en">

    <!-- BEGIN HEAD -->
    <head>
        <meta charset="UTF-8">
        <title> Smart PG </title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link rel="stylesheet" type="text/css" href="libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/fonts/line-awesome/css/line-awesome.min.css">
        <!--<link rel="stylesheet" type="text/css" href="assets/fonts/open-sans/styles.css">-->

        <link rel="stylesheet" type="text/css" href="assets/fonts/montserrat/styles.css">

        <link rel="stylesheet" type="text/css" href="libs/tether/css/tether.min.css">
        <link rel="stylesheet" type="text/css" href="libs/jscrollpane/jquery.jscrollpane.css">
        <link rel="stylesheet" type="text/css" href="libs/flag-icon-css/css/flag-icon.min.css">
        <link rel="stylesheet" type="text/css" href="assets/styles/common.min.css">
        <!-- END GLOBAL MANDATORY STYLES -->

        <!-- BEGIN THEME STYLES -->
        <link rel="stylesheet" type="text/css" href="assets/styles/themes/primary.min.css">
        <link class="ks-sidebar-dark-style" rel="stylesheet" type="text/css" href="assets/styles/themes/sidebar-black.min.css">

        <link rel="stylesheet" type="text/css" href="assets/fonts/kosmo/styles.css">
        <link rel="stylesheet" type="text/css" href="assets/fonts/weather/css/weather-icons.min.css">
        <link rel="stylesheet" type="text/css" href="libs/c3js/c3.min.css">
        <link rel="stylesheet" type="text/css" href="libs/noty/noty.css">
        <link rel="stylesheet" type="text/css" href="assets/styles/widgets/payment.min.css">
        <link rel="stylesheet" type="text/css" href="assets/styles/widgets/panels.min.css">
        <link rel="stylesheet" type="text/css" href="assets/styles/dashboard/tabbed-sidebar.min.css">

    </head>
    <body class="ks-navbar-fixed ks-sidebar-default ks-sidebar-position-fixed ks-page-header-fixed ks-theme-primary ks-page-loading"> <!-- remove ks-page-header-fixed to unfix header -->

        <!-- BEGIN HEADER -->
        <nav class="navbar ks-navbar">
            <!-- BEGIN HEADER INNER -->
            <!-- BEGIN LOGO -->
            <div href="index.html" class="navbar-brand">
                <!-- BEGIN RESPONSIVE SIDEBAR TOGGLER -->
                <a href="#" class="ks-sidebar-toggle"><i class="ks-icon la la-bars" aria-hidden="true"></i></a>
                <a href="#" class="ks-sidebar-mobile-toggle"><i class="ks-icon la la-bars" aria-hidden="true"></i></a>
                <!-- END RESPONSIVE SIDEBAR TOGGLER -->

                <div class="ks-navbar-logo">
                    <!--<a href="index.html" class="ks-logo"></a>-->
                    <div class="col-md-2">
                        <!--<img class="centerMe" src="../images/clglogoo.jpg" alt="" style=" height: 60px; width: 100px;"/>--> 
                        <!--<img class="centerMe" src="images/logo.png" alt="" style="height: 60px;width:  150px;"/>--> 
                    </div>
                    <div class="col-md-6"  style="margin-left: 400%; transform: translate(-50%, 0px);margin-top: 10px;color: red;font-family: initial;font-size: 30px; ">
                         Smart PG    
                    </div>
                <!--</div>-->
                    <!-- END GRID NAVIGATION -->
                </div>
            </div>
            <!-- END LOGO -->

            <!-- BEGIN MENUS -->
            <div class="ks-wrapper">
                <nav class="nav navbar-nav">
                    <!-- BEGIN NAVBAR MENU -->
                    <div class="ks-navbar-menu">

                    </div>
                    <!--BEGIN NAVBAR USER--> 
                    <div class="ks-user">
                        <a class="nav-link"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
<!--                            <img src="<?Php echo " $_SESSION[profile_photo]"; ?>" width="36" height="36" class="ks-avatar rounded-circle">
                            &nbsp;<div class="ks-info">
                                <div class="ks-name"><?php echo ucwords($_SESSION['f_name']) . " " . ucwords($_SESSION['l_name']); ?></div>
                            </div>-->
                        </a>

                        <!-- END NAVBAR USER -->
                    </div>
                    <!--</nav>-->
                    <!-- END NAVBAR ACTIONS -->
                </nav>

                <!-- END NAVBAR MENU TOGGLER -->
            </div>
            <!-- END MENUS -->
            <!-- END HEADER INNER -->
        </nav>
        <!-- END HEADER -->








        <!-- BEGIN DEFAULT SIDEBAR -->
        <!-- BEGIN HEADER -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->

        <script src="libs/jquery/jquery.min.js"></script>
        <script src="libs/responsejs/response.min.js"></script>
        <script src="libs/loading-overlay/loadingoverlay.min.js"></script>
        <script src="libs/tether/js/tether.min.js"></script>
        <script src="libs/bootstrap/js/bootstrap.min.js"></script>
        <script src="libs/jscrollpane/jquery.jscrollpane.min.js"></script>
        <script src="libs/jscrollpane/jquery.mousewheel.js"></script>
        <script src="libs/flexibility/flexibility.js"></script>
        <script src="libs/noty/noty.min.js"></script>
        <script src="..//velocity/velocity.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="assets/scripts/common.min.js"></script>
<!-- END THEME LAYOUT SCRIPTS -->

<script src="libs/datatables-net/media/js/jquery.dataTables.min.js"></script>
<script src="libs/datatables-net/media/js/dataTables.bootstrap4.min.js"></script>
<script src="libs/datatables-net/extensions/buttons/js/dataTables.buttons.min.js"></script>
<script src="libs/datatables-net/extensions/buttons/js/buttons.bootstrap4.min.js"></script>
<script src="libs/jszip/jszip.min.js"></script>
<script src="libs/pdfmake/pdfmake.min.js"></script>
<script src="libs/pdfmake/vfs_fonts.js"></script>
<script src="libs/datatables-net/extensions/buttons/js/buttons.html5.min.js"></script>
<script src="libs/datatables-net/extensions/buttons/js/buttons.print.min.js"></script>
<script src="libs/datatables-net/extensions/buttons/js/buttons.colVis.min.js"></script>
<script src="libs/select2/js/select2.min.js"></script>
<!--<script type="application/javascript">
(function ($) {
    $(document).ready(function() {
        $('#ks-datatable').DataTable({
            "initComplete": function () {
                $('.dataTables_wrapper select').select2({
                    minimumResultsForSearch: Infinity
                });
            }
        });
    });
})(jQuery);
</script>-->
<script type="application/javascript">
(function ($) {
    $(document).ready(function() {
        var table = $('#ks-datatable').DataTable({
            lengthChange: false,
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5',
                <!--'colvis'-->
            ],
            initComplete: function () {
                $('.dataTables_wrapper select').select2({
                    minimumResultsForSearch: Infinity
                });
            }
        });

        table.buttons().container().appendTo( '#ks-datatable_wrapper .col-md-6:eq(0)' );
    });
})(jQuery);
</script>
<div class="ks-mobile-overlay"></div>

<!-- BEGIN SETTINGS BLOCK -->
<div class="ks-settings-slide-block">
<!--    <a class="ks-settings-slide-control">
        <span class="ks-icon la la-cog"></span>
    </a>-->

    <div class="ks-header">
        <span class="ks-text">Layout Options</span>
        <a class="ks-settings-slide-close-control">
            <span class="ks-icon la la-close"></span>
        </a>
    </div>

    <div class="ks-themes-list">
        <a href="../default-primary/index.html" class="ks-theme ks-primary ks-active"></a>
        <a href="../default-primary-dark/index.html" class="ks-theme ks-dark-primary"></a>
        <a href="../default-info/index.html" class="ks-theme ks-info"></a>
        <a href="../default-pink/index.html" class="ks-theme ks-blink-pink-san-marino"></a>
        <a href="../default-bermuda-gray/index.html" class="ks-theme ks-bermuda-gray-malachite"></a>
        <a href="../default-royal-blue/index.html" class="ks-theme ks-royal-blue-orchid"></a>
        <a href="../default-ebony-clay/index.html" class="ks-theme ks-ebony-clay-cerise-red"></a>
        <a href="../default-international-klein-blue/index.html" class="ks-theme ks-international-klein-blue-dixie"></a>
        <a href="../default-jungle-green/index.html" class="ks-theme ks-jungle-green-chambray"></a>
        <a href="../default-voodoo/index.html" class="ks-theme ks-voodoo-medium-purple"></a>
        <a href="../default-cornflower-blue/index.html" class="ks-theme ks-cornflower-blue-ecstasy"></a>
        <a href="../default-purple/index.html" class="ks-theme ks-purple-mandy"></a>
        <a href="../default-oslo-gray/index.html" class="ks-theme ks-oslo-gray-royal-blue"></a>
        <a href="../default-astronaut-blue/index.html" class="ks-theme ks-astronaut-blue-persian-green"></a>
        <a href="../default-old-brick/index.html" class="ks-theme ks-old-brick"></a>
        <a href="../default-white/index.html" class="ks-theme ks-white"></a>
    </div>

    <ul class="ks-settings-list">
        <li>
            <span class="ks-text">Collapsed Sidebar</span>
            <label class="ks-checkbox-slider ks-on-off ks-primary ks-sidebar-checkbox-toggle">
                <input type="checkbox" value="1">
                <span class="ks-indicator"></span>
                <span class="ks-on">On</span>
                <span class="ks-off">Off</span>
            </label>
        </li>
        <li>
            <span class="ks-text">Fixed page header</span>
            <label class="ks-checkbox-slider ks-on-off ks-primary ks-page-header-checkbox-toggle">
                <input type="checkbox" value="0" checked>
                <span class="ks-indicator"></span>
                <span class="ks-on">On</span>
                <span class="ks-off">Off</span>
            </label>
        </li>
        <li>
            <span class="ks-text">Dark/Light Sidebar</span>
            <label class="ks-checkbox-slider ks-on-off ks-primary ks-sidebar-style-checkbox-toggle">
                <input type="checkbox" value="0" checked>
                <span class="ks-indicator"></span>
                <span class="ks-on">On</span>
                <span class="ks-off">Off</span>
            </label>
        </li>
        <li>
            <span class="ks-text">White/Gray Content Background</span>
            <label class="ks-checkbox-slider ks-on-off ks-primary ks-content-bg-checkbox-toggle">
                <input type="checkbox" value="0" checked>
                <span class="ks-indicator"></span>
                <span class="ks-on">On</span>
                <span class="ks-off">Off</span>
            </label>
        </li>
    </ul>
</div>
<!-- END SETTINGS BLOCK -->
</body>
</html>