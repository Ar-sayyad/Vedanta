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
                                <div id="OverallPlantGrossEfficiency"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-title center">
                                <h4>Overall Plant Gross Heatrate</h4>
                            </div>
                            <div class="card-body">
                                <div id="OverallPlantGrossHeatRate"></div>
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

<!-- Chart code -->
<script>              
var chart1 = AmCharts.makeChart("overallPlantGeneration", {
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

setInterval('randomValue(1740)',500);
function randomValue(value) {
  chart1.arrows[0].setValue(value);
  chart1.axes[0].setTopText(value + " MW");
  chart1.axes[0].bands[2].setEndValue(value);  
}

var chart2 = AmCharts.makeChart("overallAuxGeneration", {
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
    "axisThickness": 0,
    "startValue": 0,
    "endValue": 20,
    "gridInside": true,
   "inside": true,
    "radius": "70%",
    "valueInterval": 5,
    "tickColor": "#67b7dc",
    "startAngle": -90,
    "endAngle": 90,
    "unit": "%",
    "bandOutlineAlpha": 0,
    "axisThickness": 1,
    "gridInside": false,
    "inside": false,
    
    "bands": [{
      "color": "#de4c4f",
      "balloonText":"20%",
      "innerRadius": "105%",
      "radius": "170%",
     "gradientRatio": [0.4, 0, -0.4],
      "startValue": 0,
      "endValue": 20
    }, {
      "color": "#03A9F4",
      "balloonText":"5%",
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.4, 0, -0.4],
      "startValue": 0,
      "endValue": 5
    }
    , {
      "color": "#8BC34A",
      "balloonText":"9%",
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.4, 0, -0.4],
      "startValue": 5,
      "endValue": 9
    }
    
    ]
  }],
	"allLabels": [],
	"balloon": {
            "drop":true,
            //"cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            //"fixedPosition": true,
          //  "fontSize": 10
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

setInterval('randomValue1(9)',500);
// set random value
function randomValue1(value) {
 // var value = parseInt(val);//Math.round(Math.random() * 100);
  //alert(value);
  chart2.arrows[0].setValue(value);
  chart2.axes[0].setTopText(value + " %");
  //chart.arrows[ 0 ].setValue( value );
  //chart1.axes[0].bands[1].setEndValue(value);
  chart2.axes[0].bands[2].setEndValue(value);
  
}

var chart3 = AmCharts.makeChart("overallPlantGrossEfficiency", {
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
    "axisThickness": 0,
    "startValue": 0,
    "endValue": 41,
    "gridInside": true,
   "inside": true,
    "radius": "70%",
    "valueInterval": 14,
    "tickColor": "#67b7dc",
    "startAngle": -90,
    "endAngle": 90,
    "unit": "%",
    "bandOutlineAlpha": 0,
    "axisThickness": 1,
   "gridInside": false,
    "inside": false,
    
    "bands": [{
      "color": "#03A9F4",
      "endValue": 42.00,
      "balloonText":"42.00%",
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.4, 0, -0.4],
      "startValue": 0
    }, {
      "color": "#de4c4f",
      "endValue": 32.50,
      "balloonText":"32.50%",
      "innerRadius": "105%",
      "radius": "170%",
     "gradientRatio": [0.4, 0, -0.4],
      "startValue": 0
    }
    , {
      "color": "#8BC34A",
      "endValue": 39.40,
      "balloonText":"39.40%",
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.4, 0, -0.4],
      "startValue": 32.50
    }
    
    ]
  }],
	"allLabels": [],
	"balloon": {
            "drop":true,
            //"cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            //"fixedPosition": true,
          //  "fontSize": 10
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

setInterval('randomValue2(39.40)',500);
// set random value
function randomValue2(value) {
 // var value = parseInt(val);//Math.round(Math.random() * 100);
  //alert(value);
  chart3.arrows[0].setValue(value);
  chart3.axes[0].setTopText(value + " %");
  //chart.arrows[ 0 ].setValue( value );
  //chart1.axes[0].bands[1].setEndValue(value);
  chart3.axes[0].bands[2].setEndValue(value);
  
}

var chart4 = AmCharts.makeChart("overallPlantGrossHeatRate", {
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
    "axisThickness": 0,
    "startValue": 0,
    "endValue": 2480,
    "gridInside": true,
   //"inside": true,
    "radius": "70%",
    "valueInterval": 620,
    "tickColor": "#67b7dc",
    "startAngle": -90,
    "endAngle": 90,
    //"unit": "%",
    "bandOutlineAlpha": 0,
    "axisThickness": 1,
    "gridInside": false,
    "inside": false,
    
    "bands": [{
      "color": "#de4c4f",
      "endValue": 2480,
      "balloonText":"2480",
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.4, 0, -0.4],
      "startValue": 0
    }, {
      "color": "#03A9F4",
      "endValue": 2000,
      "balloonText":"2000",
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.4, 0, -0.4],
      "startValue": 0
    }
    , {
      "color": "#8BC34A",
      "endValue": 2300,
      "balloonText":"2300",
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.4, 0, -0.4],
      "startValue":2000
    }
    
    ]
  }],
	"allLabels": [],
	"balloon": {
            "drop":true,
            //"cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            //"fixedPosition": true,
          //  "fontSize": 10
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

setInterval('randomValue3(2300)',500);
// set random value
function randomValue3(value) {
 // var value = parseInt(val);//Math.round(Math.random() * 100);
  //alert(value);
  chart4.arrows[0].setValue(value);
  chart4.axes[0].setTopText(value + " ");
  //chart.arrows[ 0 ].setValue( value );
  //chart1.axes[0].bands[1].setEndValue(value);
  chart4.axes[0].bands[2].setEndValue(value);
  
}

var chart5 = AmCharts.makeChart("mwFFTGeneration", {
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
    "axisThickness": 0,
    "startValue": 0,
    "endValue": 650,
    "gridInside": true,
   "inside": true,
    "radius": "70%",
    "valueInterval": Math.round(650/4),
    "tickColor": "#67b7dc",
    "startAngle": -90,
    "endAngle": 90,
    "unit": " MW",
    "bandOutlineAlpha": 0,
    "axisThickness": 1,
    "gridInside": false,
    "inside": false,
    
    "bands": [{
            "color": "#03A9F4",
            "endValue": 650,
            "balloonText":"650 MW",
            "innerRadius": "105%",
            "radius": "170%",
            "gradientRatio": [0.4, 0, -0.4],
            "startValue": 0
          }, {
            "color": "#de4c4f",
            "endValue": 405,
            "balloonText":"450 MW",
            "innerRadius": "105%",
            "radius": "170%",
            "gradientRatio": [0.4, 0, -0.4],
            "startValue": 0
          }
          , {
            "color": "#8BC34A",
            "endValue": 540,
            "balloonText":"540 MW",
            "innerRadius": "105%",
            "radius": "170%",
            "gradientRatio": [0.4, 0, -0.4],
            "startValue":405
          }
    
    ]
  }],
	"allLabels": [],
	"balloon": {
            "drop":true,
            //"cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            //"fixedPosition": true,
          //  "fontSize": 10
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

setInterval('randomValue4(540)',500);
// set random value
function randomValue4(value) {
 // var value = parseInt(val);//Math.round(Math.random() * 100);
  //alert(value);
  chart5.arrows[0].setValue(value);
  chart5.axes[0].setTopText(value + " MW");
  //chart.arrows[ 0 ].setValue( value );
  //chart1.axes[0].bands[1].setEndValue(value);
  chart5.axes[0].bands[2].setEndValue(value);
  
}


var chart6 = AmCharts.makeChart("mwFFTAuxConsumption", {
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
    "axisThickness": 0,
    "startValue": 0,
    "endValue": 20,
    "gridInside": true,
   "inside": true,
    "radius": "70%",
    "valueInterval": Math.round(20/4),
    "tickColor": "#67b7dc",
    "startAngle": -90,
    "endAngle": 90,
    "unit": " %",
    "bandOutlineAlpha": 0,
    "axisThickness": 1,
    "gridInside": false,
    "inside": false,
    
    "bands": [{
      "color": "#de4c4f",
      "endValue": 20,
      "balloonText":"20 %",
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.4, 0, -0.4],
      "startValue": 0
    }, {
      "color": "#03A9F4",
      "endValue": 5,
      "balloonText":"5 %",
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.4, 0, -0.4],
      "startValue": 0
    }
    , {
      "color": "#8BC34A",
      "endValue": 10,
      "balloonText":"10 %",
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.4, 0, -0.4],
      "startValue":5
    }
    
    ]
  }],
	"allLabels": [],
	"balloon": {
            "drop":true,
            //"cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            //"fixedPosition": true,
          //  "fontSize": 10
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

setInterval('randomValue5(10)',500);
// set random value
function randomValue5(value) {
 // var value = parseInt(val);//Math.round(Math.random() * 100);
  //alert(value);
  chart6.arrows[0].setValue(value);
  chart6.axes[0].setTopText(value + " %");
  //chart.arrows[ 0 ].setValue( value );
  //chart1.axes[0].bands[1].setEndValue(value);
  chart6.axes[0].bands[2].setEndValue(value);
  
}


var chart7 = AmCharts.makeChart("GrossFFTEfficiency", {
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
    "axisThickness": 0,
    "startValue": 0,
    "endValue": 41,
    "gridInside": true,
   "inside": true,
    "radius": "70%",
    "valueInterval": 14,
    "tickColor": "#67b7dc",
    "startAngle": -90,
    "endAngle": 90,
    "unit": "%",
    "bandOutlineAlpha": 0,
    "axisThickness": 1,
    "gridInside": false,
    "inside": false,
    
    "bands": [{
      "color": "#03A9F4",
      "endValue": 42,
      "balloonText":"42%",
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.4, 0, -0.4],
      "startValue": 0
    }, {
      "color": "#de4c4f",
      "endValue": 32,
      "balloonText":"32%",
      "innerRadius": "105%",
      "radius": "170%",
     "gradientRatio": [0.4, 0, -0.4],
      "startValue": 0
    }
    , {
      "color": "#8BC34A",
      "endValue": 39,
      "balloonText":"39%",
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.4, 0, -0.4],
      "startValue": 32
    }
    
    ]
  }],
	"allLabels": [],
	"balloon": {
            "drop":true,
            //"cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            //"fixedPosition": true,
          //  "fontSize": 10
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

setInterval('randomValue6(39)',500);
// set random value
function randomValue6(value) {
 // var value = parseInt(val);//Math.round(Math.random() * 100);
  //alert(value);
  chart7.arrows[0].setValue(value);
  chart7.axes[0].setTopText(value + " %");
  //chart.arrows[ 0 ].setValue( value );
  //chart1.axes[0].bands[1].setEndValue(value);
  chart7.axes[0].bands[2].setEndValue(value);
  
}

var chart8 = AmCharts.makeChart("fftPlantGrossHeatRate", {
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
    "axisThickness": 0,
    "startValue": 0,
    "endValue": 2480,
    "gridInside": true,
   "inside": true,
    "radius": "70%",
    "valueInterval": Math.round(2480/4),
    "tickColor": "#67b7dc",
    "startAngle": -90,
    "endAngle": 90,
    //"unit": "%",
    "bandOutlineAlpha": 0,
    "axisThickness": 1,
    "gridInside": false,
    "inside": false,
    
    "bands": [{
      "color": "#de4c4f",
      "endValue": 2480,
      "balloonText":"2480",
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.4, 0, -0.4],
      "startValue": 0
    }, {
      "color": "#03A9F4",
      "endValue": 2000,
      "balloonText":"2000",
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.4, 0, -0.4],
      "startValue": 0
    }
    , {
      "color": "#8BC34A",
      "endValue": 2300,
      "balloonText":"2300",
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.4, 0, -0.4],
      "startValue":2000
    }
    
    ]
  }],
	"allLabels": [],
	"balloon": {
            "drop":true,
            //"cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            //"fixedPosition": true,
          //  "fontSize": 10
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

setInterval('randomValue7(2300)',500);
// set random value
function randomValue7(value) {
 // var value = parseInt(val);//Math.round(Math.random() * 100);
  //alert(value);
  chart8.arrows[0].setValue(value);
  chart8.axes[0].setTopText(value + " ");
  //chart.arrows[ 0 ].setValue( value );
  //chart1.axes[0].bands[1].setEndValue(value);
  chart8.axes[0].bands[2].setEndValue(value);
  
}


var chart9 = AmCharts.makeChart("mwTWHGeneration", {
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
    "axisThickness": 0,
    "startValue": 0,
    "endValue": 1300,
    "gridInside": true,
   "inside": true,
    "radius": "70%",
    "valueInterval": Math.round(1300/4),
    "tickColor": "#67b7dc",
    "startAngle": -90,
    "endAngle": 90,
    "unit": " MW",
    "bandOutlineAlpha": 0,
    "axisThickness": 1,
    "gridInside": false,
    "inside": false,
    
    "bands": [{
      "color": "#03A9F4",
      "endValue": 1300,
      "balloonText":"1300 MW",
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.4, 0, -0.4],
      "startValue": 0
    }, {
      "color": "#de4c4f",
      "endValue": 900,
      "balloonText":"900 MW",
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.4, 0, -0.4],
      "startValue": 0
    }
    , {
      "color": "#8BC34A",
      "endValue": 1200,
      "balloonText":"1200 MW",
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.4, 0, -0.4],
      "startValue":900
    }
    
    ]
  }],
	"allLabels": [],
	"balloon": {
            "drop":true,
            //"cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            //"fixedPosition": true,
          //  "fontSize": 10
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

setInterval('randomValue8(1200)',500);
// set random value
function randomValue8(value) {
 // var value = parseInt(val);//Math.round(Math.random() * 100);
  //alert(value);
  chart9.arrows[0].setValue(value);
  chart9.axes[0].setTopText(value + " MW");
  //chart.arrows[ 0 ].setValue( value );
  //chart1.axes[0].bands[1].setEndValue(value);
  chart9.axes[0].bands[2].setEndValue(value);
  
}


var chart10 = AmCharts.makeChart("mwTWHAuxConsumption", {
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
    "axisThickness": 0,
    "startValue": 0,
    "endValue": 20,
    "gridInside": true,
   "inside": true,
    "radius": "70%",
    "valueInterval": Math.round(20/4),
    "tickColor": "#67b7dc",
    "startAngle": -90,
    "endAngle": 90,
    "unit": " %",
    "bandOutlineAlpha": 0,
    "axisThickness": 1,
    "gridInside": false,
    "inside": false,
    
    "bands": [{
      "color": "#de4c4f",
      "endValue": 20,
      "balloonText":"20 %",
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.4, 0, -0.4],
      "startValue": 0
    }, {
      "color": "#03A9F4",
      "endValue": 5,
      "balloonText":"5 %",
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.4, 0, -0.4],
      "startValue": 0
    }
    , {
      "color": "#8BC34A",
      "endValue": 10,
      "balloonText":"10 %",
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.4, 0, -0.4],
      "startValue":5
    }
    
    ]
  }],
	"allLabels": [],
	"balloon": {
            "drop":true,
            //"cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            //"fixedPosition": true,
          //  "fontSize": 10
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

setInterval('randomValue9(10)',500);
// set random value
function randomValue9(value) {
 // var value = parseInt(val);//Math.round(Math.random() * 100);
  //alert(value);
  chart10.arrows[0].setValue(value);
  chart10.axes[0].setTopText(value + " %");
  //chart.arrows[ 0 ].setValue( value );
  //chart1.axes[0].bands[1].setEndValue(value);
  chart10.axes[0].bands[2].setEndValue(value);
  
}


var chart11 = AmCharts.makeChart("GrossTWHEfficiency", {
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
    "axisThickness": 0,
    "startValue": 0,
    "endValue": 41,
    "gridInside": true,
   "inside": true,
    "radius": "70%",
    "valueInterval": 14,
    "tickColor": "#67b7dc",
    "startAngle": -90,
    "endAngle": 90,
    "unit": "%",
    "bandOutlineAlpha": 0,
    "axisThickness": 1,
    "gridInside": false,
    "inside": false,
    
    "bands": [{
      "color": "#03A9F4",
      "endValue": 42,
      "balloonText":"42%",
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.4, 0, -0.4],
      "startValue": 0
    }, {
      "color": "#de4c4f",
      "endValue": 32,
      "balloonText":"32%",
      "innerRadius": "105%",
      "radius": "170%",
     "gradientRatio": [0.4, 0, -0.4],
      "startValue": 0
    }
    , {
      "color": "#8BC34A",
      "endValue": 39,
      "balloonText":"39%",
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.4, 0, -0.4],
      "startValue": 32
    }
    
    ]
  }],
	"allLabels": [],
	"balloon": {
            "drop":true,
            //"cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            //"fixedPosition": true,
          //  "fontSize": 10
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

setInterval('randomValue10(39)',500);
// set random value
function randomValue10(value) {
 // var value = parseInt(val);//Math.round(Math.random() * 100);
  //alert(value);
  chart11.arrows[0].setValue(value);
  chart11.axes[0].setTopText(value + " %");
  //chart.arrows[ 0 ].setValue( value );
  //chart1.axes[0].bands[1].setEndValue(value);
  chart11.axes[0].bands[2].setEndValue(value);
  
}

var chart12 = AmCharts.makeChart("twhPlantGrossHeatRate", {
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
    "axisThickness": 0,
    "startValue": 0,
    "endValue": 2480,
    "gridInside": true,
   "inside": true,
    "radius": "70%",
    "valueInterval": 620,
    "tickColor": "#67b7dc",
    "startAngle": -90,
    "endAngle": 90,
    //"unit": "%",
    "bandOutlineAlpha": 0,
    "axisThickness": 1,
    "gridInside": false,
    "inside": false,
    
    "bands": [{
      "color": "#de4c4f",
      "endValue": 2480,
      "balloonText":"2480",
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.4, 0, -0.4],
      "startValue": 0
    }, {
      "color": "#03A9F4",
      "endValue": 2000,
      "balloonText":"2000",
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.4, 0, -0.4],
      "startValue": 0
    }
    , {
      "color": "#8BC34A",
      "endValue": 2300,
      "balloonText":"2300",
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.4, 0, -0.4],
      "startValue":2000
    }
    
    ]
  }],
	"allLabels": [],
	"balloon": {
            "drop":true,
            //"cornerRadius": 5,
            "adjustBorderColor": false,
            "color": "#ffffff",
            //"fixedPosition": true,
          //  "fontSize": 10
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

setInterval('randomValue11(2300)',500);
// set random value
function randomValue11(value) {
 // var value = parseInt(val);//Math.round(Math.random() * 100);
  //alert(value);
  chart12.arrows[0].setValue(value);
  chart12.axes[0].setTopText(value + " ");
  //chart.arrows[ 0 ].setValue( value );
  //chart1.axes[0].bands[1].setEndValue(value);
  chart12.axes[0].bands[2].setEndValue(value);
  
}

</script>

<!-- Chart code -->

</body>
</html>