<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AlbumsTransaction */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="albums-transaction-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'album_id')->textInput() ?>

    <?= $form->field($model, 'singer_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
