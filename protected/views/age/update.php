<?php
/* @var $this AgeController */
/* @var $model Age */

$this->breadcrumbs=array(
	'Ages'=>array('index'),
	$model->age_id=>array('view','id'=>$model->age_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Age', 'url'=>array('index')),
	array('label'=>'Create Age', 'url'=>array('create')),
	array('label'=>'View Age', 'url'=>array('view', 'id'=>$model->age_id)),
	array('label'=>'Manage Age', 'url'=>array('admin')),
);
?>

<h1>Update Age <?php echo $model->age_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>