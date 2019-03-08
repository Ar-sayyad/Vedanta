var baseServiceUrl = "https://192.168.1.28:1706/piwebapi/"; /***PI WEBAPI URL***/
var user = "Asif";/***USERNAME***/
var pass = "ECG@123";/***PASSWORD***/
var afServerName = "ECG-DEV-SERVER";/***AF SERVER NAME***/
var afDatabaseName = "BALCOPOWER";//Aasif_Development//"Mayhar";/***DATABASE NAME***/
var enableBasicAuth=true;

var processJsonContent=function(url,type,data){
    return $.ajax({
        url:encodeURI(url),
        headers: { 'X-Requested-With': 'XMLHttpRequest' },
        type:type,
        data:data,
        contentType:"application/json; charset=UTF-8",
        crossDomain: true,
        xhrFields: { withCredentials: true },
        beforeSend:function(xhr){
            if(enableBasicAuth){
                xhr.setRequestHeader("Authorization",makeBasicAuth(user,pass));
            }
        }
    })
};

var makeBasicAuth=function(user,password){
    var tok=user+':'+password;
    var hash=window.btoa(tok);
    return"Basic "+hash;
}

/****KPIS****/
var kpisOverallPlant = [
            {
                "afname": "PLF", //PI AF ELEMENT
                "div": "plantloadfactor", // DIV NAME WHERE TO DISPLAY CHART
                "title": "PLF in (%)",
                "theme": "light",
                "path":"path={0}|ACT&path={0}|BP", //PI Attributes Path for Query
                "graph": [{
                        "balloonText": "BP<br>[[value]]",
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
                        "balloonText": "ACT<br>[[value]]",
                        "fillAlphas": 0.8,
                        "id": "AmGraph-2",
                        "lineAlpha": 0.2,
                        "title": "ACT",
                        "type": "column",
                        "color":"orange",
                        "valueField": "act",
                        "fixedColumnWidth": 14
                        }]
            },
            {
                "afname": "PAF", //PI AF ELEMENT
                "div": "plantAvailabilityfactor",// DIV NAME WHERE TO DISPLAY CHART
                "title": "PAF in (%)",
                "theme": "light",
                "path":"path={0}|ACT&path={0}|BP",//PI Attributes Path for Query
                "graph": [{
                        "balloonText": "BP<br>[[value]]",
                        "fillAlphas": 0.8,
                        "id": "AmGraph-1",
                        "lineAlpha": 0.2,
                        "title": "BP",
                        "type": "column",
                        "color": "skyblue",
                        "valueField": "bp",
                        "fixedColumnWidth": 14
                    },
                    {
                        "balloonText": "ACT<br>[[value]]",
                        "fillAlphas": 0.8,
                        "id": "AmGraph-2",
                        "lineAlpha": 0.2,
                        "title": "ACT",
                        "type": "column",
                        "color": "orange",
                        "valueField": "act",
                        "fixedColumnWidth": 14
                    }]
            },
            {
                "afname": "Trips",//PI AF ELEMENT
                "div": "trips",// DIV NAME WHERE TO DISPLAY CHART
                "title": "No of Trips",
                "theme": "none",
                "path":"path={0}|Trips",//PI Attributes Path for Query
                "graph": [{
                    "balloonText": "Trips<br>[[value]]",
                    "fillAlphas": 0.8,
                    "id": "AmGraph-1",
                    "lineAlpha": 0.2,
                    "title": "Trips",
                    "type": "column",
                    "color":"skyblue",
                    "valueField": "Trips",
                    "fixedColumnWidth": 14
                }]
            }, 
            {
                "afname": "TubeLeaks",//PI AF ELEMENT
                "div": "tubeleaks",// DIV NAME WHERE TO DISPLAY CHART
                "title": "No of Tube Leaks",
                "theme": "light",
                "path":"path={0}|Tube_Leaks",//PI Attributes Path for Query
                "graph": [{
                       "balloonText": "Tube<br>[[value]]",
                       "fillAlphas": 0.8,
                       "id": "AmGraph-1",
                       "lineAlpha": 0.2,
                       "title": "Tube Leaks",
                       "type": "column",
                       "color":"skyblue",
                       "valueField": "TubeLeaks",
                       "fixedColumnWidth": 14
                }]
            },
            {
                "afname": "GrossGenration",//PI AF ELEMENT
                "div": "grossgeneration",// DIV NAME WHERE TO DISPLAY CHART
                "title": "Gross Generation in MU",
                "theme": "none",
                "path":"path={0}|ACT&path={0}|BP",//PI Attributes Path for Query
                "graph": [{
                        "balloonText": "BP<br>[[value]]",
                        "fillAlphas": 0.8,
                        "id": "AmGraph-1",
                        "lineAlpha": 0.2,
                        "title": "BP",
                        "type": "column",
                        "color": "skyblue",
                        "valueField": "bp",
                        "fixedColumnWidth": 14
                    },
                    {
                        "balloonText": "ACT<br>[[value]]",
                        "fillAlphas": 0.8,
                        "id": "AmGraph-2",
                        "lineAlpha": 0.2,
                        "title": "ACT",
                        "type": "column",
                        "color": "orange",
                        "valueField": "act",
                        "fixedColumnWidth": 14
                    }]
            }, 
            {
                "afname": "NetGeneration",//PI AF ELEMENT
                "div": "netgeneration",// DIV NAME WHERE TO DISPLAY CHART
                "title": "Net Generation in MU",
                "theme": "none",
                "path":"path={0}|ACT&path={0}|BP",//PI Attributes Path for Query
                "graph": [{
                        "balloonText": "BP<br>[[value]]",
                        "fillAlphas": 0.8,
                        "id": "AmGraph-1",
                        "lineAlpha": 0.2,
                        "title": "BP",
                        "type": "column",
                        "color": "skyblue",
                        "valueField": "bp",
                        "fixedColumnWidth": 14
                    },
                    {
                        "balloonText": "ACT<br>[[value]]",
                        "fillAlphas": 0.8,
                        "id": "AmGraph-2",
                        "lineAlpha": 0.2,
                        "title": "ACT",
                        "type": "column",
                        "color": "orange",
                        "valueField": "act",
                        "fixedColumnWidth": 14
                    }]
            }, 
            {
                "afname": "AuxConsumption",//PI AF ELEMENT
                "div": "auxconsumption",// DIV NAME WHERE TO DISPLAY CHART
                "title": "Aux Consumption in (%)",
                "theme": "light",
                "path":"path={0}|ACT&path={0}|BP",//PI Attributes Path for Query
                "graph": [{
                        "balloonText": "BP<br>[[value]]",
                        "fillAlphas": 0.8,
                        "id": "AmGraph-1",
                        "lineAlpha": 0.2,
                        "title": "BP",
                        "type": "column",
                        "color": "skyblue",
                        "valueField": "bp",
                        "fixedColumnWidth": 14
                    },
                    {
                        "balloonText": "ACT<br>[[value]]",
                        "fillAlphas": 0.8,
                        "id": "AmGraph-2",
                        "lineAlpha": 0.2,
                        "title": "ACT",
                        "type": "column",
                        "color": "orange",
                        "valueField": "act",
                        "fixedColumnWidth": 14
                    }]
            }, 
            {
                "afname": "GrossHeatRate",//PI AF ELEMENT
                "div": "grossheatrate",// DIV NAME WHERE TO DISPLAY CHART
                "title": "Heatrate in kcal/kwh",
                "theme": "light",
                "path":"path={0}|ACT&path={0}|BP",//PI Attributes Path for Query
                "graph": [{
                        "balloonText": "BP<br>[[value]]",
                        "fillAlphas": 0.8,
                        "id": "AmGraph-1",
                        "lineAlpha": 0.2,
                        "title": "BP",
                        "type": "column",
                        "color": "skyblue",
                        "valueField": "bp",
                        "fixedColumnWidth": 14
                    },
                    {
                        "balloonText": "ACT<br>[[value]]",
                        "fillAlphas": 0.8,
                        "id": "AmGraph-2",
                        "lineAlpha": 0.2,
                        "title": "ACT",
                        "type": "column",
                        "color": "orange",
                        "valueField": "act",
                        "fixedColumnWidth": 14
                    }]
            }, 
            {
                "afname": "GCV",//PI AF ELEMENT
                "div": "gascalorificValue",// DIV NAME WHERE TO DISPLAY CHART
                "title": "GCV in kcal/kg",
                "theme": "light",
                "path":"path={0}|ACT&path={0}|BP",//PI Attributes Path for Query
                "graph": [{
                        "balloonText": "BP<br>[[value]]",
                        "fillAlphas": 0.8,
                        "id": "AmGraph-1",
                        "lineAlpha": 0.2,
                        "title": "BP",
                        "type": "column",
                        "color": "skyblue",
                        "valueField": "bp",
                        "fixedColumnWidth": 14
                    },
                    {
                        "balloonText": "ACT<br>[[value]]",
                        "fillAlphas": 0.8,
                        "id": "AmGraph-2",
                        "lineAlpha": 0.2,
                        "title": "ACT",
                        "type": "column",
                        "color": "orange",
                        "valueField": "act",
                        "fixedColumnWidth": 14
                    }]
            }, 
            {
                "afname": "SCC@3600",//PI AF ELEMENT
                "div": "scc360",// DIV NAME WHERE TO DISPLAY CHART
                "title": "SCC in gm/kwh",
                "theme": "light",
                "path":"path={0}|ACT&path={0}|BP",//PI Attributes Path for Query
                "graph": [{
                        "balloonText": "BP<br>[[value]]",
                        "fillAlphas": 0.8,
                        "id": "AmGraph-1",
                        "lineAlpha": 0.2,
                        "title": "BP",
                        "type": "column",
                        "color": "skyblue",
                        "valueField": "bp",
                        "fixedColumnWidth": 14
                    },
                    {
                        "balloonText": "ACT<br>[[value]]",
                        "fillAlphas": 0.8,
                        "id": "AmGraph-2",
                        "lineAlpha": 0.2,
                        "title": "ACT",
                        "type": "column",
                        "color": "orange",
                        "valueField": "act",
                        "fixedColumnWidth": 14
                    }]
}];
/****KPIS****/

