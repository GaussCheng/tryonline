<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'正在试用',
);
?>


<p>This is a "static" page. You may change the content of this page
by updating the file <code><?php echo __FILE__; ?></code>.</p>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<div>
	<?php

		$data = $dataProvider->getData();
		for($i = 0 ; $i < $dataProvider->itemCount; ++$i)
		{
			echo $data[$i]->product_id . $data[$i]->product_name . "<br>";
		}
	// echo $dataProvider->itemCount
	?>
</div>
