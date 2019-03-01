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