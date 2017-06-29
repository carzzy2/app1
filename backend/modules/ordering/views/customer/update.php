<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TblCustomer */

$this->title = 'แก้ไขข้อมูลลูกค้า: ' . $model->cus_id;
$this->params['breadcrumbs'][] = ['label' => 'ข้อมูลลูกค้า', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cus_id, 'url' => ['view', 'id' => $model->cus_id]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="tbl-customer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
