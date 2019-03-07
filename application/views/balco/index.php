<?php include('includes/header-top.php');?>
<style>
#monthlyCoalReceipt,#monthlyDeliveredCost,#plantAvailabilityfactor,#trips,#actVsBp1,#grossgeneration,#netgeneration,#auxconsumption,#grossheatrate,#gascalorificValue,#scc360 {
  width: 100%;
  height: 400px;
}
#actVsBp1MTD,#actVsBp1YTD,#actVsBp2MTD,#actVsBp2YTD,#actVsBp3MTD,#actVsBp3YTD,#actVsBp4MTD,#actVsBp4YTD,#actVsBp5MTD,#actVsBp5YTD,#actVsBp6MTD,#actVsBp6YTD
,#actVsBp7MTD,#actVsBp7YTD,#actVsBp8MTD,#actVsBp8YTD,#actVsBp9MTD,#actVsBp9YTD,#actVsBp10MTD,#actVsBp10YTD,#actVsBp11MTD,#actVsBp11YTD,#actVsBp12MTD,#actVsBp12YTD{
 width: 100%;
  height: 100px;   
}
#monthly1,#monthly2,#monthly3,#monthly4,#monthly5,#monthly6,#monthly7,#monthly8,#monthly9,#monthly10,#monthly11,#monthly12{
 width: 100%;
  height: 100px;   
}
.center{
    text-align: center;
    margin-top: 5px;
    margin-bottom: 0px !important;
}
.center h4{
    font-weight: 600;
    color:#2e3192;
    font-size: 16px;
}
.col-lg-2, .col-md-3,.col-lg-3, .col-lg-4,.col-lg-6, .col-lg-8,.col-12{
    padding-right: 3px !important;
    padding-left: 3px !important;
}
.mydata{
    padding: 20px 25px 20px 25px;
}

