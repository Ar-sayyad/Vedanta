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
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-title center">
                                <h4>Unit Load Factor (ULF)</h4>
                            </div>
                            <div class="card-body">
                                <div id="unitloadfactor"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-title center">
                                <h4>Unit Availability Factor (UAF)</h4>
                            </div>
                            <div class="card-body">
                                <div id="unitAvailabilityfactor"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card">
                            <div class="card-title center">
                                <h4>Gross Generation in MU</h4>
                            </div>
                            <div class="card-body">
                                <div id="grossgeneration"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card">
                            <div class="card-title center">
                                <h4>Net Generation in MU</h4>
                            </div>
                            <div class="card-body">
                                <div id="netgeneration"></div>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-2">
                       <div class="card">
                            <div class="card-title center">
                                <h4>Aux Consumption in MU</h4>
                            </div>
                            <div class="card-body">
                                <div id="auxconsumption"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-title center">
                                <h4>Boiler EFF(IO Method)</h4>
                            </div>
                            <div class="card-body">
                                <div id="boilereffio"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-title center">
                                <h4>Boiler EFF(HL Method)</h4>
                            </div>
                            <div class="card-body">
                                <div id="boilereffhl"></div>
                            </div>
                        </div>
                    </div>
                    
                     <div class="col-lg-2">
                        <div class="card">
                            <div class="card-title center">
                                <h4>Heatrate in kcal/kWh</h4>
                            </div>
                            <div class="card-body">
                                <div id="heatrate"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card">
                            <div class="card-title center">
                                <h4>SCC in gm/kWh</h4>
                            </div>
                            <div class="card-body">
                                <div id="scc"></div>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-2">
                        <div class="card">
                            <div class="card-title center">
                                <h4>Coal Consumption in MT</h4>
                            </div>
                            <div class="card-body">
                                <div id="coalconsumption"></div>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-3">
                        <div class="card">
                            <div class="card-title center">
                                <h4>Unit Overall EFF</h4>
                            </div>
                            <div class="card-body">
                                <div id="unitoverall"></div>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-3">
                        <div class="card">
                            <div class="card-title center">
                                <h4>Turbine Efficiency</h4>
                            </div>
                            <div class="card-body">
                                <div id="turbine"></div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
                
