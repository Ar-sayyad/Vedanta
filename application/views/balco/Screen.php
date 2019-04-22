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
                            <div class="card-body">                              
                               <div id="mydiv">
                                    <iframe id="frame" src="<?php echo $path;?>" width="100%" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
                                </div>
                                    <button style="float:right;margin: 5px;" id="fullscreen" class="btn btn-info button"><i class="fa fa-expand"></i></button> &nbsp;
                                <button style="float:right;margin: 5px;" onClick="PrintElem('mydiv')" id="button" class="btn btn-info button"><i class="fa fa-print"></i></button>                               
                            
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
	<script type="text/javascript">
 function PrintElem(el){
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(el).innerHTML;
	document.body.innerHTML = printcontent;

	window.print();
  
	document.body.innerHTML = restorepage;
       window.location.reload();
      // return true;
}
</script>   
     <!-- Styles -->
 <script>
</body>
</html>