<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\ordering\models\CustomerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-customer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'cus_id') ?>

    <?= $form->field($model, 'cus_name') ?>

    <?= $form->field($model, 'cus_tel') ?>

    <?= $form->field($model, 'cus_add') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
