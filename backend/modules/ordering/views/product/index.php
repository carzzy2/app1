<?php

use yii\helpers\Html;
use yii\grid\GridView;


$this->title = 'สินค้า';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-new-window"></i> เพื่มข้อมูล', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'pro_id',
            'pro_name',
            'pro_price',
            'pro_unit',

            [
            'class' => 'yii\grid\ActionColumn',
            'contentOptions'=>['width'=>'100'],
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
