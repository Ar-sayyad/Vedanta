<?php include('includes/header-top.php');?>
<style>
   #monthlyCoalReceipt,#monthlyDeliveredCost,#grossgeneration {
   width: 100%;
   height: 400px;
   }
   #plfMTD,#plfMonth,#plfYTD,#pafMTD,#pafMonth,#pafYTD,#grossgenerationMTD,#grossgenerationMonth,#grossgenerationYTD,
   #auxconsumptionMTD,#auxconsumptionMonth,#auxconsumptionYTD,#netgenerationMTD,#netgenerationMonth,#netgenerationYTD,
   #scc360MTD,#scc360Month,#scc360YTD,#heatrateMTD,#heatrateMonth,#heatrateYTD,#socMTD,#socMonth,#socYTD,
   #oilconsumptionMTD,#oilconsumptionMonth,#oilconsumptionYTD,#gcvMTD,#gcvMonth,#gcvYTD{
   width: 100%;
   height: 150px;   
   }
   .m-b-0 {
   margin-bottom: 0px!important;
   font-size: 16px;
   font-weight:500;
   font-family: 'verdana', sans-serif;
   /*text-transform:capitalize;*/
   }
   .bg-brown {
   background: #b43dc8 !important;
   color: #ffffff;
   fill: #b43dc8;
   }
   .bg-bluevila {
   background: #1174a3 !important;
   color: #ffffff;
   fill: #1174a3;
   }
   #example3 > thead > tr > th {
   border: 1px solid #e7e7e7;
   font-weight: 600;
   text-align: center;
   color: #ffffff;
   line-height: 24px;
   font-size: 18px;
   background: #356add !important;
   }
   #example3 > tbody > tr > td {
   vertical-align:middle;
   font-weight: 501;
   }
