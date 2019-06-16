<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Albums */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="albums-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

  

<?= $form->field($model, 'featured_image')->fileInput(['multiple' => 'multiple', 'accept' => 'image/*']) ?>



<!-- 
     <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'created_at') ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>

    <?= $form->field($model, 'updated_at') ?>

    <?= $form->field($model, 'is_deleted')->textInput() ?>  -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