/****Unit Performance****/
var performanceUnits = [
            {
                "afname": "ULF", //PI AF ELEMENT
                "div": "unitloadfactor", // DIV NAME WHERE TO DISPLAY CHART
                "title": "Unit Load Factor (ULF)",
                "theme": "light",
                "type":"pie",//type of chart
                "path":"path={0}|ULF&path={0}|Losses",
                "balloonText": "[[title]]<br><span style='font-size:10px'><b>[[value]]</b><br> ([[percents]]%)</span>"                
            },
            {
                "afname": "UAF", //PI AF ELEMENT
                "div": "unitAvailabilityfactor", // DIV NAME WHERE TO DISPLAY CHART
                "title": "Unit Availability Factor (UAF)",
                "theme": "light",
                "type":"pie",//type of chart
                "path":"path={0}|UAF&path={0}|Losses",
                "balloonText": "[[title]]<br><span style='font-size:10px'><b>[[value]]</b><br> ([[percents]]%)</span>"                
            },
            {
                "afname": "GrossGenerationMU", //PI AF ELEMENT
                "div": "grossgeneration", // DIV NAME WHERE TO DISPLAY CHART
                "title": "Gross Generation in MU",
                "theme": "light",
                "type":"serial",//type of chart
                "path":"path={0}|BP&path={0}|ACT",
                "balloonText": "Gross:<br>[[value]]"             
            },
            {
                "afname": "NetGenerationMU", //PI AF ELEMENT
                "div": "netgeneration", // DIV NAME WHERE TO DISPLAY CHART
                "title": "Net Generation in MU",
                "theme": "none",
                "type":"serial",//type of chart
                "path":"path={0}|BP&path={0}|ACT",
                "balloonText": "Net:<br>[[value]]"             
            },
            {
                "afname": "AuxConsumptionMU", //PI AF ELEMENT
                "div": "auxconsumption", // DIV NAME WHERE TO DISPLAY CHART
                "title": "Aux Consumption in MU",
                "theme": "none",
                "type":"serial",//type of chart
                "path":"path={0}|BP&path={0}|ACT",
                "balloonText": "Aux:<br>[[value]]"             
            },
            {
                "afname": "BoilerEFF_IO", //PI AF ELEMENT
                "div": "boilereffio", // DIV NAME WHERE TO DISPLAY CHART
                "title": "Boiler EFF(IO Method)",
                "theme": "light",
                "type":"pie",//type of chart
                "path":"path={0}|IO&path={0}|Losses",
                "balloonText": "[[title]]<br><span style='font-size:10px'><b>[[value]]</b><br> ([[percents]]%)</span>"             
            },
            {
                "afname": "BoilerEFF_HL", //PI AF ELEMENT
                "div": "boilereffhl", // DIV NAME WHERE TO DISPLAY CHART
                "title": "Boiler EFF(HL Method)",
                "theme": "light",
                "type":"pie",//type of chart
                "path":"path={0}|HL&path={0}|Losses",
                "balloonText": "[[title]]<br><span style='font-size:10px'><b>[[value]]</b><br> ([[percents]]%)</span>"             
            },
            {
                "afname": "Heatrate", //PI AF ELEMENT
                "div": "heatrate", // DIV NAME WHERE TO DISPLAY CHART
                "title": "Heatrate in kcal/kWh",
                "theme": "none",
                "type":"serial",//type of chart
                "path":"path={0}|BP&path={0}|ACT",
                "balloonText": "HeatRate:<br>[[value]]"             
            },
            {
                "afname": "SCC", //PI AF ELEMENT
                "div": "scc", // DIV NAME WHERE TO DISPLAY CHART
                "title": "SCC in gm/kWh",
                "theme": "none",
                "type":"serial",//type of chart
                "path":"path={0}|BP&path={0}|ACT",
                "balloonText": "SCC:<br>[[value]]"             
            },
            {
                "afname": "CoalConsumptionMT", //PI AF ELEMENT
                "div": "coalconsumption", // DIV NAME WHERE TO DISPLAY CHART
                "title": "Coal Consumption in MT",
                "theme": "none",
                "type":"serial",//type of chart
                "path":"path={0}|BP&path={0}|ACT",
                "balloonText": "Coal:<br>[[value]]"             
            },
            {
                "afname": "UnitOverallEFF", //PI AF ELEMENT
                "div": "unitoverall", // DIV NAME WHERE TO DISPLAY CHART
                "title": "Unit Overall EFF",
                "theme": "light",
                "type":"pie",//type of chart
                "path":"path={0}|Overall_EFF&path={0}|Losses",
                "balloonText": "[[title]]<br><span style='font-size:10px'><b>[[value]]</b><br> ([[percents]]%)</span>"             
            },
            {
                "afname": "TurbineEfficiency", //PI AF ELEMENT
                "div": "turbine", // DIV NAME WHERE TO DISPLAY CHART
                "title": "Turbine Efficiency",
                "theme": "light",
                "type":"pie",//type of chart
                "path":"path={0}|Turbine&path={0}|Losses",
                "balloonText": "[[title]]<br><span style='font-size:10px'><b>[[value]]</b><br> ([[percents]]%)</span>"             
            }            
];
/****Unit Performance****/

