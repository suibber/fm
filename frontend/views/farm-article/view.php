<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\FarmArticle */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Farm Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="farm-article-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'type',
            'title',
            'content:ntext',
            'create_time',
            'update_time',
            'create_user',
            'viewer_num',
            'collect_num',
        ],
    ]) ?>

</div>
