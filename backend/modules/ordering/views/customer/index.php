<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\ordering\models\CustomerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ข้อมูลลูกค้า';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-customer-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('<i class="glyphicon glyphicon-new-window"></i> เพื่มข้อมูล', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'cus_id',
            'cus_name',
            'cus_tel',
            'cus_add',
            
            [
            'class' => 'yii\grid\ActionColumn',
            'contentOptions'=>['width'=>'200'],
            'template' => '{view} {update} {delete}',
            'buttons' => [
                'view' => function ($url, $model) {
                    return Html::a('<i class="	glyphicon glyphicon-eye-open"></i> รายละเอียด ', $url, [
                                'title' => "แก้ไข",
                                'class' => 'btn btn-default btn-sm',
                    ]);
                },
                'update' => function ($url, $model) {
                    return Html::a('<i class="glyphicon glyphicon-edit"></i> แก้ไข ', $url, [
                                'title' => "แก้ไข",
                                'class' => 'btn btn-warning btn-sm',
                    ]);
                },
                'delete' => function ($url, $model) {
                    return Html::a('<i class="glyphicon glyphicon-floppy-remove"></i> ลบ ', $url, [
                                'title' => "ลบ",
                                'class' => 'btn btn-danger btn-sm',
                                'data-confirm' => 'ยืนยัน',
                    ]);
                }
            ],
            ],        
        ],
    ]); ?>
</div>