/****Boiler Performance****/
var boilerPerformance = [
            {
                "afname": "BoilerEfficiency1", //PI AF ELEMENT
                "div": "boilerOneEfficiency", // DIV NAME WHERE TO DISPLAY CHART
                "title": "Boiler #1 Efficiency",
                "theme": "light",
                "type":"pie",//type of chart
                "path":"path={0}|Efficiency&path={0}|L1&path={0}|L2&path={0}|L3",
                "balloonText": "[[title]]<br><span style='font-size:10px'><b>[[value]]</b><br> ([[percents]]%)</span>"                
            },
            {
                "afname": "BoilerEfficiency2", //PI AF ELEMENT
                "div": "boilerTwoEfficiency", // DIV NAME WHERE TO DISPLAY CHART
                "title": "Boiler #2 Efficiency",
                "theme": "light",
                "type":"pie",//type of chart
                "path":"path={0}|Efficiency&path={0}|L1&path={0}|L2&path={0}|L3",
                "balloonText": "[[title]]<br><span style='font-size:10px'><b>[[value]]</b><br> ([[percents]]%)</span>"                
            },
            {
                "afname": "BoilerEfficiency3", //PI AF ELEMENT
                "div": "boilerThreeEfficiency", // DIV NAME WHERE TO DISPLAY CHART
                "title": "Boiler #3 Efficiency",
                "theme": "light",
                "type":"pie",//type of chart
                "path":"path={0}|Efficiency&path={0}|L1&path={0}|L2&path={0}|L3",
                "balloonText": "[[title]]<br><span style='font-size:10px'><b>[[value]]</b><br> ([[percents]]%)</span>"                
            },
            {
                "afname": "BoilerEfficiency4", //PI AF ELEMENT
                "div": "boilerFourEfficiency", // DIV NAME WHERE TO DISPLAY CHART
                "title": "Boiler #4 Efficiency",
                "theme": "light",
                "type":"pie",//type of chart
                "path":"path={0}|Efficiency&path={0}|L1&path={0}|L2&path={0}|L3",
                "balloonText": "[[title]]<br><span style='font-size:10px'><b>[[value]]</b><br> ([[percents]]%)</span>"                
            }
];