<!--                <div class="row">
                    <div class="col-12">
                        <div class="card mydata">
                            <div class="card-body">
                                <h4 class="card-title">Data Export</h4>
                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                <div class="table-responsive">
                                    <table id="example23" class="display nowrap table table-striped  table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr style="background-color: #2177cd;">
                                                <th rowspan="2">Sr.</th>
                                                <th rowspan="2">KPI's - Plant Performance</th>
                                                <th rowspan="2">UOM</th>
                                                <th colspan="2">CPP 540 MW</th>
                                                <th colspan="2">CPP 600 MW</th>
                                                <th colspan="2">IPP 600 MW</th>
                                                <th colspan="2">CPP 1140 MW</th>
                                                <th colspan="2">TPP 1200 MW</th>
                                                <th colspan="2">TPP 1740 MW</th>
                                            </tr>
                                            <tr style="background-color: #2177cd;">
                                                 <th>BP</th>
                                                  <th>ACT</th>
                                                   <th>BP</th>
                                                  <th>ACT</th>
                                                   <th>BP</th>
                                                  <th>ACT</th>
                                                   <th>BP</th>
                                                  <th>ACT</th>
                                                   <th>BP</th>
                                                  <th>ACT</th>
                                                   <th>BP</th>
                                                  <th>ACT</th>
                                               
                                          </tr>
                                        </thead>
                                            <tr>
                                                <td>1</td>
                                                <td>Plant Load Factor</td>
                                                <td>%</td>
                                                <td>100.0</td>
                                                <td>95.0</td>
                                                <td>100.0</td>
                                                <td>95.0</td>
                                                <td>100.0</td>
                                                <td>95.0</td>
                                                <td>100.0</td>
                                                <td>95.0</td>
                                                <td>100.0</td>
                                                <td>95.0</td>
                                                <td>100.0</td>
                                                <td>95.0</td>                                                
                                            </tr>
                                             <tr>
                                                <td>2</td>
                                                <td>Plant Availability Factor</td>
                                                <td>%</td>
                                                <td>100.0</td>
                                                <td>95.0</td>
                                                <td>100.0</td>
                                                <td>95.0</td>
                                                <td>100.0</td>
                                                <td>95.0</td>
                                                <td>100.0</td>
                                                <td>95.0</td>
                                                <td>100.0</td>
                                                <td>95.0</td>
                                                <td>100.0</td>
                                                <td>95.0</td>                                                
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Gross Generation</td>
                                                <td>MU</td>
                                                <td>12.96</td>
                                                <td>12.31</td>
                                                <td>14.40</td>
                                                <td>13.68</td>
                                                <td>14.40</td>
                                                <td>13.68</td>
                                                <td>27.36</td>
                                                <td>25.99</td>
                                                <td>28.80</td>
                                                <td>27.36</td>
                                                <td>41.8</td>
                                                <td>39.7</td>                                                
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Aux Consumption</td>
                                                <td>%</td>
                                                <td>9.0</td>
                                                <td>10.0</td>
                                                <td>9.0</td>
                                                <td>10.0</td>
                                                <td>9.0</td>
                                                <td>10.0</td>
                                                <td>9.0</td>
                                                <td>10.0</td>
                                                <td>9.0</td>
                                                <td>10.0</td>
                                                <td>9.0</td>
                                                <td>10.0</td>                                            
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Net Generation</td>
                                                <td>MU</td>
                                                <td>11.79</td>
                                                <td>11.8</td>
                                                <td>13.10</td>
                                                <td>12.31</td>
                                                <td>13.10</td>
                                                <td>12.31</td>
                                                <td>24.90</td>
                                                <td>23.39</td>
                                                <td>26.21</td>
                                                <td>24.62</td>
                                                <td>38.0</td>
                                                <td>35.7</td>                                            
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>SCC @360</td>
                                                <td>gms/kWh</td>
                                                <td>700</td>
                                                <td>705</td>
                                                <td>700</td>
                                                <td>705</td>
                                                <td>700</td>
                                                <td>705</td>
                                                <td>700</td>
                                                <td>705</td>
                                                <td>700</td>
                                                <td>705</td>
                                                <td>700</td>
                                                <td>705</td>                                           
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Heat Rate</td>
                                                <td>kcal/kWh</td>
                                                <td>2300</td>
                                                <td>2500</td>
                                                <td>2300</td>
                                                <td>2500</td>
                                                <td>2300</td>
                                                <td>2500</td>
                                                <td>2300</td>
                                                <td>2500</td>
                                                <td>2300</td>
                                                <td>2500</td>
                                                <td>2300</td>
                                                <td>2500</td>                                          
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>SOC</td>
                                                <td>ml/kWh</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>                                          
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>Oil Consumption</td>
                                                <td>kl</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>                                          
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>GCV</td>
                                                <td>kcal/kg</td>
                                                <td>3300</td>
                                                <td>3300</td>
                                                <td>3300</td>
                                                <td>3300</td>
                                                <td>3300</td>
                                                <td>3300</td>
                                                <td>3300</td>
                                                <td>3300</td>
                                                <td>3300</td>
                                                <td>3300</td>
                                                <td>3300</td>
                                                <td>3300</td>                                       
                                            </tr>
                                             <tr>
                                                <td>11</td>
                                                <td>Tripping</td>
                                                <td>No's</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>                                          
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>Tube Leakage</td>
                                                <td>No's</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>                                          
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
                
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
   var elementName = "OverallPlant";//KPI'S Element Name
        $.each(kpisOverallPlant, function (key) {    
        var rankingElements=[];
        var batch = {
                        "database": {
                            "Method": "GET",
                            "Resource": baseServiceUrl + "elements?path=\\\\" + afServerName + "\\" + afDatabaseName + "\\KPIS\\"+elementName+"\\"+kpisOverallPlant[key].afname+"&selectedFields=WebId;Links.Elements"
                        },
                        "elements": {
                            "Method": "GET",
                            "Resource": "{0}?templateName=KPIS&selectedFields=Items.Name;Items.Path;&searchFullHierarchy=true",
                            "ParentIds": [
                                "database"
                            ],
                            "Parameters": [
                                "$.database.Content.Links.Elements"
                            ]
                        },
                        "attributes": {
                            "Method": "GET",
                            "RequestTemplate": {
                                "Resource": baseServiceUrl + "attributes/multiple?selectedFields=Items.Object.Name;Items.Object.Path;Items.Object.WebId&"+kpisOverallPlant[key].path
                            },
                            "ParentIds": [
                                "elements"
                            ],
                            "Parameters": [
                                "$.elements.Content.Items[*].Path"
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
       
        var batchStr = JSON.stringify(batch, null, 2)
        var batchResult = processJsonContent(baseServiceUrl + "batch", 'POST', batchStr);
        $.when(batchResult).fail(function () {
            warningmsg("Cannot Launch Batch!!!");
        });
         $.when(batchResult).done(function () {
        var batchResultItems = (batchResult.responseJSON.attributes.Content.Items);
        let valuesID = 0;
        $.each(batchResultItems, function (elementID) {
            var attrItems = batchResultItems[elementID].Content.Items;
            var elementName = batchResult.responseJSON.elements.Content.Items[elementID].Name;
            var elementItems = [];
            elementItems[0]=({"mw":elementName});
            attrItems.forEach(function (attr, attrID) {
                let attrValue = "-"
                if (attr !== undefined && attr.Object !== undefined) {
                    attrName = attr.Object.Name;
                    const getNestedObject = (nestedObj, pathArr) => {
                        return pathArr.reduce((obj, key) =>
                            (obj && obj[key] != undefined) ? obj[key] : undefined, nestedObj);
                    }
                    if (batchResult.responseJSON.values.Content.Items !== undefined &&
                        (batchResult.responseJSON.values.Content.Status === undefined || batchResult.responseJSON.values.Content.Status < 400) &&
                        batchResult.responseJSON.values.Content.Items[valuesID].Status === 200) {
                        var attrV = getNestedObject(batchResult.responseJSON.values,
                            ['Content', 'Items', valuesID, 'Content', 'Value'])
                        if (attrV !== "" && !isNaN(attrV)) {
                            attrValue = (Math.round((attrV) * 100) / 100);                            
                        }
                    }
                }
                 elementItems[attrID + 1]=({[attrName]:attrValue});
                valuesID++;
            });
            rankingElements[elementID] = elementItems;
        });
        var cols=[];
       $.each(rankingElements, function (key1) {
               if(kpisOverallPlant[key].afname==='Trips'){
                       cols.push({ mw: rankingElements[key1][0].mw,Trips:rankingElements[key1][1].Trips });
               }else if(kpisOverallPlant[key].afname==='TubeLeaks'){
                      cols.push({ mw: rankingElements[key1][0].mw,TubeLeaks:rankingElements[key1][1].Tube_Leaks });  
               }else{
                     cols.push({ mw: rankingElements[key1][0].mw,bp:rankingElements[key1][2].BP,act:rankingElements[key1][1].ACT });
               }
        });
      var chart = AmCharts.makeChart(kpisOverallPlant[key].div, {
                        "type": "serial",
                        "theme": kpisOverallPlant[key].theme,
                        "categoryField": "mw",
                        //"rotate": true,
                        "startEffect": "elastic",
                        "startDuration": 1,
                        "categoryAxis": {
                            "gridPosition": "start",
                            "position": "left",
                            "labelRotation": 90,
                            "fontSize": 11
                        },
                        "trendLines": [],
                        "graphs": kpisOverallPlant[key].graph,
                        "guides": [],
                        "valueAxes": [{
                            "id": "ValueAxis-1",
                            "position": "bottom",
                            "axisAlpha": 1,
                            "titleFontSize": 14,
                            "fontSize": 11,
                            "title": kpisOverallPlant[key].title
                        }],
                        "plotAreaFillAlphas": 0.1,
                        "depth3D": 0,
                        "angle": 10,
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
                        "legend": {
                            "useGraphSettings": true,
                            "position": "bottom",
                            "bulletType": "round",
                            "equalWidths": false,
                            "valueWidth": 50,
                            //"color": "#FFFFFF"
                        },
                        "titles": [],
                        "dataProvider": cols,
                        "export": {
                            "enabled": true
                        }
                    });

        });
 
});///json array      
var chart = AmCharts.makeChart("unitloadfactor", {
    "type": "pie",
    "theme": "light",
    "titles": [],
    "dataProvider": [{
        "unit": "ULF",
        "val": 95
    }, {
        "unit": "Losses",
        "val": 5
    }],
    "balloon": {
        "drop": true, //"cornerRadius": 5,
        "adjustBorderColor": false,
        "color": "#ffffff",
        "fixedPosition": true,
        "fontSize": 9
    },
    "valueField": "val",
    "titleField": "unit",
    "adjustBorderColor": false, //"startEffect": "elastic",
    "startDuration": 0,
    "labelsEnabled": false,
    "labelRadius": 5,
    pullOutRadius: 60,
    "outlineColor": "",
    "innerRadius": "45%",
    "depth3D": 0,
    "balloonText": "[[title]]<br><span style='font-size:10px'><b>[[value]]</b><br> ([[percents]]%)</span>",
    "angle": 0,
    "export": {
        "enabled": true
    }
});

var chart = AmCharts.makeChart("grossgeneration", {
    "type": "serial",
    "theme": "light",
    "categoryField": "mw",
    //"rotate": true,
    "startDuration": 1,
    "categoryAxis": {
        "gridPosition": "start",
        "position": "left",
        "labelRotation": 0,
        "fontSize": 11,
    },
    "trendLines": [],
    "graphs": [{
        "balloonText": "Gross:<br>[[value]]",
        "colorField": "color",
        "fillAlphas": 0.85,
        "id": "AmGraph-1",
        "lineAlpha": 0.1,
        "type": "column",
        "color": "skyblue",
        "valueField": "value",
        "fixedColumnWidth": 20
    }],
    "guides": [],
    "valueAxes": [{
        //"maximum": 4,
        "minimum": 2.5,
        "axisAlpha": 1,
        "dashLength": 4,
        "titleFontSize": 14,
        "fontSize": 11,
        "position": "left",
        "id": "ValueAxis-1",
        "position": "bottom",
        "title": "Gross Generation in MU"
    }],
    "plotAreaFillAlphas": 0.1,
    "depth3D": 0,
    "angle": 10,
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
        "valueBalloonsEnabled": true,
        "categoryBalloonEnabled": false

    },
    "titles": [],
    "dataProvider": [{
            "mw": 'BP',
            "color": "#0D52D1",
            "value": 3.24
        },
        {
            "mw": 'ACT',
            "color": "#de4c4f",
            "value": 3.08
        }
    ],
    "export": {
        "enabled": true
    }

});
</script>

<!-- Chart code -->

</body>
</html>