/*.page-wrapper{
    /*background-image: url("<?php echo base_url();?>piadmin/images/bg/balco.jpg");
    height: 100%; 
    /*background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}*/
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
.table > thead > tr > th {
    border: 1px solid #e7e7e7;
    font-weight: 600;
    text-align: center;
    color: #ffffff;
    line-height: 24px;
    font-size: 18px;
    background: #356add !important;
}
.table > tbody > tr > td {
   vertical-align:middle;
       font-weight: 501;
}
marquee{
color:#b83c8e;
font-size:20px;
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
<!--                   <div class="row">
                    <div class="col-lg-6">
                        <div class="card bg-default p-20" style="background: var(--light);">
                            <div class="card-body">
                                <div class="card-content">
                                    <marquee>A scrolling text created with HTML Marquee element.</marquee>
                                </div>
                            </div>
                        </div>
                         /# card 
                    </div>
                       
                        <div class="col-lg-6">
                        <div class="card bg-default p-20"  style="background: var(--light);">
                            <div class="card-body">
                                <div class="card-content">
                                    <marquee>A scrolling text created with HTML Marquee element.</marquee>
                                </div>
                            </div>
                        </div>
                         /# card 
                    </div>
                     /# column 
                </div>-->
                
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
                                                <th style="width:40%;text-align: center;">
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
                                                <td><div id="actVsBp1MTD"></div></td>
                                                <td><div id="monthly1"></div></td>
                                                <td>100.0</td>
                                                <td><div id="actVsBp1YTD"></div></td>
                                                                                           
                                            </tr>
                                             <tr>
                                                <td>2</td>
                                                <td>Plant Availability Factor (%)</td>
                                                 <td>100.0</td>
                                                <td><div id="actVsBp2MTD"></div></td>
                                                <td><div id="monthly2"></div></td>
                                                <td>100.0</td>
                                                <td><div id="actVsBp2YTD"></div></td>
                                                                                           
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Gross Generation</td>
                                                 <td>100.0</td>
                                                <td><div id="actVsBp3MTD"></div></td>
                                                <td><div id="monthly3"></div></td>
                                                <td>100.0</td>
                                                <td><div id="actVsBp3YTD"></div></td>
                                                                                      
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Aux Consumption</td>
                                                 <td>100.0</td>
                                                <td><div id="actVsBp4MTD"></div></td>
                                                <td><div id="monthly4"></div></td>
                                                <td>100.0</td>
                                                <td><div id="actVsBp4YTD"></div></td>
                                                                                 
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Net Generation</td>
                                                 <td>100.0</td>
                                                <td><div id="actVsBp5MTD"></div></td>
                                                <td><div id="monthly5"></div></td>
                                                <td>100.0</td>
                                                <td><div id="actVsBp5YTD"></div></td>                                                                                   
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>SCC @360</td>
                                                 <td>100.0</td>
                                                <td><div id="actVsBp6MTD"></div></td>
                                                <td><div id="monthly6"></div></td>
                                                <td>100.0</td>
                                                <td><div id="actVsBp6YTD"></div></td>                                                                                    
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Heat Rate</td>
                                                 <td>100.0</td>
                                               <td><div id="actVsBp7MTD"></div></td>
                                                <td><div id="monthly7"></div></td>
                                                <td>100.0</td>
                                                <td><div id="actVsBp7YTD"></div></td>                                                                                   
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>SOC</td>
                                                 <td>100.0</td>
                                                <td><div id="actVsBp8MTD"></div></td>
                                                <td><div id="monthly8"></div></td>
                                                <td>100.0</td>
                                                <td><div id="actVsBp8YTD"></div></td>                                                                                    
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>Oil Consumption</td>
                                                 <td>100.0</td>
                                                <td><div id="actVsBp9MTD"></div></td>
                                                <td><div id="monthly9"></div></td>
                                                <td>100.0</td>
                                                <td><div id="actVsBp9YTD"></div></td>                                                                                   
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>GCV</td>
                                                 <td>100.0</td>
                                                <td><div id="actVsBp10MTD"></div></td>
                                                <td><div id="monthly10"></div></td>
                                                <td>100.0</td>
                                                <td><div id="actVsBp10YTD"></div></td>                                                                                  
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
$.each(dashboardKpis, function(key) {
    var rankingElements = [];
    var batch = {
        "database": {
            "Method": "GET",
            "Resource": baseServiceUrl + "elements?path=\\\\" + afServerName + "\\" + afDatabaseName + "\\DASHBOARD\\KPIS\\" + dashboardKpis[key].afname + "&selectedFields=WebId;Links.Elements"
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
                "mw": elementName
            });
            attrItems.forEach(function(attr, attrID) {
                let attrValue = "-";
                if (attr !== undefined && attr.Object !== undefined) {
                    attrName = attr.Object.Name;
                    const getNestedObject = (nestedObj, pathArr) => {
                        return pathArr.reduce((obj, key) => (obj && obj[key] != undefined) ? obj[key] : undefined, nestedObj)
                    }
                    if (batchResult.responseJSON.values.Content.Items !== undefined && (batchResult.responseJSON.values.Content.Status === undefined || batchResult.responseJSON.values.Content.Status < 400) && batchResult.responseJSON.values.Content.Items[valuesID].Status === 200) {
                        var attrV = getNestedObject(batchResult.responseJSON.values, ['Content', 'Items', valuesID, 'Content', 'Value']);
                        if (attrV !== "" && !isNaN(attrV)) {
                            attrValue = (Math.round((attrV) * 100) / 100);
                        }
                    }
                }
                elementItems[attrID + 1] = ({
                    [attrName]: attrValue
                });
                valuesID++;
            });
            rankingElements[elementID] = elementItems;
        });
        console.log(rankingElements);
        var cols = [];
        
//        $.each(rankingElements, function(key1) {
//            cols.push({
//                    mw: rankingElements[key1][0].mw,
//                    bp: rankingElements[key1][2].BP,
//                    act: rankingElements[key1][1].ACT
//                });
//            }
//        });
//        var chart = AmCharts.makeChart(kpisOverallPlant[key].div, {
//            "type": "serial",
//            "theme": kpisOverallPlant[key].theme,
//            "categoryField": "mw",
//            "startEffect": "elastic",
//            "startDuration": 1,
//            "categoryAxis": {
//                "gridPosition": "start",
//                "position": "left",
//                "labelRotation": 90,
//                "fontSize": 11
//            },
//            "trendLines": [],
//            "graphs": kpisOverallPlant[key].graph,
//            "guides": [],
//            "valueAxes": [{
//                "id": "ValueAxis-1",
//                "position": "bottom",
//                "axisAlpha": 1,
//                "titleFontSize": 14,
//                "fontSize": 11,
//                "title": kpisOverallPlant[key].title
//            }],
//            "plotAreaFillAlphas": 0.1,
//            "depth3D": 0,
//            "angle": 10,
//            "allLabels": [],
//            "balloon": {
//                "drop": !0,
//                "cornerRadius": 5,
//                "adjustBorderColor": !1,
//                "color": "#ffffff",
//                "fixedPosition": !0,
//                "fontSize": 10
//            },
//            "chartCursor": {
//                "pan": !0,
//                "valueLineEnabled": !0,
//                "valueLineBalloonEnabled": !0,
//                "cursorAlpha": 0.05,
//                "valueLineAlpha": 0.2,
//                "fullWidth": !0,
//                "valueBalloonsEnabled": !1,
//                "categoryBalloonEnabled": !1
//            },
//            "legend": {
//                "useGraphSettings": !0,
//                "position": "bottom",
//                "bulletType": "round",
//                "equalWidths": !1,
//                "valueWidth": 50
//            },
//            "titles": [],
//            "dataProvider": cols,
//            "export": {
//                "enabled": !0
//            }
//        });
    });
});
</script>

<!-- Chart code -->

</body>
</html>