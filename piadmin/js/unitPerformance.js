$.each(performanceUnits,function(key){$('#'+performanceUnits[key].div).html("<img style='margin-top:20%;margin-left:40%;width:75px;height:75px;' src='../piadmin/images/loading.gif'>");var rankingElements=[];var batch={"database":{"Method":"GET","Resource":baseServiceUrl+"elements?path=\\\\"+afServerName+"\\"+afDatabaseName+"\\"+elementName+"\\"+performanceUnits[key].afname+"&selectedFields=WebId;Name;Path;Links.Attributes"},"attributes":{"Method":"GET","RequestTemplate":{"Resource":baseServiceUrl+"attributes/multiple?selectedFields=Items.Object.Name;Items.Object.Path;Items.Object.WebId&"+performanceUnits[key].path},"ParentIds":["database"],"Parameters":["$.database.Content.Path"]},"values":{"Method":"GET","RequestTemplate":{"Resource":baseServiceUrl+"streams/{0}/value"},"ParentIds":["attributes"],"Parameters":["$.attributes.Content.Items[*].Content.Items[*].Object.WebId"]}};var batchStr=JSON.stringify(batch,null,2);var batchResult=processJsonContent(baseServiceUrl+"batch",'POST',batchStr);$.when(batchResult).fail(function(){warningmsg("Cannot Launch Batch!!!")});$.when(batchResult).done(function(){var batchResultItems=(batchResult.responseJSON.attributes.Content.Items);let valuesID=0;var color=[{"color":"#0D52D1"},{"color":"#de4c4f"}];$.each(batchResultItems,function(elementID){var attrItems=batchResultItems[elementID].Content.Items;attrItems.forEach(function(attr,attrID){var elementName=batchResult.responseJSON.attributes.Content.Items[elementID].Content.Items[attrID].Object.Name;let attrValue="-";if(attr!==undefined&&attr.Object!==undefined){attrName=attr.Object.Name;const getNestedObject=(nestedObj,pathArr)=>{return pathArr.reduce((obj,key)=>(obj&&obj[key]!==undefined)?obj[key]:undefined,nestedObj)};if(batchResult.responseJSON.values.Content.Items!==undefined&&(batchResult.responseJSON.values.Content.Status===undefined||batchResult.responseJSON.values.Content.Status<400)&&batchResult.responseJSON.values.Content.Items[valuesID].Status===200){var attrV=getNestedObject(batchResult.responseJSON.values,['Content','Items',valuesID,'Content','Value']);if(attrV!==""&&!isNaN(attrV)){attrValue=(Math.round((attrV)*100)/100)}}}
rankingElements.push({mw:elementName,color:color[attrID].color,val:attrValue});valuesID++})});if(performanceUnits[key].type==='serial'){var chart=AmCharts.makeChart(performanceUnits[key].div,{"type":performanceUnits[key].type,"theme":performanceUnits[key].theme,"categoryField":"mw","startEffect":"elastic","startDuration":1,"categoryAxis":{"gridPosition":"start","position":"left","labelRotation":90,"fontSize":11},"trendLines":[],"graphs":[{"balloonText":performanceUnits[key].balloonText,"colorField":"color","fillAlphas":0.85,"id":"AmGraph-1","lineAlpha":0.1,"type":"column","color":"skyblue","valueField":"val","fixedColumnWidth":20}],"guides":[],"valueAxes":[{"id":"ValueAxis-1","position":"bottom","axisAlpha":1,"titleFontSize":14,"fontSize":11,"title":performanceUnits[key].title}],"plotAreaFillAlphas":0.1,"depth3D":0,"angle":10,"allLabels":[],"balloon":{"drop":!0,"cornerRadius":5,"adjustBorderColor":!1,"color":"#ffffff","fixedPosition":!0,"fontSize":10},"chartCursor":{"pan":!0,"valueLineEnabled":!0,"valueLineBalloonEnabled":!0,"cursorAlpha":0.05,"valueLineAlpha":0.2,"fullWidth":!0,"valueBalloonsEnabled":!0,"categoryBalloonEnabled":!1},"titles":[],"dataProvider":rankingElements,"export":{"enabled":!0}})}else{var chart=AmCharts.makeChart(performanceUnits[key].div,{"type":performanceUnits[key].type,"theme":performanceUnits[key].theme,"titles":[],"dataProvider":rankingElements,"balloon":{"drop":!0,"adjustBorderColor":!1,"color":"#ffffff","fixedPosition":!0,"fontSize":9},"valueField":"val","titleField":"mw","adjustBorderColor":!1,"startDuration":0,"labelsEnabled":!1,"labelRadius":5,pullOutRadius:60,"outlineColor":"","innerRadius":"45%","depth3D":0,"balloonText":performanceUnits[key].balloonText,"angle":0,"export":{"enabled":!0}})}})})