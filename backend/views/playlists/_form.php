<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Playlists */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="playlists-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'song_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'is_deleted')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
