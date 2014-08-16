<?php
/* @var $this EduController */
/* @var $model Edu */

$this->breadcrumbs=array(
	'Edus'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Edu', 'url'=>array('index')),
	array('label'=>'Manage Edu', 'url'=>array('admin')),
);
?>

<h1>Create Edu</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>