</style>
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
               <div class="col-md-3">
                  <div class="card bg-primary p-20">
                     <div class="media widget-ten">
                        <div class="media-left meida media-middle">
                           <span><i class="fa fa-inr f-s-40"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                           <h2 class="color-white"><i class="fa fa-inr"></i> X,XX,XXX</h2>
                           <p class="m-b-0">Coal Cost (Rs/kWh)</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="card bg-bluevila p-20">
                     <div class="media widget-ten">
                        <div class="media-left meida media-middle">
                           <span><i class="fa fa-inr f-s-40"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                           <h2 class="color-white"><i class="fa fa-inr"></i> XX,XXX</h2>
                           <p class="m-b-0">Coal Cost (Rs/kWh)</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="card bg-danger p-20">
                     <div class="media widget-ten">
                        <div class="media-left meida media-middle">
                           <span><i class="fa fa-inr f-s-40"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                           <h2 class="color-white"><i class="fa fa-inr"></i> XX,XXX</h2>
                           <p class="m-b-0">Import Grid Cost (Rs/kWh)</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="card bg-success p-20">
                     <div class="media widget-ten">
                        <div class="media-left meida media-middle">
                           <span><i class="fa fa-inr f-s-40"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                           <h2 class="color-white"><i class="fa fa-inr"></i> X,XX,XX,XXX</h2>
                           <p class="m-b-0">Total Cost (Rs/kWh)</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-3">
                  <div class="card bg-info p-20">
                     <div class="media widget-ten">
                        <div class="media-left meida media-middle">
                           <span><i class="ti-server f-s-40"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                           <h2 class="color-white"><i class="ti-server"></i> XXX</h2>
                           <p class="m-b-0">Coal Stock (MT)</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="card bg-warning p-20">
                     <div class="media widget-ten">
                        <div class="media-left meida media-middle">
                           <span><i class="fa fa-inr f-s-40"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                           <h2 class="color-white"><i class="fa fa-inr"></i> X,XX,XXX</h2>
                           <p class="m-b-0">Power Smelter Cost (Rs/Ton)</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="card bg-dark  p-20">
                     <div class="media widget-ten">
                        <div class="media-left meida media-middle">
                           <span><i class="fa fa-inr f-s-40"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                           <h2 class="color-white"><i class="fa fa-inr"></i> X,XX,XXX</h2>
                           <p class="m-b-0">Electricity Duty (Rs/kWh)</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="card bg-brown p-20">
                     <div class="media widget-ten">
                        <div class="media-left meida media-middle">
                           <span><i class="fa fa-inr f-s-40"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                           <h2 class="color-white"><i class="fa fa-inr"></i> X,XX,XXX</h2>
                           <p class="m-b-0">EBIDTA</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-12">
                  <div class="card" style="padding: 10px;min-height: 650px;">
                     <div class="table-responsive">
                        <table id="example3" class="table table-striped  table-bordered" cellspacing="0" width="100%">
                           <thead>
                              <tr>
                                 <th>
                                    SR.
                                 </th>
                                 <th>
                                    KPI
                                 </th>
                                 <th>
                                    Actual (MTD)
                                 </th>
                                 <th style="width:20%">
                                    ACT Vs BP<br>(MTD)
                                 </th>
                                 <th style="width:45%;text-align: center;">
                                    Monthly Achievements
                                 </th>
                                 <th>
                                    Actual (YTD)
                                 </th>
                                 <th style="width:20%">
                                    ACT Vs BP<br>(YTD)
                                 </th>
                              </tr>
                           </thead>
                           <tr>
                              <td>1</td>
                              <td>Plant Load Factor (%)</td>
                              <td>100.0</td>
                              <td>
                                 <div id="plfMTD"></div>
                              </td>
                              <td>
                                 <div id="plfMonth"></div>
                              </td>
                              <td>100.0</td>
                              <td>
                                 <div id="plfYTD"></div>
                              </td>
                           </tr>
                           <tr>
                              <td>2</td>
                              <td>Plant Availability Factor (%)</td>
                              <td>100.0</td>
                              <td>
                                 <div id="pafMTD"></div>
                              </td>
                              <td>
                                 <div id="pafMonth"></div>
                              </td>
                              <td>100.0</td>
                              <td>
                                 <div id="pafYTD"></div>
                              </td>
                           </tr>
                           <tr>
                              <td>3</td>
                              <td>Gross Generation</td>
                              <td>100.0</td>
                              <td>
                                 <div id="grossgenerationMTD"></div>
                              </td>
                              <td>
                                 <div id="grossgenerationMonth"></div>
                              </td>
                              <td>100.0</td>
                              <td>
                                 <div id="grossgenerationYTD"></div>
                              </td>
                           </tr>
                           <tr>
                              <td>4</td>
                              <td>Aux Consumption</td>
                              <td>100.0</td>
                              <td>
                                 <div id="auxconsumptionMTD"></div>
                              </td>
                              <td>
                                 <div id="auxconsumptionMonth"></div>
                              </td>
                              <td>100.0</td>
                              <td>
                                 <div id="auxconsumptionYTD"></div>
                              </td>
                           </tr>
                           <tr>
                              <td>5</td>
                              <td>Net Generation</td>
                              <td>100.0</td>
                              <td>
                                 <div id="netgenerationMTD"></div>
                              </td>
                              <td>
                                 <div id="netgenerationMonth"></div>
                              </td>
                              <td>100.0</td>
                              <td>
                                 <div id="netgenerationYTD"></div>
                              </td>
                           </tr>
                           <tr>
                              <td>6</td>
                              <td>SCC @360</td>
                              <td>100.0</td>
                              <td>
                                 <div id="scc360MTD"></div>
                              </td>
                              <td>
                                 <div id="scc360Month"></div>
                              </td>
                              <td>100.0</td>
                              <td>
                                 <div id="scc360YTD"></div>
                              </td>
                           </tr>
                           <tr>
                              <td>7</td>
                              <td>Heat Rate</td>
                              <td>100.0</td>
                              <td>
                                 <div id="heatrateMTD"></div>
                              </td>
                              <td>
                                 <div id="heatrateMonth"></div>
                              </td>
                              <td>100.0</td>
                              <td>
                                 <div id="heatrateYTD"></div>
                              </td>
                           </tr>
                           <tr>
                              <td>8</td>
                              <td>SOC</td>
                              <td>100.0</td>
                              <td>
                                 <div id="socMTD"></div>
                              </td>
                              <td>
                                 <div id="socMonth"></div>
                              </td>
                              <td>100.0</td>
                              <td>
                                 <div id="socYTD"></div>
                              </td>
                           </tr>
                           <tr>
                              <td>9</td>
                              <td>Oil Consumption</td>
                              <td>100.0</td>
                              <td>
                                 <div id="oilconsumptionMTD"></div>
                              </td>
                              <td>
                                 <div id="oilconsumptionMonth"></div>
                              </td>
                              <td>100.0</td>
                              <td>
                                 <div id="oilconsumptionYTD"></div>
                              </td>
                           </tr>
                           <tr>
                              <td>10</td>
                              <td>GCV</td>
                              <td>100.0</td>
                              <td>
                                 <div id="gcvMTD"></div>
                              </td>
                              <td>
                                 <div id="gcvMonth"></div>
                              </td>
                              <td>100.0</td>
                              <td>
                                 <div id="gcvYTD"></div>
                              </td>
                           </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-4">
                  <div class="card">
                     <div class="card-title center">
                        <h4>Monthly Coal Receipt(MT)</h4>
                     </div>
                     <div class="card-body">
                        <div id="monthlyCoalReceipt"></div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="card">
                     <div class="card-title center">
                        <h4>Monthly Delivered Cost(Rs/MT)</h4>
                     </div>
                     <div class="card-body">
                        <div id="monthlyDeliveredCost"></div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="card">
                     <div class="card-title center">
                        <h4>Gross Generation in MU</h4>
                     </div>
                     <div class="card-body">
                        <div id="grossgeneration"></div>
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
      var chart = AmCharts.makeChart("monthlyCoalReceipt", {
      "type": "serial",
      "theme": "light",
      "categoryField": "mw",
      //"rotate": true,
      "startEffect": "elastic",
      "startDuration": 1,
      "categoryAxis": {
      "gridPosition": "start",
      "position": "left",
              "labelRotation": 90,
              "fontSize":12,
      },
      "trendLines": [],
      "graphs": [
      {
      "balloonText": "BP:[[value]]",
      "fillAlphas": 0.8,
      "id": "AmGraph-1",
      "lineAlpha": 0.2,
      "title": "BP",
      "type": "column",
                      "color":"skyblue",
      "valueField": "bp",
                       "fixedColumnWidth": 14
      },
      {
      "balloonText": "ACT:[[value]]",
      "fillAlphas": 0.8,
      "id": "AmGraph-2",
      "lineAlpha": 0.2,
      "title": "ACT",
      "type": "column",
                      "color":"orange",
      "valueField": "act",
                       "fixedColumnWidth": 14
      }
      ],
      "guides": [],
      "valueAxes": [
      {
      "id": "ValueAxis-1",
      "position": "bottom",
      "axisAlpha": 1,
                      "minimum": 40,
                      "maximum": 140,
                      "titleFontSize":14,
                      "fontSize":11,                        
                      "title": "Monthly Coal Receipt (MT)"
      }
      ],
      "plotAreaFillAlphas": 0.1,
      "depth3D": 0,
      "angle": 10,
      "allLabels": [],
      "balloon": {
          "drop":true,
          "cornerRadius": 5,
          "adjustBorderColor": false,
          "color": "#ffffff",
          "fixedPosition": true,
          "fontSize": 10
          },   
          "chartCursor": {
          "pan": true,
          "valueLineEnabled": true,
          "valueLineBalloonEnabled": true,
          "cursorAlpha": 0.05,
          "valueLineAlpha": 0.2,
          "fullWidth":true,
          "valueBalloonsEnabled":false,
          "categoryBalloonEnabled":false
      
        },  
          "legend": {
            "useGraphSettings": true,
            "position": "bottom",
            "bulletType": "round",
            "equalWidths": false,
            "valueWidth": 50,
            //"color": "#FFFFFF"
          },
      "titles": [],
      "dataProvider": [
      {
      "mw": 'CPP 540MW',
      "bp": 100.0,
      "act": 95.0
      },
      {
      "mw": 'CPP 600MW',
      "bp": 100.0,
      "act": 82.8
      },
      {
      "mw": 'IPP 600MW',
      "bp": 100.0,
      "act": 93.9
      },
      {
      "mw": 'CPP 1140MW',
      "bp": 100.0,
      "act": 75.1
      },
      {
      "mw": 'TPP 1200MW',
      "bp": 100.0,
      "act": 65
      },
              {
      "mw": 'TPP 1740MW',
      "bp": 100.0,
      "act": 85
      }
              
      ],
      "export": {
      "enabled": true
      }
      
      });
      
      var chart = AmCharts.makeChart("monthlyDeliveredCost", {
      "type": "serial",
      "theme": "light",
      "categoryField": "mw",
      //"rotate": true,
      "startDuration": 1,
      "categoryAxis": {
      "gridPosition": "start",
      "position": "left",
              "labelRotation": 90,
              "fontSize":12
      },
      "trendLines": [],
      "graphs": [
      {
      "balloonText": "BP:[[value]]",
      "fillAlphas": 0.8,
      "id": "AmGraph-1",
      "lineAlpha": 0.2,
      "title": "BP",
      "type": "column",
                      "color":"skyblue",
      "valueField": "bp",
                      "fixedColumnWidth": 14
      },
      {
      "balloonText": "ACT:[[value]]",
      "fillAlphas": 0.8,
      "id": "AmGraph-2",
      "lineAlpha": 0.2,
      "title": "ACT",
      "type": "column",
                      "color":"orange",
      "valueField": "act",
                      "fixedColumnWidth": 14
      }
      ],
      "guides": [],
      "valueAxes": [
      {
      "id": "ValueAxis-1",
      "position": "bottom",
      "axisAlpha": 1,
                      "minimum": 0,
                      "titleFontSize":14,
                      "fontSize":11,
                      "title": "Monthly Delivered Cost(Rs/MT)"
      }
      ],
      
      //"plotAreaFillAlphas": 0.1,
      "depth3D": 0,
      "angle": 10,
      "allLabels": [],
      "balloon": {
          "drop":true,
          "cornerRadius": 5,
          "adjustBorderColor": false,
          "color": "#ffffff",
          "fixedPosition": true,
          "fontSize": 10
          },   
          "chartCursor": {
          "pan": true,
          "valueLineEnabled": true,
          "valueLineBalloonEnabled": true,
          "cursorAlpha": 0.05,
          "valueLineAlpha": 0.2,
          "fullWidth":true,
          "valueBalloonsEnabled":false,
          "categoryBalloonEnabled":false
      
        },  
          "legend": {
            "useGraphSettings": true,
            "position": "bottom",
            "bulletType": "round",
            "equalWidths": false,
            "valueWidth": 50,
            //"color": "#FFFFFF"
          },
      "titles": [],
      "dataProvider": [
      {
      "mw": 'CPP 540MW',
      "bp": 12.96,
      "act": 12.31
      },
      {
      "mw": 'CPP 600MW',
      "bp": 14.40,
      "act": 13.68
      },
      {
      "mw": 'IPP 600MW',
      "bp": 14.40,
      "act": 13.68
      },
      {
      "mw": 'CPP 1140MW',
      "bp": 27.36,
      "act": 25.99
      },
      {
      "mw": 'TPP 1200MW',
      "bp": 28.80,
      "act": 27.36
      },
              {
      "mw": 'TPP 1740MW',
      "bp": 41.76,
      "act": 39.67
      }
              
      ],
      "export": {
      "enabled": true
      }
      
      });
      
      var chart = AmCharts.makeChart("grossgeneration", {
      "type": "serial",
      "theme": "none",
      "categoryField": "mw",
      //"rotate": true,
      "startDuration": 1,
      "categoryAxis": {
      "gridPosition": "start",
      "position": "left",
              "labelRotation": 90,
               "fontSize":12
      },
      "trendLines": [],
      "graphs": [
      {
      "balloonText": "BP:[[value]]",
      "fillAlphas": 0.8,
      "id": "AmGraph-1",
      "lineAlpha": 0.2,
      "title": "BP",
      "type": "column",
                      "color":"skyblue",
      "valueField": "bp",
                       "fixedColumnWidth": 14
      },
      {
      "balloonText": "ACT:[[value]]",
      "fillAlphas": 0.8,
      "id": "AmGraph-2",
      "lineAlpha": 0.2,
      "title": "ACT",
      "type": "column",
                      "color":"orange",
      "valueField": "act",
                       "fixedColumnWidth": 14
      }
      ],
      "guides": [],
      "valueAxes": [
      {
      "id": "ValueAxis-1",
      "position": "bottom",
      "axisAlpha": 1,
                       "titleFontSize":14,
                      "fontSize":11,     
                      "title": "Gross Geenration in MU"
      }
      ],
      
      //"plotAreaFillAlphas": 0.1,
      "depth3D": 0,
      "angle": 10,
      "allLabels": [],
      "balloon": {
          "drop":true,
          "cornerRadius": 5,
          "adjustBorderColor": false,
          "color": "#ffffff",
          "fixedPosition": true,
          "fontSize": 10
          },   
          "chartCursor": {
          "pan": true,
          "valueLineEnabled": true,
          "valueLineBalloonEnabled": true,
          "cursorAlpha": 0.05,
          "valueLineAlpha": 0.2,
          "fullWidth":true,
          "valueBalloonsEnabled":false,
          "categoryBalloonEnabled":false
      
        },  
          "legend": {
            "useGraphSettings": true,
            "position": "bottom",
            "bulletType": "round",
            "equalWidths": false,
            "valueWidth": 50,
            //"color": "#FFFFFF"
          },
      "titles": [],
      "dataProvider": [
      {
      "mw": 'CPP 540MW',
      "bp": 12.96,
      "act": 12.31
      },
      {
      "mw": 'CPP 600MW',
      "bp": 14.40,
      "act": 13.68
      },
      {
      "mw": 'IPP 600MW',
      "bp": 14.40,
      "act": 13.68
      },
      {
      "mw": 'CPP 1140MW',
      "bp": 27.36,
      "act": 25.99
      },
      {
      "mw": 'TPP 1200MW',
      "bp": 28.80,
      "act": 27.36
      },
              {
      "mw": 'TPP 1740MW',
      "bp": 41.76,
      "act": 39.67
      }
              
      ],
      "export": {
      "enabled": true
      }
      
      });
      
      $.each(dashboardKpis, function(key) {
  var rankingElements = [];
  var batch = {
   "database": {
    "Method": "GET",
    "Resource": baseServiceUrl + "elements?path=\\\\" + afServerName + "\\" + afDatabaseName + "\\DASHBOARD\\KPIS\\" + dashboardKpis[key].afname + "\\MonthlyAchievement&selectedFields=WebId;Links.Elements"
   },
   "elements": {
    "Method": "GET",
    "Resource": "{0}?selectedFields=Items.Name;Items.Path;&searchFullHierarchy=true",
    "ParentIds": ["database"],
    "Parameters": ["$.database.Content.Links.Elements"]
   },
   "attributes": {
    "Method": "GET",
    "RequestTemplate": {
     "Resource": baseServiceUrl + "attributes/multiple?selectedFields=Items.Object.Name;Items.Object.Path;Items.Object.WebId&" + dashboardKpis[key].path
    },
    "ParentIds": ["elements"],
    "Parameters": ["$.elements.Content.Items[*].Path"]
   },
   "values": {
    "Method": "GET",
    "RequestTemplate": {
     "Resource": baseServiceUrl + "streams/{0}/value"
    },
    "ParentIds": ["attributes"],
    "Parameters": ["$.attributes.Content.Items[*].Content.Items[*].Object.WebId"]
   }
  };
  var batchStr = JSON.stringify(batch, null, 2);
  var batchResult = processJsonContent(baseServiceUrl + "batch", 'POST', batchStr);
  $.when(batchResult).fail(function() {
   warningmsg("Cannot Launch Batch!!!")
  });
  $.when(batchResult).done(function() {
   var batchResultItems = (batchResult.responseJSON.attributes.Content.Items);
   let valuesID = 0;
   $.each(batchResultItems, function(elementID) {
    var attrItems = batchResultItems[elementID].Content.Items;
    var elementName = batchResult.responseJSON.elements.Content.Items[elementID].Name;
    var elementItems = [];
    elementItems[0] = ({
     "month": elementName
    });
    attrItems.forEach(function(attr, attrID) {
     if (attr !== undefined && attr.Object !== undefined) {
      attrName = attr.Object.Name;
      const getNestedObject = (nestedObj, pathArr) => {
       return pathArr.reduce((obj, key) => (obj && obj[key] !== undefined) ? obj[key] : undefined, nestedObj)
      }
      if (batchResult.responseJSON.values.Content.Items !== undefined && (batchResult.responseJSON.values.Content.Status === undefined || batchResult.responseJSON.values.Content.Status < 400) && batchResult.responseJSON.values.Content.Items[valuesID].Status === 200) {
       var attrV = getNestedObject(batchResult.responseJSON.values, ['Content', 'Items', valuesID, 'Content', 'Value']);
      }
     }
     elementItems[attrID + 1] = ({
      [attrName]: attrV
     });
     valuesID++;
    });
    rankingElements.push(elementItems);
   });
   var cols = [];
   $.each(rankingElements, function(key1) {
    cols.push({
     "month": rankingElements[key1][0].month,
     "value": (Math.round((rankingElements[key1][1].value) * 100) / 100),
     "color": rankingElements[key1][2].color
    });
   });
   AmCharts.makeChart(dashboardKpis[key].div + "Month", {
    "theme": "light",
    "type": "serial",
    "startDuration": 1,
    "dataProvider": cols,
    "valueAxes": [{
     "position": "bottom",
    }],
    "graphs": [{
     "balloonText": "[[category]]: <b>[[value]]</b>",
     "fillColorsField": "color",
     "fillAlphas": 0.8,
     "lineAlpha": 0.2,
     "type": "column",
     "valueField": "value",
     "fixedColumnWidth": 10
    }],
    "depth3D": 0,
    "angle": 10,
    "balloon": {
     "adjustBorderColor": false,
     "color": "#ffffff",
     "fixedPosition": true,
     "fontSize": 10
    },
    "chartCursor": {
     "pan": true,
     "valueLineEnabled": true,
     "valueLineBalloonEnabled": true,
     "cursorAlpha": 0.05,
     "valueLineAlpha": 0.2,
     "fullWidth": true,
     "valueBalloonsEnabled": false,
     "categoryBalloonEnabled": false,
     "zoomable": true
    },
    "categoryField": "month",
    "categoryAxis": {
     "gridPosition": "start",
     "labelRotation": 90
    },
    "export": {
     "enabled": true
    }

   });
  });

  $.each(mtdytd, function(key1) {
   var rankingElements = [];
   var batch2 = {
    "database": {
     "Method": "GET",
     "Resource": baseServiceUrl + "elements?path=\\\\" + afServerName + "\\" + afDatabaseName + "\\DASHBOARD\\KPIS\\" + dashboardKpis[key].afname + "\\" + mtdytd[key1].afname + "&selectedFields=WebId;Name;Path;Links.Attributes"
    },
    "attributes": {
     "Method": "GET",
     "RequestTemplate": {
      "Resource": baseServiceUrl + "attributes/multiple?selectedFields=Items.Object.Name;Items.Object.Path;Items.Object.WebId&" + mtdytd[key1].path
     },
     "ParentIds": [
      "database"
     ],
     "Parameters": [
      "$.database.Content.Path"
     ]
    },
    "values": {
     "Method": "GET",
     "RequestTemplate": {
      "Resource": baseServiceUrl + "streams/{0}/value"
     },
     "ParentIds": [
      "attributes"
     ],
     "Parameters": [
      "$.attributes.Content.Items[*].Content.Items[*].Object.WebId"
     ]
    }
   };
   var batchStr2 = JSON.stringify(batch2, null, 2);
   var batchResult2 = processJsonContent(baseServiceUrl + "batch", 'POST', batchStr2);
   $.when(batchResult2).fail(function() {
    warningmsg("Cannot Launch Batch!!!")
   });
   $.when(batchResult2).done(function() {
    var batchResultItems = (batchResult2.responseJSON.attributes.Content.Items);
    let valuesID = 0;
    var color = [{
     "color": "#0D52D1"
    }, {
     "color": "#de4c4f"
    }];
    $.each(batchResultItems, function(elementID) {
     var attrItems = batchResultItems[elementID].Content.Items;
     attrItems.forEach(function(attr, attrID) {
      var elementName = batchResult2.responseJSON.attributes.Content.Items[elementID].Content.Items[attrID].Object.Name;
      let attrValue = "-";
      if (attr !== undefined && attr.Object !== undefined) {
       attrName = attr.Object.Name;
       const getNestedObject = (nestedObj, pathArr) => {
        return pathArr.reduce((obj, key) =>
         (obj && obj[key] !== undefined) ? obj[key] : undefined, nestedObj);
       };
       if (batchResult2.responseJSON.values.Content.Items !== undefined &&
        (batchResult2.responseJSON.values.Content.Status === undefined || batchResult2.responseJSON.values.Content.Status < 400) &&
        batchResult2.responseJSON.values.Content.Items[valuesID].Status === 200) {
        var attrV = getNestedObject(batchResult2.responseJSON.values, ['Content', 'Items', valuesID, 'Content', 'Value']);
        if (attrV !== "" && !isNaN(attrV)) {
         attrValue = (Math.round((attrV) * 100) / 100);
        }
       }
      }
      rankingElements.push({
       mw: elementName,
       color: color[attrID].color,
       val: attrValue
      });
      valuesID++;
     });
    });
    AmCharts.makeChart(dashboardKpis[key].div + mtdytd[key1].afname, {
     "type": mtdytd[key1].type,
     "theme": mtdytd[key1].theme,
     "categoryField": "mw",
     "rotate": true,
     "startEffect": "elastic",
     "startDuration": 1,
     "categoryAxis": {
      "gridPosition": "start",
      "position": "left",
      "labelRotation": 0
     },
     "trendLines": [],
     "graphs": [{
      "balloonText": mtdytd[key1].balloonText,
      "fillAlphas": 0.8,
      "id": "AmGraph-1",
      "lineAlpha": 0.2,
      "type": "column",
      "fillColorsField": "color",
      "valueField": "val",
      "fixedColumnWidth": 10
     }],
     "guides": [],
     "valueAxes": [{
      "id": "ValueAxis-1",
      "position": "bottom",
      "axisAlpha": 1,
      "minimum": 40,
      "titleFontSize": 14,
      "fontSize": 11,
      "title": ''
     }],
     "plotAreaFillAlphas": 0.1,
     "depth3D": 0,
     "angle": 0,
     "allLabels": [],
     "balloon": {
      "drop": true,
      "cornerRadius": 5,
      "adjustBorderColor": false,
      "color": "#ffffff",
      "fixedPosition": true,
      "fontSize": 10
     },
     "chartCursor": {
      "pan": true,
      "valueLineEnabled": true,
      "valueLineBalloonEnabled": true,
      "cursorAlpha": 0.05,
      "valueLineAlpha": 0.2,
      "fullWidth": true,
      "valueBalloonsEnabled": false,
      "categoryBalloonEnabled": false
     },
     "titles": [],
     "dataProvider": rankingElements,
     "export": {
      "enabled": true
     }

    });

   });
  });
 });
   </script>
   <!-- Chart code -->
</body>
</html>