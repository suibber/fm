<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);

$class = Yii::$app->request->getPathInfo();
$class = explode('/', $class);
$class = array_shift($class);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title?$this->title:'梦想农场') ?></title>
    <?php $this->head() ?>
    <meta name="viewport" content="initial-scale=1,maximum-scale=1, minimum-scale=1">
</head>
<body>
		<!--header class="header">
			<img src="">
			<h1>梦想农场</h1>
		</header-->
<?php $this->beginBody() ?>

        <?= $content ?>

		<footer>
			<ul class="footer-nav">
				<li <?=($class=='farm-article'?'class="active"':'')?>><a href="/farm-article"><i></i>首页</a></li>
				<li <?=($class=='farm-item'?'class="active"':'')?>><a href="/farm-item"><i></i>市场</a></li>
				<li <?=($class=='farm-land'?'class="active"':'')?>><a href="/farm-land"><i></i>田园</a></li>
				<li <?=($class=='user-center'?'class="active"':'')?>><a href="/user-center"><i></i>我的</a></li>
			</ul>
		</footer>
		<script src="../js/common.js"></script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
