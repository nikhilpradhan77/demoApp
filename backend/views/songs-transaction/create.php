<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SongsTransaction */

$this->title = 'Create Songs Transaction';
$this->params['breadcrumbs'][] = ['label' => 'Songs Transactions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="songs-transaction-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
