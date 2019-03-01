var baseServiceUrl = "https://192.168.1.28:1706/piwebapi/"; /***PI WEBAPI URL***/
var user = "Asif";/***USERNAME***/
var pass = "ECG@123";/***PASSWORD***/
var afServerName = "ECG-DEV-SERVER";/***AF SERVER NAME***/
var afDatabaseName = "BALCOPOWER";//Aasif_Development//"Mayhar";/***DATABASE NAME***/
var EnumerationSets = "CONNECTED_TO_PLANT";/***ENUMERATION SET NAME***/
var masterTemplateName = "KPIS";/***MASTER TEMPLATE NAME***/
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
