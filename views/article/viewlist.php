<html>
<head></head>
<body>


<?php foreach ($models as $model) : ?>

<?php
$id=$model->id;
$title=$model->title;
$author=$model->author;
$uptime=$model->uptime;
$content=$model->content;
?>
	<a href="http://localhost?r=article/view&id=<?= $id?>"> 
		<h2><?= $title;?>	作者：<?= $author;?>	上传时间：<?= $uptime;?> </h2>   <br/>
	</a>  <br/>
	
	<?= $content;?>  <br/>

<?php endforeach;?>
<br/>

</body>
</html>
