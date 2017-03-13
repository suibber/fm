<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\FarmArticle */

$this->title = 'Create Farm Article';
$this->params['breadcrumbs'][] = ['label' => 'Farm Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="farm-article-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
