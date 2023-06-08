<?php
/* @var $this ObatController */
/* @var $model Obat */

$this->breadcrumbs=array(
	'Obats'=>array('index'),
	$model->obat_id,
);

$this->menu=array(
	array('label'=>'List Obat', 'url'=>array('index')),
	array('label'=>'Create Obat', 'url'=>array('create')),
	array('label'=>'Update Obat', 'url'=>array('update', 'id'=>$model->obat_id)),
	array('label'=>'Delete Obat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->obat_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Obat', 'url'=>array('admin')),
);
?>

<h1>View Obat #<?php echo $model->obat_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'obat_id',
		'obat_nama',
		'harga',
		'terjual',
	),
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