<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

$username = Users::model()->findAll();
//print_r(username);

$this->widget(
    'chartjs.widgets.ChBars', 
    array(
        'width' => 600,
        'height' => 300,
        'htmlOptions' => array(),
        'labels' => array("January","February","March","April","May","June"),
        'datasets' => array(
            array(
                "fillColor" => "#ff00ff",
                "strokeColor" => "rgba(220,220,220,1)",
                "data" => array(10, 20, 30, 40, 50, 60)
            )       
        ),
        'options' => array()
    )
); 

?>
<h1><center style="color:#3A5245;">Sistem Informasi Manajemen Rumah Sakit</center><h1>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik</title>
</head>
<body style="background-color:#3A5245;">

</body>
</html>

