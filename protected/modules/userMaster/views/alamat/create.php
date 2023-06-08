<?php
/* @var $this AlamatController */
/* @var $model Alamat */

$this->breadcrumbs=array(
	'Alamats'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Alamat', 'url'=>array('index')),
	array('label'=>'Manage Alamat', 'url'=>array('admin')),
);
?>

<h1>Create Alamat</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>