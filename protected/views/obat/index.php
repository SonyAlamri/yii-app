<?php
/* @var $this ObatController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Obats',
);

$this->menu=array(
	array('label'=>'Create Obat', 'url'=>array('create')),
	array('label'=>'Manage Obat', 'url'=>array('admin')),
);
?>

<h1>Obats</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
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