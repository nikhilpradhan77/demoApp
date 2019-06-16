<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Songs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="songs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'album_id')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'release_date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'featured_image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'genre_id')->textInput() ?>

    <!-- <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'is_deleted')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
