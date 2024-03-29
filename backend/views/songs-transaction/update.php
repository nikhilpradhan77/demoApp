<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SongsTransaction */

$this->title = 'Update Songs Transaction: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Songs Transactions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="songs-transaction-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
