<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TblOrder */

$this->title = 'สั่งซื้อสินค้า';
$this->params['breadcrumbs'][] = ['label' => 'สั่งซื้อสินค้า', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-order-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'customer' => $customer,
        'product' => $product,
    ]) ?>

</div>
