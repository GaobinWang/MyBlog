<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = '案例分析';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        案例正在编写中。。。。。。
    </p>

    <code><?= __FILE__ ?></code>
</div>

<?php
$model = new StdClass();
$model->name = 'Go';
?>


<h1>GO</h1>

<h1><?= $model->name?></h1>