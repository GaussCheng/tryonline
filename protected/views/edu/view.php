<?php
/* @var $this EduController */
/* @var $model Edu */

$this->breadcrumbs=array(
	'Edus'=>array('index'),
	$model->edu_id,
);

$this->menu=array(
	array('label'=>'List Edu', 'url'=>array('index')),
	array('label'=>'Create Edu', 'url'=>array('create')),
	array('label'=>'Update Edu', 'url'=>array('update', 'id'=>$model->edu_id)),
	array('label'=>'Delete Edu', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->edu_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Edu', 'url'=>array('admin')),
);
?>

<h1>View Edu #<?php echo $model->edu_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'edu_id',
		'desc',
	),
)); ?>
