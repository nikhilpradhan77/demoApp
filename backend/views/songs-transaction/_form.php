<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SongsTransaction */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="songs-transaction-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'song_id')->textInput() ?>

    <?= $form->field($model, 'singer_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
