<?php
/* @var $this MerkController */
/* @var $model Merk */

$this->breadcrumbs=array(
	'Merks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Merk', 'url'=>array('index')),
	array('label'=>'Manage Merk', 'url'=>array('admin')),
);
?>

<h1>Create Merk</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>