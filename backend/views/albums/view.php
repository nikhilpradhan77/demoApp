<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Albums */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Albums', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="albums-view">

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
            'name',
            'featured_image',
            // [            
            //     'attribute'=>'photo',
            //     'value'=>$model->photo,
            //     'format' => ['image',['width'=>'100','height'=>'100']],
            // ],     
        [
            'attribute' => 'featured_image',
            'value'=>  Yii::getAlias('@studentImgUrl' . '/' . $model->featured_image),
            'format'=> ['image',['width'=>'100','height'=>'100']]
        ]
      //     'created_by',
        //     'created_at',
        //     'updated_by',
        //     'updated_at',
        //     'is_deleted',

         ],
    ]) ?>

</div>
