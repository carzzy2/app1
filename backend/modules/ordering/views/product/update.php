<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TblProduct */

$this->title = 'แก่ไขข้อมูล: ' . $model->pro_id;
$this->params['breadcrumbs'][] = ['label' => 'สินค้า', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pro_id, 'url' => ['view', 'id' => $model->pro_id]];
$this->params['breadcrumbs'][] = 'แก้ไขข้อมูล';
?>
<div class="tbl-product-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
