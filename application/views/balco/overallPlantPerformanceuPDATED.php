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
                    <div class="col-lg-12 titlebar">
                        <div class="card headd">
                            <h3 style="color: #fff">Overall Plant Performance</h3>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-title center">
                                <h4>Overall Plant Generation</h4>
                            </div>
                            <div class="card-body">
                                <div id="OverallPlantPlantGeneration"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-title center">
                                <h4>Overall Aux Generation</h4>
                            </div>
                            <div class="card-body">
                                <div id="OverallPlantAuxGeneration"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-title center">
                                <h4>Overall Plant Gross Efficiency</h4>
                            </div>
                            <div class="card-body">
                                <div id="OverallPlantPlantGrossEfficiency"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-title center">
                                <h4>Overall Plant Gross Heatrate</h4>
                            </div>
                            <div class="card-body">
                                <div id="OverallPlantPlantGrossHeatRate"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                     <div class="col-lg-12 titlebar">
                        <div class="card headd">
                            <h3 style="color: #fff">540 MW Plant Performance</h3>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-title center">
                                <h4>540 MW Generation</h4>
                            </div>
                            <div class="card-body">
                                <div id="540MWPlantGeneration"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-title center">
                                <h4>540 MW Aux Consumption</h4>
                            </div>
                            <div class="card-body">
                                <div id="540MWAuxConsumption"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                       <div class="card">
                            <div class="card-title center">
                                <h4>540 MW Gross Efficiency</h4>
                            </div>
                            <div class="card-body">
                                <div id="540MWPlantGrossEfficiency"></div>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-3">
                        <div class="card">
                            <div class="card-title center">
                                <h4>540 MW Gross Heatrate</h4>
                            </div>
                            <div class="card-body">
                                <div id="540MWPlantGrossHeatRate"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row"> 
                     <div class="col-lg-12 titlebar">
                        <div class="card headd">
                            <h3 style="color: #fff">1200 MW Plant Performance</h3>
                        </div>
                    </div>
                     <div class="col-lg-3">
                        <div class="card">
                            <div class="card-title center">
                                <h4>1200 MW Generation</h4>
                            </div>
                            <div class="card-body">
                                <div id="1200MWPlantGeneration"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-title center">
                                <h4>1200 MW Aux Consumption</h4>
                            </div>
                            <div class="card-body">
                                <div id="1200MWAuxConsumption"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                       <div class="card">
                            <div class="card-title center">
                                <h4>1200 MW Gross Efficiency</h4>
                            </div>
                            <div class="card-body">
                                <div id="1200MWPlantGrossEfficiency"></div>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-3">
                        <div class="card">
                            <div class="card-title center">
                                <h4>1200 MW Gross Heatrate</h4>
                            </div>
                            <div class="card-body">
                                <div id="1200MWPlantGrossHeatRate"></div>
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

<!-- HTML -->

<!-- Chart code -->
<script>        
       
        $.each(elementPerformance, function(key1) {
                $.each(plantPerformance, function(key) {
                        console.log(elementPerformance[key1].afname+plantPerformance[key].div);
var chart1 = AmCharts.makeChart(elementPerformance[key1].afname+plantPerformance[key].div, {
	  "theme": "none",
  "type": "gauge",
  //"rotate":true,
  "startDuration": 1,
   "axes": [{
     "topTextFontSize": 18,
    "topTextYOffset": 50,
     "topTextColor": "#0288c5",
    "color":"#ffef61",
     "fontSize":12,
    "axisColor": "#31d6ea",
    "startValue": 0,
    "endValue": 2000,
    "radius": "70%",
    "valueInterval": 500,
    "tickColor": "#67b7dc",
    "startAngle": -90,
    "endAngle": 90,
    //"unit": "%",
    "bandOutlineAlpha": 0,
    "axisThickness": 1,
    "gridInside": false,
    "inside": false,
    
    "bands": [{
      "color": "#03A9F4",
      "startValue": 0,
      "endValue": 2000,
      "balloonText":"2000 MW",
      "innerRadius": "105%",
      "radius": "170%",
    "gradientRatio": [0.5, 0, -0.5]
    }, {
      "color": "#de4c4f",
      "startValue": 0,
      "endValue": 1305,
      "balloonText":"1305 MW",
      "innerRadius": "105%",
      "radius": "170%",
     "gradientRatio": [0.5, 0, -0.5]
    }
    , {
      "color": "#8BC34A",
      "startValue": 1305,
      "endValue": 1740,
      "balloonText":"1740 MW",
      "innerRadius": "105%",
      "radius": "170%",
    "gradientRatio": [0.5, 0, -0.5]
    }
    ]
  }],
	"allLabels": [],
	"balloon": {
            "drop":true,
            "adjustBorderColor": false,
            "color": "#ffffff"
            },   
              
  "arrows": [{
    "alpha": 1,
    "innerRadius": "15%",
    "nailRadius": 0,
     "color": "#ffc107",
    "radius": "170%"
  }
  ]
});
//  this.chart1.arrows[0].setValue(1250);
//  this.chart1.axes[0].setTopText(1250 + " MW");
//  this.chart1.axes[0].bands[2].setEndValue(1250);
//function randomValue(value) {
//                  chart1.arrows[0].setValue(value);
//                  chart1.axes[0].setTopText(value + " MW");
//                  chart1.axes[0].bands[2].setEndValue(value);  
//                }
//var name = plantPerformance[key].div;
//var val = 1250;
//var f = eval(
//    "(function() {\n"+
//    "   function " + name + "() {\n  \n\
//       chart1.arrows[0].setValue("+val+");\n\n\
//        chart1.axes[0].setTopText("+val+");\n \n\
//        chart1.axes[0].bands[2].setEndValue("+val+"+'MW');\n \n\
//        "+
//    "   }\n"+ 
//    "   return " + name + ";\n"+
//    "})();"
//);
//console.log(f);
//setInterval(f(),500); 
//setInterval(randomValue(1740,chart1),500);
//// set random value
//
//                            
//               
//               
//                 
        });
//         
        });
//         function randomValue(value,chart1) {
// // var value = parseInt(val);//Math.round(Math.random() * 100);
//  //alert(value);
//  chart1.arrows[0].setValue(value);
//  chart1.axes[0].setTopText(value + " MW");
//  //chart.arrows[ 0 ].setValue( value );
//  //chart1.axes[0].bands[1].setEndValue(value);
//  chart1.axes[0].bands[2].setEndValue(value);
//  
//}
        //setInterval('randomValue(1740)',500); 
</script>

<!-- Chart code -->

</body>
</html>