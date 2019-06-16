<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\AlbumsTransaction */

$this->title = 'Create Albums Transaction';
$this->params['breadcrumbs'][] = ['label' => 'Albums Transactions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="albums-transaction-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
