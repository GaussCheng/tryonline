<?php
/* @var $this ProvinceController */
/* @var $data Province */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('province_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->province_id), array('view', 'id'=>$data->province_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('desc')); ?>:</b>
	<?php echo CHtml::encode($data->desc); ?>
	<br />


</div>