var allBoilerEfficiency = [
            {
                "afname": "AllBoilerEfficiency", //PI AF ELEMENT
                "div": "boilerEfficiency", // DIV NAME WHERE TO DISPLAY CHART
                "title": "Boiler Efficiency",
                "theme": "light",
                "type":"serial",//type of chart
                "path":"path={0}|HL&path={0}|IO", //PI Attributes Path for Query
                "graph": [{
                        "balloonText": "HL<br>[[value]]",
                        "fillAlphas": 0.8,
                        "id": "AmGraph-1",
                        "lineAlpha": 0.2,
                        "title": "HL",
                        "type": "column",
                        "color":"skyblue",
                        "valueField": "hl",
                        "fixedColumnWidth": 14
                        },
                      {
                        "balloonText": "IO<br>[[value]]",
                        "fillAlphas": 0.8,
                        "id": "AmGraph-2",
                        "lineAlpha": 0.2,
                        "title": "IO",
                        "type": "column",
                        "color":"orange",
                        "valueField": "io",
                        "fixedColumnWidth": 14
                        }]
            },
            {
                "afname": "Performance", //PI AF ELEMENT
                "div": "plantwiseFFTPerformance", // DIV NAME WHERE TO DISPLAY CHART
                "title": "Unit wise Performance",
                "theme": "light",
                "type":"pie",//type of chart
                "path":"path={0}|Value",
                "balloonText": "[[title]]<br><span style='font-size:10px'><b>[[value]]</b><br> ([[percents]]%)</span>"             
            }    
];
/****Boiler Performance****/

