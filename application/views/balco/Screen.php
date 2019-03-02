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
                    <div class="col-lg-12">
                        <div class="card">
<!--                            <div class="card-title center">
                                <h4>PI CORESIGHT</h4>
                            </div>-->
                            <div class="card-body">
                              
                               <div id="mydiv">
                                        <img src="<?php echo base_url().$path;?>" width="100%"> 
                                        <!--screen path here in iframe-->
         <!--     <iframe id="frame" src="http://10.81.100.250:8088/ReportServer_DWH/Pages/ReportViewer.aspx?%2fReport%2fMarketingECRM&rs:Command=Render" width="100%">
     </iframe>-->
                                </div>
                                <!--<button id="button">Load</button>-->                               
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
 <script>
 $(document).ready(function(){
$("#button").click(function () { 
    $url= "http://59.144.10.120/Coresight/PB/#/PBDisplays/396";
    alert($url);
   
    $("#frame").attr("src", $url);
});
});
</script>
</body>
</html>