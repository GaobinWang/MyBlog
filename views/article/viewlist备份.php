<html>
<head></head>
<body>


<?php foreach ($models as $model) : ?>

<?php
$id=$model->id;
$title=$model->title;
$author=$model->author;
$uptime=$model->uptime;
?>
	<a href="http://localhost?r=article/view&id=<?= $id?>"> 
		<?= $title;?>    作者：<?= $author;?>      上传时间：<?= $uptime;?>    <br/>
	</a>  <br/>

<?php endforeach;?>


</body>
</html>