/****tURBINE Performance****/
var turbinePerformance = [
            {
                "afname": "Performance", //PI AF ELEMENT
                "div": "plantwiseFFTPerformance", // DIV NAME WHERE TO DISPLAY CHART
                "title": "Unit wise Performance",
                "theme": "light",
                "type":"pie",//type of chart
                "path":"path={0}|Value",
                "balloonText": "[[title]]<br><span style='font-size:10px'><b>[[value]]</b><br> ([[percents]]%)</span>"             
            },
            {
                "afname": "SteamTurbineEffciency", //PI AF ELEMENT
                "div": "boilerOneEfficiency", // DIV NAME WHERE TO DISPLAY CHART
                "title": "Efficiency (%)",
                "theme": "light",
                "type":"serial",//type of chart
                "path":"path={0}|value",
                "color":"#007bff",
                "balloonText": "Efficiency:<br>[[value]]"             
            },
            {
                "afname": "CondenserEffectiveness", //PI AF ELEMENT
                "div": "boilerTwoEfficiency", // DIV NAME WHERE TO DISPLAY CHART
                "title": "Effectiveness (%)",
                "theme": "light",
                "type":"serial",//type of chart
                "path":"path={0}|value",
                "color":"#dc3545",
                "balloonText": "Effect.:<br>[[value]]"             
            },
            {
                "afname": "SteamTurbineHPCylinderEfficiency", //PI AF ELEMENT
                "div": "boilerEfficiency", // DIV NAME WHERE TO DISPLAY CHART
                "title": "Efficiency (%)",
                "theme": "light",
                "type":"serial",//type of chart
                "path":"path={0}|value",
                "color":"#ffc107",
                "balloonText": "Efficiency.:<br>[[value]]"             
            },
            {
                "afname": "SteamTurbineIPCylinderEfficiency", //PI AF ELEMENT
                "div": "boilerThreeEfficiency", // DIV NAME WHERE TO DISPLAY CHART
                "title": "Efficiency (%)",
                "theme": "light",
                "type":"serial",//type of chart
                "path":"path={0}|value",
                "color":"#6610f2",
                "balloonText": "Efficiency.:<br>[[value]]"             
            },
            {
                "afname": "SteamTurbineLPCylinderEfficiency", //PI AF ELEMENT
                "div": "boilerFourEfficiency", // DIV NAME WHERE TO DISPLAY CHART
                "title": "Efficiency (%)",
                "theme": "light",
                "type":"serial",//type of chart
                "path":"path={0}|value",
                "color":"#0b1551",
                "balloonText": "Efficiency.:<br>[[value]]"             
            }
        
];
/****tURBINE Performance****/

