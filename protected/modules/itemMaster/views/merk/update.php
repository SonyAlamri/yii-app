<?php
/* @var $this MerkController */
/* @var $model Merk */

$this->breadcrumbs=array(
	'Merks'=>array('index'),
	$model->merk_id=>array('view','id'=>$model->merk_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Merk', 'url'=>array('index')),
	array('label'=>'Create Merk', 'url'=>array('create')),
	array('label'=>'View Merk', 'url'=>array('view', 'id'=>$model->merk_id)),
	array('label'=>'Manage Merk', 'url'=>array('admin')),
);
?>

<h1>Update Merk <?php echo $model->merk_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>