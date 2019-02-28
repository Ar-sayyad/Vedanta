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

