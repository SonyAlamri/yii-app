<?php
/* @var $this AlamatController */
/* @var $data Alamat */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->alamat_id), array('view', 'id'=>$data->alamat_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat_nama')); ?>:</b>
	<?php echo CHtml::encode($data->alamat_nama); ?>
	<br />


</div>