/****Plant Performance****/
var elementPerformance=[
            {
                "afname": "OverallPlant", //PI AF ELEMENT          
            },
            {
                "afname": "540MW", //PI AF ELEMENT       
            },
            {
                "afname": "1200MW", //PI AF ELEMENT        
            }        
];
var plantPerformance = [
            {
                "afname": "PlantGeneration", //PI AF ELEMENT
                "div": "PlantGeneration", // DIV NAME WHERE TO DISPLAY CHART
                "title": "Overall Plant Generation",
                "theme": "light",
                "type":"gauge",//type of chart
                "path":"path={0}|color&path={0}|StartValue&path={0}|endValue"           
            },
           {
                "afname": "AuxGeneration", //PI AF ELEMENT
                "div": "AuxConsumption", // DIV NAME WHERE TO DISPLAY CHART
                "title": "Overall Aux Generation",
                "theme": "light",
                "type":"gauge",//type of chart
                "path":"path={0}|color&path={0}|StartValue&path={0}|endValue"            
            },
            {
                "afname": "PlantGrossEfficiency", //PI AF ELEMENT
                "div": "PlantGrossEfficiency", // DIV NAME WHERE TO DISPLAY CHART
                "title": "Overall Plant Gross Efficiency",
                "theme": "light",
                "type":"gauge",//type of chart
                "path":"path={0}|color&path={0}|StartValue&path={0}|endValue"            
            },
             {
                "afname": "PlantGrossHeatRate", //PI AF ELEMENT
                "div": "PlantGrossHeatRate", // DIV NAME WHERE TO DISPLAY CHART
                "title": "Overall Plant Gross Heatrate",
                "theme": "light",
                "type":"gauge",//type of chart
                "path":"path={0}|color&path={0}|StartValue&path={0}|endValue"            
            }
        
];
/****Plant Performance****/

