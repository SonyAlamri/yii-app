<?php
/* @var $this MerkController */
/* @var $model Merk */

$this->breadcrumbs=array(
	'Merks'=>array('index'),
	$model->merk_id,
);

$this->menu=array(
	array('label'=>'List Merk', 'url'=>array('index')),
	array('label'=>'Create Merk', 'url'=>array('create')),
	array('label'=>'Update Merk', 'url'=>array('update', 'id'=>$model->merk_id)),
	array('label'=>'Delete Merk', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->merk_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Merk', 'url'=>array('admin')),
);
?>

<h1>View Merk #<?php echo $model->merk_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'merk_id',
		'nama_merk',
	),
)); ?>
