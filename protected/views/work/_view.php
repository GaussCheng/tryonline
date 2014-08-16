<?php
/* @var $this WorkController */
/* @var $data Work */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('work_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->work_id), array('view', 'id'=>$data->work_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('desc')); ?>:</b>
	<?php echo CHtml::encode($data->desc); ?>
	<br />


</div>