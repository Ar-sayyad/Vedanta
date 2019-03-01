<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ECGIT">
    <meta name="author" content="ECGIT">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>piadmin/images/logo.png">
    <title>Vedanta | <?php echo $titlebar;?></title>
    <link href="<?php echo base_url();?>piadmin/css/lib/amchart/export.css" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>piadmin/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>piadmin/css/lib/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="<?php echo base_url();?>piadmin/css/helper.css" rel="stylesheet">
    <link href="<?php echo base_url();?>piadmin/css/style.css" rel="stylesheet">
</head>
<style>
#plantloadfactor,#plantAvailabilityfactor,#trips,#tubeleaks,#grossgeneration,#netgeneration,#auxconsumption,#grossheatrate,#gascalorificValue,#scc360 {
  width: 100%;
  height: 350px;
}
.center{
    text-align: center;
    margin-top: 5px;
    margin-bottom: 0px !important;
}
.center h4{
    font-weight: 600;
    color:#2e3192;
    font-size: 18px;
}
.mydata{
    padding: 20px 25px 20px 25px;
}
#overallPlantGeneration,#overallAuxGeneration,#overallPlantGrossEfficiency,#overallPlantGrossHeatRate,#mwFFTGeneration,#mwFFTAuxConsumption,#GrossFFTEfficiency,#fftPlantGrossHeatRate,
#mwTWHGeneration,#mwTWHAuxConsumption,#GrossTWHEfficiency,#twhPlantGrossHeatRate{
  width: 100%;
  height: 250px;
}
.col-lg-2, .col-lg-3, .col-lg-4, .col-12,.col-lg-12{
    padding-right: 3px !important;
    padding-left: 3px !important;
}

.headd{
       background-color: #0288c5;
    text-align: center;
    padding-top: 10px;
    margin-top: 20px;
    box-shadow: 0 5px 10px #6c757d;
}
#unitloadfactor,#unitAvailabilityfactor,#boilereffio,#boilereffhl,#grossgeneration,#netgeneration,#auxconsumption,#coalconsumption,#heatrate,#scc,#unitoverall,#turbine {
  width: 100%;
  height: 280px;
}
</style>