/****DASHBOARD KPIS****/
var dashboardKpis = [
            {
                "afname": "PLF", //PI AF ELEMENT
                "div": "plf", // DIV NAME WHERE TO DISPLAY CHART
                "title": "PLF in (%)",
                "theme": "light",
                "path":"path={0}|value&path={0}|color", //PI Attributes Path for Query
            },
            {
                "afname": "PAF", //PI AF ELEMENT
                "div": "paf",// DIV NAME WHERE TO DISPLAY CHART
                "title": "PAF in (%)",
                "theme": "light",
                "path":"path={0}|value&path={0}|color",//PI Attributes Path for Query
           }, 
            {
                "afname": "GrossGeneration",//PI AF ELEMENT
                "div": "grossgeneration",// DIV NAME WHERE TO DISPLAY CHART
                "title": "Gross Generation",
                "theme": "none",
                "path":"path={0}|value&path={0}|color",//PI Attributes Path for Query
             }, 
            {
                "afname": "AuxConsumption",//PI AF ELEMENT
                "div": "auxconsumption",// DIV NAME WHERE TO DISPLAY CHART
                "title": "Aux Consumption",
                "theme": "light",
                "path":"path={0}|value&path={0}|color",//PI Attributes Path for Query
              }, 
            {
                "afname": "NetGeneration",//PI AF ELEMENT
                "div": "netgeneration",// DIV NAME WHERE TO DISPLAY CHART
                "title": "Net Generation",
                "theme": "none",
                "path":"path={0}|value&path={0}|color",//PI Attributes Path for Query
              }, 
            {
                "afname": "SCC@360",//PI AF ELEMENT
                "div": "scc360",// DIV NAME WHERE TO DISPLAY CHART
                "title": "SCC",
                "theme": "light",
                "path":"path={0}|value&path={0}|color",//PI Attributes Path for Query
             },
            {
                "afname": "HeatRate",//PI AF ELEMENT
                "div": "heatrate",// DIV NAME WHERE TO DISPLAY CHART
                "title": "Heat Rate",
                "theme": "light",
                "path":"path={0}|value&path={0}|color",//PI Attributes Path for Query
            }, 
            {
                "afname": "SOC",//PI AF ELEMENT
                "div": "soc",// DIV NAME WHERE TO DISPLAY CHART
                "title": "SOC",
                "theme": "light",
                "path":"path={0}|value&path={0}|color",//PI Attributes Path for Query
             }, 
            {
                "afname": "OilConsumption",//PI AF ELEMENT
                "div": "oilconsumption",// DIV NAME WHERE TO DISPLAY CHART
                "title": "Oil Consumption",
                "theme": "light",
                "path":"path={0}|value&path={0}|color",//PI Attributes Path for Query
            }, 
            {
                "afname": "GCV",//PI AF ELEMENT
                "div": "gcv",// DIV NAME WHERE TO DISPLAY CHART
                "title": "GCV",
                "theme": "light",
                "path":"path={0}|value&path={0}|color",//PI Attributes Path for Query
             }
    ];
    
    var mtdytd=[
            {
                "afname": "MTD", //PI AF ELEMENT
                "theme": "light",
                "type":"serial",//type of chart
                "path":"path={0}|BP&path={0}|ACT&path={0}|Actual", //PI Attributes Path for Query
                "balloonText": "<b>[[value]]</b>" 
            },
            {
                "afname": "YTD", //PI AF ELEMENT
                "theme": "light",
                "type":"serial",//type of chart
                "path":"path={0}|BP&path={0}|ACT&path={0}|Actual", //PI Attributes Path for Query
                "balloonText": "<b>[[value]]</b>" 
            }
    ];
    
    var monthlyReceipt = [
            {
                "afname": "CoalReceipt", //PI AF ELEMENT
                "div": "monthlyCoalReceipt", // DIV NAME WHERE TO DISPLAY CHART
                "title": "Monthly Coal Receipt(MT)",
                "theme": "light",
                "path":"path={0}|ACT&path={0}|BP", //PI Attributes Path for Query
                "graph": [{
                        "balloonText": "BP<br>[[value]]",
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
                        "balloonText": "ACT<br>[[value]]",
                        "fillAlphas": 0.8,
                        "id": "AmGraph-2",
                        "lineAlpha": 0.2,
                        "title": "ACT",
                        "type": "column",
                        "color":"orange",
                        "valueField": "act",
                        "fixedColumnWidth": 14
                        }]
            },
            {
                "afname": "DeliveredCost", //PI AF ELEMENT
                "div": "monthlyDeliveredCost",// DIV NAME WHERE TO DISPLAY CHART
                "title": "Monthly Delivered Cost(Rs/MT)",
                "theme": "light",
                "path":"path={0}|ACT&path={0}|BP",//PI Attributes Path for Query
                "graph": [{
                        "balloonText": "BP<br>[[value]]",
                        "fillAlphas": 0.8,
                        "id": "AmGraph-1",
                        "lineAlpha": 0.2,
                        "title": "BP",
                        "type": "column",
                        "color": "skyblue",
                        "valueField": "bp",
                        "fixedColumnWidth": 14
                    },
                    {
                        "balloonText": "ACT<br>[[value]]",
                        "fillAlphas": 0.8,
                        "id": "AmGraph-2",
                        "lineAlpha": 0.2,
                        "title": "ACT",
                        "type": "column",
                        "color": "orange",
                        "valueField": "act",
                        "fixedColumnWidth": 14
                    }]
            },
            {
                "afname": "GrossGeneration",//PI AF ELEMENT
                "div": "monthlyGrossgeneration",// DIV NAME WHERE TO DISPLAY CHART
                "title": "Gross Generation in MU",
                "theme": "none",
                "path":"path={0}|ACT&path={0}|BP",//PI Attributes Path for Query
                "graph": [{
                        "balloonText": "BP<br>[[value]]",
                        "fillAlphas": 0.8,
                        "id": "AmGraph-1",
                        "lineAlpha": 0.2,
                        "title": "BP",
                        "type": "column",
                        "color": "skyblue",
                        "valueField": "bp",
                        "fixedColumnWidth": 14
                    },
                    {
                        "balloonText": "ACT<br>[[value]]",
                        "fillAlphas": 0.8,
                        "id": "AmGraph-2",
                        "lineAlpha": 0.2,
                        "title": "ACT",
                        "type": "column",
                        "color": "orange",
                        "valueField": "act",
                        "fixedColumnWidth": 14
                    }]
            }
    ];
/****DASHBOARD KPIS****/