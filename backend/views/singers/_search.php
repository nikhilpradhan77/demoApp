<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SingersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="singers-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <!-- <?= $form->field($model, 'id') ?> -->

    <?= $form->field($model, 'name') ?>

    <!-- <?= $form->field($model, 'image') ?>

    <?= $form->field($model, 'dob') ?>

    <?= $form->field($model, 'info') ?> -->

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'is_deleted') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
