<?php
/* @var $this AgeController */
/* @var $model Age */

$this->breadcrumbs=array(
	'Ages'=>array('index'),
	$model->age_id,
);

$this->menu=array(
	array('label'=>'List Age', 'url'=>array('index')),
	array('label'=>'Create Age', 'url'=>array('create')),
	array('label'=>'Update Age', 'url'=>array('update', 'id'=>$model->age_id)),
	array('label'=>'Delete Age', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->age_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Age', 'url'=>array('admin')),
);
?>

<h1>View Age #<?php echo $model->age_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'age_id',
		'desc',
	),
)); ?>
