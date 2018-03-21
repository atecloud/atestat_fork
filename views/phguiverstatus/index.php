<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PHGUIVERSTATUSSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Phguiverstatuses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phguiverstatus-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Phguiverstatus', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'bootstrap' => 'true',
        'containerOptions'=>['style'=>'overflow: auto'], // only set when $responsive = false
        'headerRowOptions'=>['class'=>'kartik-sheet-style'],
        'filterRowOptions'=>['class'=>'kartik-sheet-style'],
        'pjax'=>true, // pjax is set to always true for this demo
        // set your toolbar
        'toolbar'=> [
            [
                'content'=>
                // Html::button('<i class="glyphicon glyphicon-plus"></i>', ['type'=>'button', 'title'=>Yii::t('kvgrid', 'Add Book'), 'class'=>'btn btn-success', 'onclick'=>'alert("This will launch the book creation form.\n\nDisabled for this demo!");']) . ' '.
                Html::a('<i class="glyphicon glyphicon-repeat"></i>', [''], ['data-pjax'=>0, 'class'=>'btn btn-default', 'title'=>'Reset Grid'])
            ],
            '{export}',
            '{toggleData}',
        ],
        // set export properties
        'export'=>[
            'fontAwesome'=>true
        ],
        // parameters from the demo form
        'bordered'=>false,
        'striped'=>true,
        'condensed'=>true,
        'responsive'=>true,
        'hover'=>true,
        //  'showPageSummary'=>$pageSummary,
        'panel'=>[
            'type'=>GridView::TYPE_PRIMARY,
            //  'heading'=>$heading,
        ],
        'persistResize'=>false,

        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'STATION_ID',
            'PHGUI_VERSION',
            'STATION_IP',
            'FACILITY_NAME',
            // 'PHGUI_PATH',
            // 'LAST_DB_UPDATE',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
