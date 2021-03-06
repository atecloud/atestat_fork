<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\StationUtilizationView */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Station Utilization Views', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="station-utilization-view-view">

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
            'FACILITY',
            'SHORT_STATION_NAME',
            'STATION_MASK',
            'STATION_COUNT',
            'WORK_MINUTES',
            'TEST_DATE',
        ],
    ]) ?>

</div>
