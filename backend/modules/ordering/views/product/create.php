<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TblProduct */

$this->title = 'เพื่มข้อมูล';
$this->params['breadcrumbs'][] = ['label' => 'สินค้า', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-product-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
