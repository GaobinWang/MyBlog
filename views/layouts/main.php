<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => '不得不改的小窝',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
			['label' => '测试页', 'url' => ['/site/test']],
            ['label' => '首页', 'url' => ['/site/index']],
			//['label' => '首页', 'url' => ['/artile/index']],
			['label' => '统计&机器学习', 'url' => ['/article/sl']],
			['label' => '金融&量化投资', 'url' => ['/article/quant']],
			['label' => '编程语言', 'dropDownOptions' => ['class' => 'ul-transparent'],
		'activateParents' => true,
		'items' => [
			['label' => 'R', 'url' => ['/article/r']],
			['label' => 'Python', 'url' => ['/article/python']],
			['label' => 'SQL', 'url' => ['/article/sql']],
			['label' => 'Others', 'url' => ['/article/others']],
		]],
		    ['label' => '大数据', 'url' => ['/article/bigdata']],
		    ['label' => '杂谈', 'url' => ['/article/zatan']],
            ['label' => '联系我', 'url' => ['/site/contact']],
			['label' => '个人简历', 'url' => ['/article/resume']],
			
			
			
            Yii::$app->user->isGuest ? (
                ['label' => '登录', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    '布局 (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; 不得不改的小窝 <?= date('Y') ?></p>

        
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
