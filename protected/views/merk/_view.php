<?php
/* @var $this MerkController */
/* @var $data Merk */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('merk_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->merk_id), array('view', 'id'=>$data->merk_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_merk')); ?>:</b>
	<?php echo CHtml::encode($data->nama_merk); ?>
	<br />


</div>