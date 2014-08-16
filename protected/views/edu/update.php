<?php
/* @var $this EduController */
/* @var $model Edu */

$this->breadcrumbs=array(
	'Edus'=>array('index'),
	$model->edu_id=>array('view','id'=>$model->edu_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Edu', 'url'=>array('index')),
	array('label'=>'Create Edu', 'url'=>array('create')),
	array('label'=>'View Edu', 'url'=>array('view', 'id'=>$model->edu_id)),
	array('label'=>'Manage Edu', 'url'=>array('admin')),
);
?>

<h1>Update Edu <?php echo $model->edu_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>