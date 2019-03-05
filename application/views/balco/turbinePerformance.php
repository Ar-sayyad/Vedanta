<?php include('includes/header-top.php');?>
<body class="fix-header fix-sidebar">
   <?php include('includes/preloader.php');?>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <?php include('includes/header.php');?>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
           <?php include('includes/sidebar.php');?>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
           <?php include('includes/titlebar.php');?>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->

                <div class="row">                    
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-title center">
                                <h4>Unit wise Performance</h4>
                            </div>
                            <div class="card-body">
                                <div id="plantwiseFFTPerformance"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-title center">
                                <h4>Steam Turbine Efficiency</h4>
                            </div>
                            <div class="card-body">
                                <div id="boilerOneEfficiency"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-title center">
                                <h4>Condenser Effectiveness</h4>
                            </div>
                            <div class="card-body">
                                <div id="boilerTwoEfficiency"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-title center">
                                <h4>Steam Turbine HP Cylinder Efficiency</h4>
                            </div>
                            <div class="card-body">
                                <div id="boilerEfficiency"></div>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4">
                       <div class="card">
                            <div class="card-title center">
                                <h4>Steam Turbine IP Cylinder Efficiency</h4>
                            </div>
                            <div class="card-body">
                                <div id="boilerThreeEfficiency"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-title center">
                                <h4>Steam Turbine LP Cylinder Efficiency</h4>
                            </div>
                            <div class="card-body">
                                <div id="boilerFourEfficiency"></div>
                            </div>
                        </div>
                    </div>                    
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
              <?php include('includes/footer.php');?>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <?php include('includes/footer-min.php');?>
     <!-- Styles -->
<script src="<?php echo base_url();?>piadmin/js/lib/chart-amchart/lightnew.js"></script>
<!-- Chart code -->
<script>
         var elementName = "<?php echo $path;?>";
</script>
<script src="<?php echo base_url();?>piadmin/js/turbinePerformance.js" type="text/javascript"></script>
<!-- Chart code -->

</body>
</html>