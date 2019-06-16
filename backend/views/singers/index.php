<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SingersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Singers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="singers-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Singers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            return Html::a(Html::encode($model->name), ['view', 'id' => $model->id]);
        },
    ]) ?>


</div>
